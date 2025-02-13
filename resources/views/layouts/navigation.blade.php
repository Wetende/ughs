<nav class="bg-white dark:bg-gray-800 shadow-sm">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('assets/images/logo.png') }}" alt="UGHS Logo" class="h-16">
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex space-x-6">
                <a href="{{ route('home') }}" class="text-gray-700 dark:text-white hover:text-yellow-400 transition">Home</a>
                <a href="{{ route('about') }}" class="text-gray-700 dark:text-white hover:text-yellow-400 transition">About</a>
                <a href="{{ route('academics') }}" class="text-gray-700 dark:text-white hover:text-yellow-400 transition">Academics</a>
                <a href="{{ route('admissions') }}" class="text-gray-700 dark:text-white hover:text-yellow-400 transition">Admissions</a>
                <a href="{{ route('student-life') }}" class="text-gray-700 dark:text-white hover:text-yellow-400 transition">Student Life</a>
                <a href="{{ route('gallery') }}" class="text-gray-700 dark:text-white hover:text-yellow-400 transition">Gallery</a>
                <a href="{{ route('notice-board') }}" class="text-gray-700 dark:text-white hover:text-yellow-400 transition">Notice Board</a>
                <a href="{{ route('resources') }}" class="text-gray-700 dark:text-white hover:text-yellow-400 transition">Resources</a>
                <a href="{{ route('contact') }}" class="text-gray-700 dark:text-white hover:text-yellow-400 transition">Contact</a>
            </div>

            <!-- Mobile Menu Button -->
            <button onclick="toggleMobileMenu()" class="md:hidden text-gray-700 dark:text-white hover:text-yellow-400 transition">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </div>
</nav>
