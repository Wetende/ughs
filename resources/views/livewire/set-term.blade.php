<div class="card">
    <form action="{{route('terms.set-term')}}" method="POST" class="card-body">
        <x-display-validation-errors />
        <x-select name="term_id" id="set-term-form" label="Change School Term">
            @foreach ($terms as $term)
                <option @selected(auth()->user()->school->term_id == $term->id) value="{{ $term->id }}"> {{ $term->name }}</option>
            @endforeach
        </x-select>
        @csrf
        <div class="my-6 flex justify-center items-center">
            <x-button class="m-auto w-full lg:w-3/12" icon="fa fa-key">
                Set term
            </x-button>
        </div>
    </form>
</div>
