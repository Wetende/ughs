@isset($roles)
    <div class="max-w-5xl mx-auto" wire:key="{{ $componentId }}">
        <form wire:submit.prevent="register" method="POST" class="w-full" id="registration-form-{{ $componentId }}">
            @csrf
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <!-- Header -->
                <div class="bg-gradient-to-r from-blue-600 to-blue-800 px-6 py-4">
                    <h2 class="text-xl font-bold text-white">Create Your Account</h2>
                    <p class="text-blue-100 text-sm">Join {{ $school->name ?? 'our school' }} as a member</p>
                </div>
                
                <!-- Success Message Modal -->
                @if($registrationComplete)
                <div class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center z-50">
                    <div class="bg-white p-8 rounded-lg shadow-xl max-w-md w-full">
                        <div class="text-center">
                            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
                                <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <h3 class="mt-4 text-lg font-medium text-gray-900">Registration Successful!</h3>
                            <p class="mt-2 text-sm text-gray-500">{{ $successMessage }}</p>
                            <div class="mt-6">
                                <a href="{{ $redirectTo }}" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Continue to Login
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Form Content -->
                <div class="p-6">
                    <!-- Debug Information -->
                    @if(session()->has('error'))
                        <div class="mb-4 p-4 bg-red-100 border border-red-300 text-red-700 rounded-lg">
                            <p class="font-medium">{{ session('error') }}</p>
                        </div>
                    @endif
                    
                    @if(session()->has('success'))
                        <div class="mb-4 p-4 bg-green-100 border border-green-300 text-green-700 rounded-lg">
                            <p class="font-medium">{{ session('success') }}</p>
                        </div>
                    @endif
                    
                    @error('registration_error')
                        <div class="mb-4 p-4 bg-red-100 border border-red-300 text-red-700 rounded-lg">
                            <p class="font-medium">{{ $message }}</p>
                        </div>
                    @enderror
                    
                    <!-- Role Selection -->
                    <div class="bg-gray-50 p-4 rounded-lg mb-6 border border-gray-200" wire:key="role-selection-{{ $componentId }}">
                        <x-select 
                            wire:model.live="role" 
                            id="role-{{ $componentId }}" 
                            name="role" 
                            label="Register as" 
                            class="capitalize font-medium text-gray-700"
                        >
                            <option value="">Select Role</option>
                            @foreach ($roles as $item)
                                @if($item->name !== 'admin')
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endif
                            @endforeach
                        </x-select>
                        
                        <!-- Debug output -->
                        <div class="mt-2 text-sm text-gray-500">
                            Selected role: <span class="font-semibold">{{ $role ?: 'None' }}</span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <x-display-validation-errors />
                        <p class="text-gray-600 text-sm mb-4 italic">
                            <span class="text-red-500">*</span> {{__('indicates required fields')}}
                        </p>
                    </div>

                    @if($role)
                        <!-- Form Sections -->
                        <div class="space-y-8" wire:key="form-fields-{{ $role }}-{{ $componentId }}">
                            <!-- Account Information -->
                            <div wire:key="account-info-{{ $componentId }}">
                                <h3 class="text-lg font-medium text-gray-900 border-b pb-2 mb-4">Account Information</h3>
                                <div class="md:grid grid-cols-12 gap-4">
                                    <x-input 
                                        wire:model="email" 
                                        id="email-{{ $componentId }}" 
                                        name="email" 
                                        type="email" 
                                        label="Email *" 
                                        placeholder="Enter email address" 
                                        group-class="col-span-12 md:col-span-4" 
                                    />
                                    <x-input 
                                        wire:model="password" 
                                        id="password-{{ $componentId }}" 
                                        name="password" 
                                        type="password" 
                                        label="Password *" 
                                        placeholder="Enter password" 
                                        group-class="col-span-12 md:col-span-4" 
                                    />
                                    <x-input 
                                        wire:model="password_confirmation" 
                                        id="password_confirmation-{{ $componentId }}" 
                                        name="password_confirmation" 
                                        type="password" 
                                        label="Confirm Password *" 
                                        placeholder="Confirm password" 
                                        group-class="col-span-12 md:col-span-4" 
                                    />
                                </div>
                            </div>

                            <!-- Personal Information -->
                            <div wire:key="personal-info-{{ $componentId }}">
                                <h3 class="text-lg font-medium text-gray-900 border-b pb-2 mb-4">Personal Information</h3>
                                <div class="md:grid grid-cols-12 gap-4">
                                    <x-input 
                                        wire:model="first_name" 
                                        id="first_name-{{ $componentId }}" 
                                        name="first_name" 
                                        label="First Name *" 
                                        placeholder="Enter first name" 
                                        group-class="col-span-12 md:col-span-4" 
                                    />
                                    <x-input 
                                        wire:model="last_name" 
                                        id="last_name-{{ $componentId }}" 
                                        name="last_name" 
                                        label="Last Name *" 
                                        placeholder="Enter last name" 
                                        group-class="col-span-12 md:col-span-4" 
                                    />
                                    <x-input 
                                        wire:model="username" 
                                        id="username-{{ $componentId }}" 
                                        name="username" 
                                        label="Username *" 
                                        placeholder="Enter username" 
                                        group-class="col-span-12 md:col-span-4" 
                                    />

                                    <x-select 
                                        wire:model="gender" 
                                        id="gender-{{ $componentId }}" 
                                        name="gender" 
                                        label="Gender *" 
                                        group-class="col-span-12 md:col-span-4"
                                    >
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </x-select>

                                    <x-input 
                                        wire:model="birthday" 
                                        id="birthday-{{ $componentId }}" 
                                        name="birthday" 
                                        type="date" 
                                        label="Birthday" 
                                        group-class="col-span-12 md:col-span-4" 
                                    />
                                    
                                    <x-input 
                                        wire:model="address" 
                                        id="address-{{ $componentId }}" 
                                        name="address" 
                                        label="Address" 
                                        placeholder="Enter address" 
                                        group-class="col-span-12 md:col-span-4" 
                                    />
                                </div>
                            </div>
                            
                            <!-- Role-specific fields -->
                            @if($role === 'student')
                                <div wire:key="student-fields-{{ $componentId }}">
                                    <h3 class="text-lg font-medium text-gray-900 border-b pb-2 mb-4">Student Information</h3>
                                    <div class="md:grid grid-cols-12 gap-4">
                                        <x-input 
                                            wire:model="admission_number" 
                                            id="admission_number-{{ $componentId }}" 
                                            name="admission_number" 
                                            label="Admission Number *" 
                                            placeholder="Enter admission number" 
                                            group-class="col-span-12 md:col-span-6" 
                                        />
                                        <x-input 
                                            wire:model="admission_date" 
                                            id="admission_date-{{ $componentId }}" 
                                            name="admission_date" 
                                            type="date" 
                                            label="Admission Date" 
                                            group-class="col-span-12 md:col-span-6" 
                                        />
                                    </div>
                                </div>
                            @elseif($role === 'parent')
                                <div wire:key="parent-fields-{{ $componentId }}">
                                    <h3 class="text-lg font-medium text-gray-900 border-b pb-2 mb-4">Parent Information</h3>
                                    <div class="md:grid grid-cols-12 gap-4">
                                        <x-select 
                                            wire:model="relationship" 
                                            id="relationship-{{ $componentId }}" 
                                            name="relationship" 
                                            label="Relationship to Student *" 
                                            group-class="col-span-12 md:col-span-6"
                                        >
                                            <option value="">Select Relationship</option>
                                            <option value="father">Father</option>
                                            <option value="mother">Mother</option>
                                            <option value="guardian">Guardian</option>
                                            <option value="other">Other</option>
                                        </x-select>
                                        <x-input 
                                            wire:model="student_admission_number" 
                                            id="student_admission_number-{{ $componentId }}" 
                                            name="student_admission_number" 
                                            label="Student Admission Number *" 
                                            placeholder="Enter student's admission number" 
                                            group-class="col-span-12 md:col-span-6" 
                                        />
                                    </div>
                                </div>
                            @elseif($role === 'teacher')
                                <div wire:key="teacher-fields-{{ $componentId }}">
                                    <h3 class="text-lg font-medium text-gray-900 border-b pb-2 mb-4">Teacher Information</h3>
                                    <div class="md:grid grid-cols-12 gap-4">
                                        <x-input 
                                            wire:model="id_number" 
                                            id="id_number-{{ $componentId }}" 
                                            name="id_number" 
                                            label="ID Number *" 
                                            placeholder="Enter national ID number" 
                                            group-class="col-span-12 md:col-span-6" 
                                        />
                                        <x-input 
                                            wire:model="phone" 
                                            id="phone-{{ $componentId }}" 
                                            name="phone" 
                                            label="Phone Number *" 
                                            placeholder="Enter phone number" 
                                            group-class="col-span-12 md:col-span-6" 
                                        />
                                    </div>
                                </div>
                            @endif

                            <!-- Submit Button -->
                            <div class="mt-8 border-t pt-6" wire:key="submit-section-{{ $componentId }}">
                                <button 
                                    type="submit" 
                                    wire:loading.attr="disabled"
                                    wire:loading.class="opacity-75 cursor-not-allowed"
                                    wire:click.prevent="register"
                                    class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 text-lg font-medium rounded-md transition-colors duration-200" 
                                    id="submit-registration-{{ $componentId }}"
                                >
                                    <span wire:loading.remove>Create Account</span>
                                    <span wire:loading wire:target="register">
                                        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        Processing...
                                    </span>
                                </button>
                            </div>
                        </div>
                    @else
                        <div class="bg-blue-50 border border-blue-200 text-blue-700 p-4 rounded-lg">
                            <p class="font-medium">Please select a role to continue registration.</p>
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('registrationComplete', function(event) {
                console.log('Registration complete event received:', event.detail);
                setTimeout(function() {
                    window.location.href = event.detail.redirect;
                }, 2000);
            });
        });
    </script>
@else
   <div class="bg-red-50 border border-red-200 text-red-700 p-4 rounded-lg">
       <p class="font-medium">Couldn't create user, Roles not found.</p>
   </div>
@endisset