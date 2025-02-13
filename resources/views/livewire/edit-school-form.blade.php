<div class="card">
    <div class="card-header">
        <h4 class="card-title">School Settings</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('school.update') }}" method="POST" class="md:w-6/12" enctype="multipart/form-data">
            <x-display-validation-errors />
            <p class="text-secondary">
                {{__('All fields marked * are required')}}
            </p>
            <x-input id="name" name="name" placeholder="Enter name of school" label="School Name *" value="{{ $school->name ?? 'Uasin Gishu High School' }}" />
            <x-textarea id="address" name="address" placeholder="Enter school address" label="School Address *" >
                {{ $school->address }}
            </x-textarea>
            <x-input id="phone" name="phone" type="tel" placeholder="Enter school phone number" label="School Phone Number *" value="{{ $school->phone }}"  />
            <x-input id="email" name="email" type="email" placeholder="Enter school email" label="School Email *" value="{{ $school->email }}"  />
            <x-input name="logo" id="logo" type="file" label="School Logo" accept="image/*" />

            @csrf
            @method('PUT')
            <div class="w-full flex">
                <x-button theme="primary" icon="fas fa-save" type="submit" class="w-full md:w-6/12">
                    Save Settings
                </x-button>
            </div>
        </form>
    </div>
</div>