<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit exam {{$exam->id}}</h3>
    </div>
    <div class="card-body">
        <form action="{{route('exams.update',$exam)}}" autocomplete="off" method="POST" class="md:w-1/2">
            <x-display-validation-errors/>
            <x-input id="name" name="name" label="Exam Name" placeholder="Enter exam name"  value="{{$exam->name}}"/>
            <x-textarea id="description" name="description" label="Description" placeholder="Enter description" value="{{$exam->description}}"/>
            <x-input id="start_date" type="date" name="start_date" label="Start date" required  value="{{$exam->start_date}}"/>
            <x-input type="date" id="stop_date" name="stop_date" label="Stop date" required value="{{$exam->stop_date}}"/>
            <x-select id="term" name="term_id" label="Select Term"  wire:loading.attr="disabled" wire:target="term">
                @foreach ($terms as $term)
                    <option value="{{$term['id']}}" @selected($term->id == $exam->term_id )> {{$term['name']}}</option>
                @endforeach
            </x-select>
            @csrf
            @method('PUT')
                <x-button label="Edit" theme="primary" icon="fas fa-pen" type="submit" class="md:w-1/2 w-full"/>
        </form>
    </div>
</div>
