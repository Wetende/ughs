<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit {{$semester->name}} in session {{auth()->user()->school->academicYear->name}}</h3>
    </div>
    <div class="card-body">
        <form action="{{route('semesters.update', $semester->id)}}" method="POST" class="md:w-6/12">
            <x-display-validation-errors/>
            @csrf
            @method('PUT')
            <x-input id="name" name="name" label="Term Name" placeholder="Enter term name" value="{{$semester->name}}"/>
            <x-button label="Update" theme="primary" icon="fas fa-key" type="submit" class="w-full md:w-1/2"/>
        </form>
    </div>
</div>