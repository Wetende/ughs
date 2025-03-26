@extends('layouts.guest')

@section('title', 'Login')

@section('body')
    <x-partials.authentication-card>
        <form action="{{ route('login.submit') }}" method="POST" class="px-3 md:p-5 w-full border-b-2" id="loginForm">
            @csrf
            
            @if ($errors->any())
                <div class="mb-4">
                    <div class="text-red-500 text-sm">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                </div>
            @endif

            <x-input name="email" id="email" type="email" label="Email" value="{{ old('email') }}" required autofocus />
            <x-input name="password" id="password" type="password" label="Password" required />
            
            <div class="my-3">
                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Remember Me</label>
            </div>

            <x-button class="my-3 px-6 md:px-10 w-full" type="submit" id="loginButton">
                Log in
            </x-button>
        </form>
        
        <div class="py-6">
            <p>Don't Have An Account? <a href="{{ route('register') }}" class="text-blue-800" aria-label="Register">Create Account</a></p>
        </div>
        
        <x-slot:footer>
            <a href="{{ route('password.request') }}" class="text-blue-800" aria-label="Forgot Password">Forgot your Password?</a>
        </x-slot:footer>
    </x-partials.authentication-card>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Login page loaded');
        
        // Log form fields when page loads
        console.log('Initial form state:');
        console.log('Email field: ' + (document.getElementById('email').value || 'empty'));
        console.log('Password field: ' + (document.getElementById('password').value ? 'has value' : 'empty'));
        console.log('Remember checkbox: ' + (document.getElementById('remember').checked ? 'checked' : 'unchecked'));
        
        // Monitor validation errors
        const errorElements = document.querySelectorAll('.text-red-500 p');
        if (errorElements.length > 0) {
            console.log('Validation errors present:');
            errorElements.forEach(el => console.log('- ' + el.textContent));
        }
        
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            console.log('Form submission triggered');
            
            // Log form data before submission
            const formData = new FormData(this);
            console.log('Form data being submitted:');
            for (const pair of formData.entries()) {
                // Don't log actual password value for security
                if (pair[0] === 'password') {
                    console.log(pair[0] + ': [REDACTED]');
                } else {
                    console.log(pair[0] + ': ' + pair[1]);
                }
            }
            
            console.log('Form action: ' + this.getAttribute('action'));
            console.log('Form method: ' + this.getAttribute('method'));
            // Don't prevent default to allow normal form submission
        });

        // The button is already type="submit" and will naturally submit the form
        // No need to manually call submit() which causes double submission
        document.getElementById('loginButton').addEventListener('click', function(e) {
            console.log('Login button clicked');
            console.log('Is form valid? ' + document.getElementById('loginForm').checkValidity());
            // Removed form.submit() call to prevent double submission
        });
    });
</script>
@endpush