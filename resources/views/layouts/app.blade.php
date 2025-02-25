<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="robots" content="noindex">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{asset(config('app.favicon'))}}" type="image/x-icon">
        <title>
            @yield('title', config('app.name', 'ughs'))
        </title>
        <!-- Inter Font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
            
            .beautify-scrollbar::-webkit-scrollbar {
                width: 5px;
            }
            
            .beautify-scrollbar::-webkit-scrollbar-track {
                background: #f3f4f6;
            }
            
            .beautify-scrollbar::-webkit-scrollbar-thumb {
                background: #d1d5db;
                border-radius: 8px;
            }
            
            .beautify-scrollbar::-webkit-scrollbar-thumb:hover {
                background: #9ca3af;
            }

            /* Smooth transitions */
            .transition-all {
                transition: all 0.3s ease-in-out;
            }
        </style>
        <livewire:styles />
    </head>
    <body class="font-sans bg-gray-50">
        <a href="#main" class="sr-only">
            Skip to content
        </a>
        <div x-data="{ menuOpen: window.innerWidth >= 1024 ? $persist(false) : false }">
            <livewire:layouts.header/>
            <div class="lg:flex lg:flex-cols bg-white min-h-screen">
                <livewire:layouts.menu />
                <div class="w-full max-w-full overflow-scroll beautify-scrollbar">
                    <!-- Page Header with Shadow -->
                    <div class="bg-white p-6 border-b border-gray-200 shadow-sm">
                        <h1 class="text-2xl font-semibold text-gray-900 mb-2">@yield('page_heading')</h1>
                        @isset ($breadcrumbs)
                            <div class="w-full">
                                <x-breadcrumbs :paths="$breadcrumbs" class="text-sm text-gray-600"/>
                            </div>
                        @endif
                    </div>
                    
                    <!-- Main Content with Better Spacing -->
                    <main class="p-6 bg-gray-50" id="main">
                        <div class="bg-white rounded-lg shadow-sm p-6">
                            @yield('content')
                        </div>
                    </main>
                </div>
            </div>
        </div>
        
        <!-- Status Messages with Better Styling -->
        <div class="fixed bottom-4 right-4 z-50">
            @livewire('display-status')
        </div>
        
        <livewire:scripts />
        @stack('scripts')
    </body>
</html>
