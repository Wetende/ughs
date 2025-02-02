<!-- Navigation -->
<nav class="bg-[#22345b] text-white">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('assets/images/logo.png') }}" alt="UGHS Logo" class="h-16">
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex space-x-6">
                <a href="{{ route('home') }}" class="text-white hover:text-yellow-400 transition">Home</a>
                <a href="{{ route('about') }}" class="text-white hover:text-yellow-400 transition">About</a>
                <a href="{{ route('academics') }}" class="text-white hover:text-yellow-400 transition">Academics</a>
                <a href="{{ route('admissions') }}" class="text-white hover:text-yellow-400 transition">Admissions</a>
                <a href="{{ route('student-life') }}" class="text-white hover:text-yellow-400 transition">Student Life</a>
                <a href="{{ route('gallery') }}" class="text-white hover:text-yellow-400 transition">Gallery</a>
                <a href="{{ route('alumni') }}" class="text-white hover:text-yellow-400 transition">Alumni</a>
                <a href="{{ route('resources') }}" class="text-white hover:text-yellow-400 transition">Resources</a>
                <a href="{{ route('contact') }}" class="text-white hover:text-yellow-400 transition">Contact</a>
            </div>

            <!-- Mobile Menu Button -->
            <button onclick="toggleMobileMenu()" class="md:hidden text-white">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="fixed top-0 right-0 w-64 h-full bg-[#22345b] transform translate-x-full transition-transform duration-200 ease-in-out z-50 md:hidden">
        <div class="p-6">
            <button onclick="toggleMobileMenu()" class="absolute top-4 right-4 text-white">
                <i class="fas fa-times text-2xl"></i>
            </button>
            <div class="flex flex-col space-y-4 mt-8">
                <a href="{{ route('home') }}" class="text-white hover:text-yellow-400 transition">Home</a>
                <a href="{{ route('about') }}" class="text-white hover:text-yellow-400 transition">About</a>
                <a href="{{ route('academics') }}" class="text-white hover:text-yellow-400 transition">Academics</a>
                <a href="{{ route('admissions') }}" class="text-white hover:text-yellow-400 transition">Admissions</a>
                <a href="{{ route('student-life') }}" class="text-white hover:text-yellow-400 transition">Student Life</a>
                <a href="{{ route('gallery') }}" class="text-white hover:text-yellow-400 transition">Gallery</a>
                <a href="{{ route('alumni') }}" class="text-white hover:text-yellow-400 transition">Alumni</a>
                <a href="{{ route('resources') }}" class="text-white hover:text-yellow-400 transition">Resources</a>
                <a href="{{ route('contact') }}" class="text-white hover:text-yellow-400 transition">Contact</a>
            </div>
        </div>
    </div>
</nav>
