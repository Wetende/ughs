@isset($roles)
    <form action="{{route('register')}}" method="POST" enctype="multipart/form-data" class="w-full">
        <div class="card-body" >
            <x-select id="role" name="role" label="Register as" class="capitalize">    
                    @foreach ($roles as $item)
                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                    @endforeach
            </x-select>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">School</label>
                <input type="text" class="form-control" value="{{ $school->name }}" readonly>
                <input type="hidden" name="school_id" value="{{ $school->id }}">
            </div>
            <livewire:create-user-fields/>
            @csrf
            <x-button label="Register" icon="fas fa-key" type="submit" class="w-full md:w-3/12"/>
        </div>
        <hr>
    </form>
@else
   <p>Couldn't create user, Roles not found.</p> 
@endisset
