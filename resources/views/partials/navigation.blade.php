<!-- Navigation -->
<nav class="bg-[#22345b] text-white" aria-label="Main navigation">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-[#22345b] rounded-md" aria-label="Uasin Gishu High School Home">
                <img src="{{ asset('assets/images/logo.png') }}" alt="UGHS Logo" class="h-16" width="64" height="64" loading="eager">
            </a>

            <!-- Desktop Navigation -->
<div class="hidden md:flex space-x-6 items-center">
    <a href="{{ route('home') }}" class="text-white hover:text-yellow-400 transition focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-[#22345b] rounded-md px-2 py-1">Home</a>
    <a href="{{ route('about') }}" class="text-white hover:text-yellow-400 transition focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-[#22345b] rounded-md px-2 py-1">About</a>
    <a href="{{ route('academics') }}" class="text-white hover:text-yellow-400 transition focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-[#22345b] rounded-md px-2 py-1">Academics</a>
    <a href="{{ route('admissions') }}" class="text-white hover:text-yellow-400 transition focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-[#22345b] rounded-md px-2 py-1">Admissions</a>
    <a href="{{ route('student-life') }}" class="text-white hover:text-yellow-400 transition focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-[#22345b] rounded-md px-2 py-1">Student Life</a>
    <a href="{{ route('gallery') }}" class="text-white hover:text-yellow-400 transition focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-[#22345b] rounded-md px-2 py-1">Gallery</a>

    <!-- Get Involved Dropdown (Fix Alignment) -->
    <div class="relative group flex items-center">
        <a href="#" class="text-white hover:text-yellow-400 transition flex items-center focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-[#22345b] rounded-md px-2 py-1" aria-expanded="false" aria-haspopup="true">
            Get Involved <i class="fas fa-chevron-down ml-1 text-xs" aria-hidden="true"></i>
        </a>
        <div class="absolute left-0 top-full mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50" role="menu" aria-orientation="vertical">
            <a href="{{ route('alumni') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-400 rounded-t-md" role="menuitem">Alumni</a>
            <a href="{{ route('give-back') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-400" role="menuitem">Give Back</a>
            <a href="{{ route('mentorship') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-400" role="menuitem">Mentorship Program</a>
            <a href="{{ route('career-network') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-400 rounded-b-md" role="menuitem">Career Network</a>
        </div>
    </div>

    <a href="{{ route('notice-board') }}" class="text-white hover:text-yellow-400 transition focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-[#22345b] rounded-md px-2 py-1">Notice Board</a>
    <a href="{{ route('resources') }}" class="text-white hover:text-yellow-400 transition focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-[#22345b] rounded-md px-2 py-1">Resources</a>
    <a href="{{ route('contact') }}" class="text-white hover:text-yellow-400 transition focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-[#22345b] rounded-md px-2 py-1">Contact</a>
</div>

  <!-- Mobile Menu Button -->
            <button class="md:hidden text-white mobile-menu-toggle p-3 rounded-md hover:bg-[#2c4272] transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-[#22345b]" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobileMenu">
                <i class="fas fa-bars text-2xl" aria-hidden="true"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="fixed top-0 right-0 w-[280px] h-full bg-[#22345b] transform translate-x-full transition-transform duration-300 ease-in-out z-50 md:hidden overflow-y-auto shadow-xl" aria-label="Mobile navigation" role="dialog" aria-modal="true">
        <div class="p-6">
            <button class="absolute top-4 right-4 text-white mobile-menu-toggle p-3 rounded-md hover:bg-[#2c4272] transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-yellow-400" aria-label="Close mobile menu">
                <i class="fas fa-times text-2xl" aria-hidden="true"></i>
            </button>
            <div class="flex flex-col space-y-5 mt-12">
                <a href="{{ route('home') }}" class="text-white hover:text-yellow-400 transition py-3 px-2 text-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 rounded-md">Home</a>
                <a href="{{ route('about') }}" class="text-white hover:text-yellow-400 transition py-3 px-2 text-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 rounded-md">About</a>
                <a href="{{ route('academics') }}" class="text-white hover:text-yellow-400 transition py-3 px-2 text-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 rounded-md">Academics</a>
                <a href="{{ route('admissions') }}" class="text-white hover:text-yellow-400 transition py-3 px-2 text-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 rounded-md">Admissions</a>
                <a href="{{ route('student-life') }}" class="text-white hover:text-yellow-400 transition py-3 px-2 text-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 rounded-md">Student Life</a>
                <a href="{{ route('gallery') }}" class="text-white hover:text-yellow-400 transition py-3 px-2 text-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 rounded-md">Gallery</a>
                
                <!-- Mobile Get Involved Section -->
                <div class="mt-2 border-t border-b border-[#3a4d73] py-4">
                    <p class="text-yellow-400 font-semibold text-lg mb-3" id="get-involved-heading">Get Involved</p>
                    <div class="pl-4 space-y-3" role="group" aria-labelledby="get-involved-heading">
                        <a href="{{ route('alumni') }}" class="block text-white hover:text-yellow-400 transition py-2 px-2 focus:outline-none focus:ring-2 focus:ring-yellow-400 rounded-md">Alumni</a>
                        <a href="{{ route('give-back') }}" class="block text-white hover:text-yellow-400 transition py-2 px-2 focus:outline-none focus:ring-2 focus:ring-yellow-400 rounded-md">Give Back</a>
                        <a href="{{ route('mentorship') }}" class="block text-white hover:text-yellow-400 transition py-2 px-2 focus:outline-none focus:ring-2 focus:ring-yellow-400 rounded-md">Mentorship Program</a>
                        <a href="{{ route('career-network') }}" class="block text-white hover:text-yellow-400 transition py-2 px-2 focus:outline-none focus:ring-2 focus:ring-yellow-400 rounded-md">Career Network</a>
                    </div>
                </div>

                <a href="{{ route('notice-board') }}" class="text-white hover:text-yellow-400 transition py-3 px-2 text-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 rounded-md">Notice Board</a>
                <a href="{{ route('resources') }}" class="text-white hover:text-yellow-400 transition py-3 px-2 text-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 rounded-md">Resources</a>
                <a href="{{ route('contact') }}" class="text-white hover:text-yellow-400 transition py-3 px-2 text-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 rounded-md">Contact</a>
            </div>
        </div>
    </div>
</nav>
