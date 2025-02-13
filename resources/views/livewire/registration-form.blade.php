@isset($roles)
    <div>
        <form wire:submit.prevent="register" class="w-full">
            <div class="card-body">
                <x-select wire:model="role" id="role" name="role" label="Register as" class="capitalize">
                    @foreach ($roles as $item)
                        @if($item->name !== 'admin')
                            <option value="{{$item->name}}">{{$item->name}}</option>
                        @endif
                    @endforeach
                </x-select>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">School</label>
                    <input type="text" class="form-control" value="{{ $school->name }}" readonly>
                </div>

                <div class="md:grid grid-cols-12 gap-2 w-full">
                    <div class="col-span-12">
                        <x-display-validation-errors />
                        <p class="text-secondary text-center lg:text-left my-2">
                            {{__('All fields marked * are required')}}
                        </p>
                    </div>

                    <!-- Basic Information -->
                    <x-input wire:model="email" id="email" name="email" type="email" label="Email *" placeholder="Enter email address" group-class="col-span-4" />
                    <x-input wire:model="password" id="password" name="password" type="password" label="Password *" placeholder="Enter password" group-class="col-span-4" />
                    <x-input wire:model="password_confirmation" id="password_confirmation" name="password_confirmation" type="password" label="Confirm Password *" placeholder="Confirm password" group-class="col-span-4" />
                    
                    <x-input wire:model="first_name" id="first_name" name="first_name" label="First Name *" placeholder="Enter first name" group-class="col-span-4" />
                    <x-input wire:model="last_name" id="last_name" name="last_name" label="Last Name *" placeholder="Enter last name" group-class="col-span-4" />
                    <x-input wire:model="username" id="username" name="username" label="Username *" placeholder="Enter username" group-class="col-span-4" />

                    <x-select wire:model="gender" id="gender" name="gender" label="Gender *" group-class="col-span-4">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </x-select>

                    <!-- Non-Student Fields -->
                    @if($role !== 'student')
                        <x-input wire:model="phone" id="phone" name="phone" label="Phone *" placeholder="Enter phone number" group-class="col-span-4" />
                        <x-input wire:model="id_number" id="id_number" name="id_number" label="ID Number" placeholder="Enter ID number" group-class="col-span-4" />
                        <x-input wire:model="passport_number" id="passport_number" name="passport_number" label="Passport Number" placeholder="Enter passport number" group-class="col-span-4" />
                    @endif

                    <!-- Student-specific Fields -->
                    @if($role === 'student')
                        <x-input wire:model="admission_number" id="admission_number" name="admission_number" label="Admission Number *" placeholder="Enter admission number" group-class="col-span-4" />
                        <x-input wire:model="admission_date" id="admission_date" name="admission_date" type="date" label="Admission Date" group-class="col-span-4" />
                        
                        @if($my_classes ?? false)
                            <x-select wire:model="my_class_id" id="my_class_id" name="my_class_id" label="Class" group-class="col-span-4">
                                <option value="">Select Class</option>
                                @foreach($my_classes as $class)
                                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                                @endforeach
                            </x-select>
                        @endif

                        @if($sections ?? false)
                            <x-select wire:model="section_id" id="section_id" name="section_id" label="Section" group-class="col-span-4">
                                <option value="">Select Section</option>
                                @foreach($sections as $section)
                                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                                @endforeach
                            </x-select>
                        @endif
                    @endif

                    <!-- Optional Fields -->
                    <x-input wire:model="birthday" id="birthday" name="birthday" type="date" label="Birthday" group-class="col-span-4" />
                    <x-input wire:model="address" id="address" name="address" label="Address" placeholder="Enter address" group-class="col-span-4" />
                    
                    <x-select wire:model="blood_group" id="blood_group" name="blood_group" label="Blood Group" group-class="col-span-4">
                        <option value="">Select Blood Group</option>
                        @foreach(['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'] as $group)
                            <option value="{{ $group }}">{{ $group }}</option>
                        @endforeach
                    </x-select>

                    <x-select wire:model="denomination" id="denomination" name="denomination" label="Denomination" group-class="col-span-4">
                        <option value="">Select Denomination</option>
                        @foreach(['Christianity', 'Muslim', 'Hindu', 'None'] as $denom)
                            <option value="{{ $denom }}">{{ $denom }}</option>
                        @endforeach
                    </x-select>

                    @if($counties ?? false)
                        <x-select wire:model="county_id" id="county_id" name="county_id" label="County" group-class="col-span-4">
                            <option value="">Select County</option>
                            @foreach($counties as $county)
                                <option value="{{ $county->id }}">{{ $county->name }}</option>
                            @endforeach
                        </x-select>
                    @endif

                    <x-input wire:model="city" id="city" name="city" label="City" placeholder="Enter city" group-class="col-span-4" />
                </div>

                <div class="mt-4">
                    <x-button type="submit" label="Register" class="w-full" />
                </div>
            </div>
        </form>
    </div>
@else
   <p>Couldn't create user, Roles not found.</p> 
@endisset
