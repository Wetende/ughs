<div>
    <form action="{{ route('school.settings') }}" method="POST">
        @csrf
        <input type="hidden" name="school_id" value="{{ $school->id }}">
        
        <div class="text-center">
            <h4>{{ $school->name }}</h4>
            <p class="text-muted">You are currently working with this school</p>
            <button type="submit" class="btn btn-primary">
                {{ __('Set School') }}
            </button>
        </div>
    </form>
</div>
