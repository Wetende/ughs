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
    public $roles = [];
    public $counties = [];
    public $my_classes = [];
    public $sections = [];
    
    // Form processing state
    public $isSubmitting = false;
    public $registrationComplete = false;
    public $successMessage = '';
    public $redirectTo = null;
    
    // Component identification helpers
    public $componentId;

    // Define all listeners
    protected $listeners = ['formSubmit' => 'register'];

    public function boot()
    {
        $this->componentId = uniqid('registration-');
    }

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
            'role' => 'required|in:teacher,student,parent',
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
        try {
            $this->school = School::first();
            if ($this->school) {
                $this->school_id = $this->school->id;
            }
            $this->roles = Role::whereIn('name', ['teacher', 'student', 'parent'])->get();
            $this->counties = \App\Models\County::all();
            $this->my_classes = \App\Models\MyClass::all();
            
            \Log::info('RegistrationForm component mounted', [
                'component_id' => $this->componentId,
                'roles_count' => is_object($this->roles) ? $this->roles->count() : count($this->roles)
            ]);
        } catch (\Exception $e) {
            \Log::error('Error in RegistrationForm mount: ' . $e->getMessage());
            session()->flash('error', 'Error loading registration form: ' . $e->getMessage());
        }
    }

    public function hydrate()
    {
        \Log::info('RegistrationForm component hydrated', [
            'component_id' => $this->componentId,
            'role' => $this->role
        ]);
    }

    public function dehydrate()
    {
        \Log::info('RegistrationForm component dehydrated', [
            'component_id' => $this->componentId,
            'role' => $this->role
        ]);
    }

    public function updatedMyClassId($value)
    {
        if ($value) {
            try {
                $this->sections = \App\Models\Section::where('my_class_id', $value)->get();
                \Log::info('Updated sections based on class', [
                    'component_id' => $this->componentId,
                    'my_class_id' => $value,
                    'sections_count' => is_object($this->sections) ? $this->sections->count() : count($this->sections)
                ]);
            } catch (\Exception $e) {
                \Log::error('Error loading sections: ' . $e->getMessage());
            }
        }
    }

    public function updatedRole($value)
    {
        \Log::info('Role updated', [
            'component_id' => $this->componentId,
            'previous_role' => $this->role,
            'new_role' => $value
        ]);
        
        // Reset role-specific fields when role changes
        if ($value === 'student') {
            $this->reset(['admission_number', 'admission_date', 'my_class_id', 'section_id']);
        } elseif ($value === 'parent') {
            $this->reset(['relationship', 'student_admission_number']);
        } elseif ($value === 'teacher') {
            $this->reset(['id_number', 'phone']);
        }
    }

    public function register()
    {
        // Prevent double submission
        if ($this->isSubmitting) {
            \Log::warning('Prevented duplicate form submission', [
                'component_id' => $this->componentId
            ]);
            return;
        }
        
        $this->isSubmitting = true;
        
        \Log::info('Registration form submitted', [
            'component_id' => $this->componentId,
            'user_data' => [
                'email' => $this->email,
                'role' => $this->role,
                'username' => $this->username
            ]
        ]);
        
        try {
            // Validate form data
            $validatedData = $this->validate();
            
            DB::beginTransaction();
            
            try {
                // Create the user
                $user = User::create([
                    'first_name' => $this->first_name,
                    'last_name' => $this->last_name,
                    'name' => $this->first_name . ' ' . $this->last_name,
                    'email' => $this->email,
                    'username' => $this->username,
                    'password' => Hash::make($this->password),
                    'gender' => $this->gender,
                    'school_id' => $this->school_id,
                    'birthday' => $this->birthday ?? null,
                    'address' => $this->address ?? null,
                    'blood_group' => $this->blood_group ?? null,
                    'denomination' => $this->denomination ?? null,
                    'county_id' => $this->county_id ?? null,
                    'city' => $this->city ?? null,
                    'phone' => $this->phone ?? null,
                    'id_number' => $this->id_number ?? null,
                    'passport_number' => $this->passport_number ?? null,
                ]);
                
                \Log::info('User created', [
                    'component_id' => $this->componentId,
                    'user_id' => $user->id
                ]);
                
                // Assign role
                $user->assignRole($this->role);
                
                \Log::info('Role assigned', [
                    'component_id' => $this->componentId,
                    'user_id' => $user->id,
                    'role' => $this->role
                ]);
                
                // Handle role-specific data
                switch ($this->role) {
                    case 'parent':
                        try {
                            // Create parent record
                            $parentRecord = ParentRecord::create([
                                'user_id' => $user->id,
                            ]);
                            
                            // Link to student
                            $student = User::whereHas('studentRecord', function($query) {
                                $query->where('admission_number', $this->student_admission_number);
                            })->first();
                            
                            if ($student) {
                                $parentRecord->students()->attach($student->id, [
                                    'relationship' => $this->relationship
                                ]);
                                
                                \Log::info('Parent linked to student', [
                                    'component_id' => $this->componentId,
                                    'parent_id' => $user->id,
                                    'student_id' => $student->id,
                                    'relationship' => $this->relationship
                                ]);
                            } else {
                                throw new \Exception("Student with admission number {$this->student_admission_number} not found");
                            }
                        } catch (\Exception $e) {
                            \Log::error('Error creating parent record: ' . $e->getMessage(), [
                                'component_id' => $this->componentId,
                                'user_id' => $user->id,
                                'exception' => $e
                            ]);
                            throw $e; // Re-throw to trigger rollback
                        }
                        break;
                        
                    case 'student':
                        try {
                            // Create student record
                            $studentRecord = StudentRecord::create([
                                'user_id' => $user->id,
                                'admission_number' => $this->admission_number,
                                'admission_date' => $this->admission_date,
                                'my_class_id' => $this->my_class_id,
                                'section_id' => $this->section_id,
                                'is_graduated' => false,
                            ]);
                            
                            \Log::info('Student record created', [
                                'component_id' => $this->componentId,
                                'user_id' => $user->id,
                                'student_record_id' => $studentRecord->id
                            ]);
                        } catch (\Exception $e) {
                            \Log::error('Error creating student record: ' . $e->getMessage(), [
                                'component_id' => $this->componentId,
                                'user_id' => $user->id,
                                'exception' => $e
                            ]);
                            throw $e; // Re-throw to trigger rollback
                        }
                        break;
                    
                    case 'teacher':
                        try {
                            // Create teacher record
                            $teacherRecord = \App\Models\TeacherRecord::create([
                                'user_id' => $user->id,
                            ]);
                            
                            \Log::info('Teacher record created', [
                                'component_id' => $this->componentId,
                                'user_id' => $user->id,
                                'teacher_record_id' => $teacherRecord->id
                            ]);
                        } catch (\Exception $e) {
                            \Log::error('Error creating teacher record: ' . $e->getMessage(), [
                                'component_id' => $this->componentId,
                                'user_id' => $user->id,
                                'exception' => $e
                            ]);
                            throw $e; // Re-throw to trigger rollback
                        }
                        break;
                }
                
                DB::commit();
                
                \Log::info('Registration completed successfully', [
                    'component_id' => $this->componentId,
                    'user_id' => $user->id,
                    'role' => $this->role
                ]);
                
                // Registration successful
                $this->registrationComplete = true;
                $this->successMessage = 'Your account has been created successfully! You can now log in.';
                $this->redirectTo = route('login');
                
                // Create notification or send welcome email
                // $user->notify(new \App\Notifications\WelcomeNotification());
                
                $this->reset([
                    'first_name', 'last_name', 'email', 'password', 'password_confirmation',
                    'username', 'gender', 'birthday', 'address', 'phone', 'id_number',
                    'admission_number', 'admission_date', 'relationship', 'student_admission_number'
                ]);
                
                // Emit event for parent components
                $this->emit('registrationComplete', [
                    'message' => $this->successMessage,
                    'redirect' => $this->redirectTo
                ]);
                
            } catch (\Exception $e) {
                DB::rollBack();
                
                \Log::error('Registration failed during record creation: ' . $e->getMessage(), [
                    'component_id' => $this->componentId,
                    'exception' => $e
                ]);
                
                // Show user-friendly error message
                session()->flash('error', 'There was a problem with your registration. Please try again or contact support. Error: ' . $e->getMessage());
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            \Log::warning('Registration validation failed', [
                'component_id' => $this->componentId,
                'errors' => $e->errors()
            ]);
            
            // Let Livewire handle validation errors normally
            throw $e;
        } catch (\Exception $e) {
            \Log::error('Unexpected registration error: ' . $e->getMessage(), [
                'component_id' => $this->componentId,
                'exception' => $e
            ]);
            
            // Show user-friendly error message
            session()->flash('error', 'An unexpected error occurred during registration. Please try again later.');
        } finally {
            $this->isSubmitting = false;
        }
    }

    public function render()
    {
        return view('livewire.registration-form');
    }
} 