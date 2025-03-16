@extends('layouts.guest')

@section('title', 'Reset Password')

@section('body')
    <x-partials.authentication-card>
        <x-display-validation-errors />
        
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        
        <form action="{{ route('password.email') }}" class="p-7 border-b" method="POST">
            <h2 class="text-2xl font-bold mb-4">Reset Password</h2>
            
            <p class="text-gray-600 mb-4">
                Forgot your password? No problem. Just let us know your email address 
                and we will email you a password reset link that will allow you to choose a new one.
            </p>
            
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <x-input type="email" name="email" id="email" required autofocus />
            </div>
            
            @csrf
            
            <div class="flex justify-end">
                <x-button class="my-3 py-2 rounded-lg">
                    Email Password Reset Link
                </x-button>
            </div>
        </form>
        
        <div class="p-3">
            <p>Back to <a class="text-blue-700" href="{{ route('login') }}" aria-label="Login">Login page</a></p>
        </div>
    </x-partials.authentication-card>
@endsection 