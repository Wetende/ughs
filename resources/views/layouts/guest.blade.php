<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title', 'UGHS Portal')</title>
        
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Custom Styles -->
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
        
        @stack('styles')
    </head>
    <body class="flex flex-col min-h-screen bg-gray-100">
        @include('partials.topbar')

        <!-- Main Content -->
        <main class="flex-grow">
            @yield('body')
        </main>

        @include('partials.bottom-bar')

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        @stack('scripts')
        <livewire:scripts />
    </body>
</html>
