<?php

namespace App\Livewire;

use App\Models\County;
use App\Models\MyClass;
use App\Models\Section;
use App\Models\StudentRecord;
use App\Models\User;
use App\Services\School\SchoolService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class RegistrationForm extends Component
{
    public $email;
    public $password;
    public $password_confirmation;
    public $first_name;
    public $last_name;
    public $username;
    public $gender;
    public $role = 'student';
    public $phone;
    public $id_number;
    public $passport_number;
    public $admission_number;
    public $admission_date;
    public $my_class_id;
    public $section_id;
    public $birthday;
    public $address;
    public $blood_group;
    public $denomination;
    public $county_id;
    public $city;

    public $school;
    public $my_classes;
    public $sections;
    public $counties;
    public $roles;

    protected $listeners = ['classSelected' => 'loadSections'];

    public function mount(SchoolService $schoolService)
    {
        $this->school = $schoolService->getSchool();
        $this->roles = Role::whereIn('name', ['student', 'teacher', 'parent'])->get();
        $this->loadClasses();
        $this->loadCounties();
    }

    public function loadClasses()
    {
        $this->my_classes = MyClass::whereHas('classGroup', function($query) {
            $query->where('school_id', $this->school->id);
        })->get();
    }

    public function loadSections()
    {
        if ($this->my_class_id) {
            $this->sections = Section::where('my_class_id', $this->my_class_id)->get();
        }
    }

    public function loadCounties()
    {
        $this->counties = County::all();
    }

    public function updatedMyClassId()
    {
        $this->loadSections();
    }

    protected function rules()
    {
        // Get base validation rules for the selected role
        $rules = User::getValidationRules($this->role);

        // Add student-specific validation if role is student
        if ($this->role === 'student') {
            $studentRules = [
                'admission_number' => 'required|string|unique:student_records',
                'admission_date' => 'nullable|date',
                'my_class_id' => 'nullable|exists:my_classes,id',
                'section_id' => 'nullable|exists:sections,id',
            ];
            $rules = array_merge($rules, $studentRules);
        }

        // Add password confirmation rule
        $rules['password_confirmation'] = 'required|same:password';

        return $rules;
    }

    public function register()
    {
        $validatedData = $this->validate($this->rules());

        try {
            DB::beginTransaction();

            // Prepare user data by removing student-specific fields
            $userData = collect($validatedData)
                ->except(['admission_number', 'admission_date', 'my_class_id', 'section_id', 'password_confirmation'])
                ->toArray();

            // Add school_id and hash password
            $userData['school_id'] = $this->school->id;
            $userData['password'] = Hash::make($userData['password']);

            // Create user
            $user = User::create($userData);
            
            // Assign role
            $user->assignRole(strtolower($this->role));

            // Create student record if role is student
            if (strtolower($this->role) === 'student') {
                StudentRecord::create([
                    'user_id' => $user->id,
                    'admission_number' => $validatedData['admission_number'],
                    'admission_date' => $validatedData['admission_date'],
                    'my_class_id' => $validatedData['my_class_id'],
                    'section_id' => $validatedData['section_id'],
                ]);
            }

            DB::commit();

            // Log the user in
            Auth::login($user);

            // Redirect to main dashboard
            return redirect()->route('dashboard');

        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Registration failed. Please try again.');
            throw $e;
        }
    }

    public function render()
    {
        return view('livewire.registration-form');
    }
}
