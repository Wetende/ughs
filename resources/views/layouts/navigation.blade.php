<nav class="bg-white shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">School Logo</a>
            </div>

            <!-- Primary Navigation -->
            <div class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600">Home</a>
                
                <!-- About Dropdown -->
                <div class="relative group">
                    <button class="text-gray-700 hover:text-blue-600">
                        About
                        <svg class="inline-block w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-10 hidden group-hover:block">
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">School History</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Principal's Message</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Staff Directory</a>
                    </div>
                </div>

                <!-- Academics Dropdown -->
                <div class="relative group">
                    <button class="text-gray-700 hover:text-blue-600">
                        Academics
                        <svg class="inline-block w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-10 hidden group-hover:block">
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Programs</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Calendar</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Library</a>
                    </div>
                </div>

                <a href="#" class="text-gray-700 hover:text-blue-600">Admissions</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Student Life</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Contact</a>
            </div>

            <!-- Secondary Navigation -->
            <div class="hidden md:flex items-center space-x-4">
                @auth
                    <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-blue-600">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600">Login</a>
                    <a href="{{ route('register') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Apply Now</a>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button class="text-gray-700 hover:text-blue-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden hidden">
        <a href="{{ route('home') }}" class="block py-2 px-4 text-gray-700 hover:bg-blue-50">Home</a>
        <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-blue-50">About</a>
        <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-blue-50">Academics</a>
        <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-blue-50">Admissions</a>
        <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-blue-50">Student Life</a>
        <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-blue-50">Contact</a>
        
        @auth
            <a href="{{ route('dashboard') }}" class="block py-2 px-4 text-gray-700 hover:bg-blue-50">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="block py-2 px-4 text-gray-700 hover:bg-blue-50">Login</a>
            <a href="{{ route('register') }}" class="block py-2 px-4 text-gray-700 hover:bg-blue-50">Apply Now</a>
        @endauth
    </div>
</nav>
