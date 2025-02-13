<div class="card">
    <div class="card-header">
        <h3 class="card-title">Create term in session {{auth()->user()->school->academicYear->name}}</h3>
    </div>
    <div class="card-body">
        <form action="{{route('terms.store')}}" method="POST" class="md:w-1/2">
            <x-display-validation-errors/>
            <x-input id="name" name="name" label="Term Name" placeholder="Enter term name"/>
            @csrf
            <div class='col-12 my-2'>
                <x-button label="Create" icon="fas fa-key" type="submit" class="w-full md:w-1/2"/>
            </div>
        </form>
    </div>
</div>