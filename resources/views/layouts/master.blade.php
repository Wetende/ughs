<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UGHS') - Uasin Gishu High School</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/icons/favicon.ico') }}" type="image/x-icon">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @stack('styles')

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .nav-link {
            transition: all 0.3s ease;
        }
        .nav-link:hover {
            color: #2563eb;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <!-- Top Bar -->
        <div style="background-color: #22345b;" class="text-white py-2">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <a href="mailto:info@ughs.ac.ke" class="text-sm hover:text-blue-200">
                        <i class="fas fa-envelope mr-2"></i>info@ughs.ac.ke
                    </a>
                    <a href="tel:+254722000000" class="text-sm hover:text-blue-200">
                        <i class="fas fa-phone mr-2"></i>+254 722 000 000
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/auth/login" class="text-sm hover:text-blue-200">
                        <i class="fas fa-user mr-2"></i>School Portal
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="/" class="flex items-center space-x-3">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="UGHS Logo" class="h-12">
                    <div>
                        <h1 class="text-xl font-bold text-gray-800">Uasin Gishu High School</h1>
                        <p class="text-sm text-gray-600">Nurturing Excellence</p>
                    </div>
                </a>

                <!-- Navigation Links -->
                <div class="hidden lg:flex lg:items-center lg:space-x-8">
                    <div class="relative group">
                        <button class="text-black hover:text-[#1b5454] transition">About</button>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 hidden group-hover:block">
                            <a href="{{ route('about') }}" class="block px-4 py-2 text-black hover:bg-gray-50">Overview</a>
                            <a href="{{ route('about.history') }}" class="block px-4 py-2 text-black hover:bg-gray-50">History</a>
                            <a href="{{ route('about.leadership') }}" class="block px-4 py-2 text-black hover:bg-gray-50">Leadership</a>
                        </div>
                    </div>
                    <a href="{{ route('academics') }}" class="text-black hover:text-[#1b5454] transition">Academics</a>
                    <a href="{{ route('admissions') }}" class="text-black hover:text-[#1b5454] transition">Admissions</a>
                    <a href="{{ route('news') }}" class="text-black hover:text-[#1b5454] transition">News</a>
                    <a href="{{ route('contact') }}" class="text-black hover:text-[#1b5454] transition">Contact</a>
                    <a href="{{ route('register') }}" class="bg-[#023D54] text-white px-6 py-2 rounded-lg hover:bg-[#022b3d] transition">Apply Now</a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="lg:hidden text-gray-700">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer style="background-color: #22345b;" class="text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <!-- School Info -->
                <div>
                    <h3 class="text-xl font-bold mb-4">About UGHS</h3>
                    <p class="text-gray-400 mb-4">Uasin Gishu High School is committed to providing quality education and nurturing well-rounded individuals ready for the challenges of tomorrow.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="{{ route('admissions') }}" class="text-gray-400 hover:text-white">Admissions</a></li>
                        <li><a href="{{ route('academics') }}" class="text-gray-400 hover:text-white">Academics</a></li>
                        <li><a href="{{ route('news') }}" class="text-gray-400 hover:text-white">News & Events</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-map-marker-alt w-6"></i>
                            <span>123 School Road, Eldoret, Kenya</span>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-phone w-6"></i>
                            <span>+254 722 000 000</span>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-envelope w-6"></i>
                            <span>info@ughs.ac.ke</span>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Newsletter</h3>
                    <p class="text-gray-400 mb-4">Subscribe to our newsletter for updates and news.</p>
                    <form class="space-y-2">
                        <input type="email" placeholder="Enter your email" class="w-full px-4 py-2 rounded-lg bg-gray-700 text-white">
                        <button class="w-full bg-[#023D54] text-white px-4 py-2 rounded-lg hover:bg-[#022b3d] transition">Subscribe</button>
                    </form>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-700 pt-8">
                <p class="text-center text-gray-400">&copy; {{ date('Y') }} Uasin Gishu High School. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @stack('scripts')
</body>
</html>
