<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\ParentRecord;
use App\Models\StudentRecord;
use App\Models\School;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class RegistrationForm extends Component
{
    // Basic user fields
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $password_confirmation;
    public $username;
    public $role;
    public $school;
    public $school_id;
    
    // Personal information
    public $birthday;
    public $address;
    public $blood_group;
    public $denomination;
    public $county_id;
    public $city;
    public $gender;
    public $phone;
    public $id_number;
    public $passport_number;
    
    // Parent-specific fields
    public $relationship;
    public $student_admission_number;
    
    // Student-specific fields
    public $admission_number;
    public $admission_date;
    public $my_class_id;
    public $section_id;
    
    // Available options
    public $roles;
    public $counties;
    public $my_classes;
    public $sections;

    protected function rules()
    {
        // Base required fields for all users
        $rules = [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|unique:users|max:255',
            'gender' => 'required|in:male,female',
            'role' => 'required|exists:roles,name',
        ];
        
        // Role-specific validation rules
        if ($this->role === 'student') {
            $rules['admission_number'] = 'required|string|unique:student_records,admission_number';
            $rules['phone'] = 'nullable|string';
        } elseif ($this->role === 'parent') {
            $rules['phone'] = 'required|string';
            $rules['student_admission_number'] = 'required|string|exists:student_records,admission_number';
            $rules['relationship'] = 'required|string|in:father,mother,guardian,other';
            // Either ID number or passport number is required
            $rules['id_number'] = 'required_without:passport_number|nullable|string';
            $rules['passport_number'] = 'required_without:id_number|nullable|string';
        } elseif ($this->role === 'teacher') {
            $rules['phone'] = 'required|string';
            $rules['id_number'] = 'required|string';
            $rules['passport_number'] = 'nullable|string';
        } else {
            // For other staff roles
            $rules['phone'] = 'required|string';
            $rules['id_number'] = 'required|string';
            $rules['passport_number'] = 'nullable|string';
        }
        
        // Optional fields for all users
        $rules['birthday'] = 'nullable|date';
        $rules['address'] = 'nullable|string';
        $rules['blood_group'] = 'nullable|string';
        $rules['denomination'] = 'nullable|string';
        $rules['county_id'] = 'nullable|exists:counties,id';
        $rules['city'] = 'nullable|string';
        
        return $rules;
    }

    public function mount()
    {
        $this->school = School::first();
        $this->school_id = $this->school->id;
        $this->roles = Role::whereNotIn('name', ['super-admin', 'admin'])->get();
        $this->counties = \App\Models\County::all();
        $this->my_classes = \App\Models\MyClass::all();
    }

    public function updatedMyClassId($value)
    {
        if ($value) {
            $this->sections = \App\Models\Section::where('my_class_id', $value)->get();
        }
    }

    public function updatedRole($value)
    {
        // Reset role-specific fields when role changes
        if ($value === 'student') {
            $this->admission_number = null;
            $this->admission_date = null;
            $this->my_class_id = null;
            $this->section_id = null;
        } elseif ($value === 'parent') {
            $this->relationship = null;
            $this->student_admission_number = null;
        }
    }

    public function register()
    {
        $validatedData = $this->validate();
        
        try {
            DB::beginTransaction();
            
            // Create the user
            $user = User::create([
                'first_name' => $validatedData['first_name'],
                'last_name' => $validatedData['last_name'],
                'name' => $validatedData['first_name'] . ' ' . $validatedData['last_name'],
                'email' => $validatedData['email'],
                'username' => $validatedData['username'],
                'password' => Hash::make($validatedData['password']),
                'gender' => $validatedData['gender'],
                'school_id' => $this->school_id,
                'birthday' => $validatedData['birthday'] ?? null,
                'address' => $validatedData['address'] ?? null,
                'blood_group' => $validatedData['blood_group'] ?? null,
                'denomination' => $validatedData['denomination'] ?? null,
                'county_id' => $validatedData['county_id'] ?? null,
                'city' => $validatedData['city'] ?? null,
                'phone' => $validatedData['phone'] ?? null,
                'id_number' => $validatedData['id_number'] ?? null,
                'passport_number' => $validatedData['passport_number'] ?? null,
            ]);
            
            // Assign role
            $user->assignRole($validatedData['role']);
            
            // Handle parent-specific data
            if ($validatedData['role'] === 'parent') {
                // Create parent record
                $parentRecord = ParentRecord::create([
                    'user_id' => $user->id,
                ]);
                
                // Link to student
                $student = User::whereHas('studentRecord', function($query) use ($validatedData) {
                    $query->where('admission_number', $validatedData['student_admission_number']);
                })->first();
                
                if ($student) {
                    $parentRecord->students()->attach($student->id, [
                        'relationship' => $validatedData['relationship']
                    ]);
                }
            }
            
            // Handle student-specific data
            if ($validatedData['role'] === 'student') {
                StudentRecord::create([
                    'user_id' => $user->id,
                    'admission_number' => $validatedData['admission_number'],
                    'admission_date' => $validatedData['admission_date'] ?? now(),
                    'my_class_id' => $validatedData['my_class_id'] ?? null,
                    'section_id' => $validatedData['section_id'] ?? null,
                ]);
            }
            
            // Handle teacher-specific data
            if ($validatedData['role'] === 'teacher') {
                \App\Models\TeacherRecord::create([
                    'user_id' => $user->id,
                ]);
            }
            
            DB::commit();
            
            session()->flash('registration_success', 'Account created successfully! Please login.');
            
            return redirect()->route('login');
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Registration failed: ' . $e->getMessage());
            return null;
        }
    }

    public function render()
    {
        return view('livewire.registration-form');
    }
} 