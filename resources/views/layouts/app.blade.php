<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
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
        @vite('resources/css/app.css')
        <livewire:styles />
    </head>
    <body class="font-sans">
        <a href="#main" class="sr-only">
            Skip to content
        </a>
        <div x-data="{ menuOpen: window.innerWidth >= 1024 ? $persist(false) : false }">
            <livewire:layouts.header/>
            <div class="lg:flex lg:flex-cols text-gray-900 bg-gray-100 dark:bg-gray-700 dark:text-gray-50 min-h-screen">
                <livewire:layouts.menu />
                <div class="w-full max-w-full overflow-scroll beautify-scrollbar">
                    <div class="bg-white dark:bg-gray-800 p-4 w-full border-b-2">
                        <h1 class="text-3xl my-2 capitalize font-semibold">@yield('page_heading')</h1>
                        @isset ($breadcrumbs)
                            <div class="w-full">
                                <x-breadcrumbs :paths="$breadcrumbs"/>
                            </div>
                        @endif
                    </div>
                    <main class="p-4" id="main">
                        @yield('content') 
                    </main>
                </div>
            </div>
        </div> 
        @livewire('display-status')
        <livewire:scripts />
        @stack('scripts')
    </body>
</html>
