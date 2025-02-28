<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class RegistrationForm extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $password_confirmation;
    public $role;
    public $school_id;
    public $birthday;
    public $address;
    public $blood_group;
    public $religion;
    public $city;
    public $gender;
    public $phone;

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|confirmed',
        'role' => 'required|in:teacher,student,parent',
        'school_id' => 'required|exists:schools,id',
        'birthday' => 'required|date|before:today',
        'address' => 'required|string|max:500',
        'blood_group' => 'required|string|max:255',
        'religion' => 'nullable|string|max:255',
        'city' => 'required|string|max:255',
        'gender' => 'required|in:male,female,other',
        'phone' => 'nullable|string|max:255',
    ];

    public function register()
    {
        $validatedData = $this->validate();
        
        try {
            $user = User::create([
                ...$validatedData,
                'password' => Hash::make($validatedData['password'])
            ]);
            
            $user->assignRole($validatedData['role']);
            
            session()->flash('registration_success', 'Account created successfully! Please login.');
            
            return redirect()->route('login');
        } catch (\Exception $e) {
            session()->flash('error', 'Registration failed. Please try again.');
            return null;
        }
    }

    public function render()
    {
        return view('livewire.registration-form');
    }
} 