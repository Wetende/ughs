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
                
                <!-- Get Involved Dropdown -->
                <div class="relative group">
                    <button class="text-white hover:text-yellow-400 transition py-2">
                        Get Involved
                        <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <a href="{{ route('alumni') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Alumni</a>
                        <a href="{{ route('give-back') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Give Back</a>
                        <a href="{{ route('mentorship') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mentorship Program</a>
                        <a href="{{ route('career-network') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Career Network</a>
                    </div>
                </div>

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
                
                <!-- Mobile Get Involved Section -->
                <div class="pl-4 space-y-2">
                    <p class="text-yellow-400 font-semibold">Get Involved</p>
                    <a href="{{ route('alumni') }}" class="block text-white hover:text-yellow-400 transition">Alumni</a>
                    <a href="{{ route('give-back') }}" class="block text-white hover:text-yellow-400 transition">Give Back</a>
                    <a href="{{ route('mentorship') }}" class="block text-white hover:text-yellow-400 transition">Mentorship Program</a>
                    <a href="{{ route('career-network') }}" class="block text-white hover:text-yellow-400 transition">Career Network</a>
                </div>

                <a href="{{ route('resources') }}" class="text-white hover:text-yellow-400 transition">Resources</a>
                <a href="{{ route('contact') }}" class="text-white hover:text-yellow-400 transition">Contact</a>
            </div>
        </div>
    </div>
</nav>
