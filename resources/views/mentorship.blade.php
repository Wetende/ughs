@extends('layouts.guest')

@section('title', 'Mentorship Program - Uasin Gishu High School')

@section('body')
@include('partials.navigation')

<!-- Hero Section -->
<div class="relative w-full min-h-[60vh] md:min-h-[70vh] bg-white">
    <div class="absolute inset-0 bg-cover bg-center transition-all duration-700" 
         style="background-image: url('{{ asset('assets/images/mentorship.jpg') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-[#22345b]/90 to-[#22345b]/80"></div>
    </div>
    <div class="relative h-full w-full flex items-center z-10">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-white max-w-4xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">Connect with Our Alumni Mentors</h1>
                <p class="text-lg md:text-xl lg:text-2xl mb-8">Building bridges between experience and aspiration at UGHS</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#become-mentor" class="inline-flex items-center px-6 py-3 bg-yellow-400 text-[#22345b] rounded-lg hover:bg-yellow-300 transition-all duration-300 font-bold">
                        Become a Mentor
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="#find-mentor" class="inline-flex items-center px-6 py-3 bg-white/20 backdrop-blur-md text-white rounded-lg hover:bg-white/30 transition-all duration-300 font-bold">
                        Find a Mentor
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Program Impact -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
            <div class="p-6">
                <div class="text-4xl font-bold text-[#22345b] mb-2">100+</div>
                <p class="text-xl">Active Mentors</p>
            </div>
            <div class="p-6">
                <div class="text-4xl font-bold text-[#22345b] mb-2">500+</div>
                <p class="text-xl">Students Mentored</p>
            </div>
            <div class="p-6">
                <div class="text-4xl font-bold text-[#22345b] mb-2">20+</div>
                <p class="text-xl">Industries</p>
            </div>
            <div class="p-6">
                <div class="text-4xl font-bold text-[#22345b] mb-2">95%</div>
                <p class="text-xl">Success Rate</p>
            </div>
        </div>
    </div>
</div>

<!-- How It Works -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-[#22345b] mb-12 text-center">How It Works</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="text-yellow-400 mb-4">
                    <i class="fas fa-user-plus text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">1. Sign Up</h3>
                <p class="text-gray-700">Create your profile and tell us about your interests, goals, and what you're looking for in a mentor.</p>
            </div>
            <!-- Step 2 -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="text-yellow-400 mb-4">
                    <i class="fas fa-handshake text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">2. Get Matched</h3>
                <p class="text-gray-700">Our system matches you with mentors based on your interests, career goals, and academic pursuits.</p>
            </div>
            <!-- Step 3 -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="text-yellow-400 mb-4">
                    <i class="fas fa-rocket text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">3. Start Growing</h3>
                <p class="text-gray-700">Begin your mentorship journey with regular meetings, goal setting, and professional guidance.</p>
            </div>
        </div>
    </div>
</div>

<!-- Meet Our Mentors -->
<div id="mentors" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-[#22345b] mb-12 text-center">Meet Our Mentors</h2>
        
        <!-- Mentor Search -->
        <div class="max-w-2xl mx-auto mb-12">
            <div class="bg-gray-50 p-6 rounded-xl">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <select class="w-full p-3 rounded border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                        <option value="">All Industries</option>
                        <option value="technology">Technology</option>
                        <option value="medicine">Medicine</option>
                        <option value="education">Education</option>
                        <option value="business">Business</option>
                    </select>
                    <select class="w-full p-3 rounded border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                        <option value="">All Experience Levels</option>
                        <option value="1-5">1-5 years</option>
                        <option value="5-10">5-10 years</option>
                        <option value="10+">10+ years</option>
                    </select>
                    <button class="w-full bg-[#22345b] text-white p-3 rounded hover:bg-[#1a2844] transition">
                        Find Mentors
                    </button>
                </div>
            </div>
        </div>

        <!-- Mentor Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Mentor 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="{{ asset('assets/images/mentor1.jpg') }}" alt="Dr. Sarah Kipchoge" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-[#22345b]">Dr. Sarah Kipchoge</h3>
                    <p class="text-gray-600 mb-2">Class of 2005</p>
                    <p class="text-gray-700 mb-4">Leading Cardiovascular Surgeon at Kenyatta National Hospital</p>
                    <div class="space-y-2">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-briefcase mr-2"></i>
                            <span>Medicine & Healthcare</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-clock mr-2"></i>
                            <span>15+ Years Experience</span>
                        </div>
                    </div>
                    <button class="mt-4 w-full bg-yellow-400 text-[#22345b] py-2 rounded font-semibold hover:bg-yellow-300 transition">
                        Connect
                    </button>
                </div>
            </div>

            <!-- Mentor 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="{{ asset('assets/images/mentor2.jpg') }}" alt="James Mwangi" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-[#22345b]">James Mwangi</h3>
                    <p class="text-gray-600 mb-2">Class of 1998</p>
                    <p class="text-gray-700 mb-4">CEO of TechInnovate Kenya</p>
                    <div class="space-y-2">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-briefcase mr-2"></i>
                            <span>Technology & Innovation</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-clock mr-2"></i>
                            <span>20+ Years Experience</span>
                        </div>
                    </div>
                    <button class="mt-4 w-full bg-yellow-400 text-[#22345b] py-2 rounded font-semibold hover:bg-yellow-300 transition">
                        Connect
                    </button>
                </div>
            </div>

            <!-- Mentor 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="{{ asset('assets/images/mentor3.jpg') }}" alt="Prof. Elizabeth Wanjiru" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-[#22345b]">Prof. Elizabeth Wanjiru</h3>
                    <p class="text-gray-600 mb-2">Class of 1990</p>
                    <p class="text-gray-700 mb-4">Professor of Environmental Science, MIT</p>
                    <div class="space-y-2">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-briefcase mr-2"></i>
                            <span>Education & Research</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-clock mr-2"></i>
                            <span>25+ Years Experience</span>
                        </div>
                    </div>
                    <button class="mt-4 w-full bg-yellow-400 text-[#22345b] py-2 rounded font-semibold hover:bg-yellow-300 transition">
                        Connect
                    </button>
                </div>
            </div>
        </div>

        <div class="text-center mt-8">
            <button class="bg-[#22345b] text-white px-8 py-3 rounded-full hover:bg-[#1a2844] transition">
                View All Mentors
            </button>
        </div>
    </div>
</div>

<!-- Success Stories -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-[#22345b] mb-12 text-center">Success Stories</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Story 1 -->
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="flex items-start gap-4">
                    <img src="{{ asset('assets/images/mentee1.jpg') }}" alt="Student" class="w-16 h-16 rounded-full object-cover">
                    <div>
                        <blockquote class="text-gray-700 mb-4">"Through the mentorship program, I gained invaluable insights into the medical field. My mentor's guidance helped me secure a scholarship to medical school."</blockquote>
                        <p class="font-semibold text-[#22345b]">David Kimutai</p>
                        <p class="text-sm text-gray-600">Current Medical Student, Class of 2022</p>
                    </div>
                </div>
            </div>

            <!-- Story 2 -->
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="flex items-start gap-4">
                    <img src="{{ asset('assets/images/mentee2.jpg') }}" alt="Student" class="w-16 h-16 rounded-full object-cover">
                    <div>
                        <blockquote class="text-gray-700 mb-4">"My mentor helped me discover my passion for technology and guided me through starting my own tech startup. The mentorship was life-changing."</blockquote>
                        <p class="font-semibold text-[#22345b]">Grace Njeri</p>
                        <p class="text-sm text-gray-600">Tech Entrepreneur, Class of 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Get Involved -->
<div id="become-mentor" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold text-[#22345b] mb-12 text-center">Get Involved</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- For Mentors -->
                <div class="bg-[#22345b] rounded-xl p-8 text-white">
                    <h3 class="text-2xl font-bold mb-4">Become a Mentor</h3>
                    <ul class="space-y-4 mb-6">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-yellow-400 mr-2"></i>
                            Share your expertise
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-yellow-400 mr-2"></i>
                            Guide the next generation
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-yellow-400 mr-2"></i>
                            Build your network
                        </li>
                    </ul>
                    <button class="w-full bg-yellow-400 text-[#22345b] py-3 rounded font-semibold hover:bg-yellow-300 transition">
                        Apply as Mentor
                    </button>
                </div>

                <!-- For Students -->
                <div class="bg-gray-50 rounded-xl p-8">
                    <h3 class="text-2xl font-bold mb-4 text-[#22345b]">Find a Mentor</h3>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-yellow-400 mr-2"></i>
                            Get career guidance
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-yellow-400 mr-2"></i>
                            Learn from experience
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-yellow-400 mr-2"></i>
                            Expand your horizons
                        </li>
                    </ul>
                    <button class="w-full bg-[#22345b] text-white py-3 rounded font-semibold hover:bg-[#1a2844] transition">
                        Find Your Mentor
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Career Guidelines Resources -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-[#22345b] mb-12 text-center">Career Guidelines & Resources</h2>
        
        <!-- Search and Filter -->
        <div class="max-w-2xl mx-auto mb-12">
            <div class="bg-gray-50 p-6 rounded-xl">
                <div class="flex gap-4">
                    <input type="text" placeholder="Search resources..." class="flex-1 p-3 rounded border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                    <button class="bg-[#22345b] text-white px-6 py-3 rounded hover:bg-[#1a2844] transition">
                        Search
                    </button>
                </div>
            </div>
        </div>

        <!-- Resource Categories -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Science & Technology -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-microscope text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">Science & Technology</h3>
                <ul class="space-y-4">
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Engineering Career Guide</span>
                        <a href="#" class="text-[#1b5454] hover:text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">IT Career Pathways</span>
                        <a href="#" class="text-[#1b5454] hover:text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Medical Careers Handbook</span>
                        <a href="#" class="text-[#1b5454] hover:text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Business & Finance -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-chart-line text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">Business & Finance</h3>
                <ul class="space-y-4">
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Banking Career Guide</span>
                        <a href="#" class="text-[#1b5454] hover:text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Entrepreneurship Manual</span>
                        <a href="#" class="text-[#1b5454] hover:text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Accounting Pathways</span>
                        <a href="#" class="text-[#1b5454] hover:text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Arts & Humanities -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-paint-brush text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">Arts & Humanities</h3>
                <ul class="space-y-4">
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Creative Arts Guide</span>
                        <a href="#" class="text-[#1b5454] hover:text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Media Career Paths</span>
                        <a href="#" class="text-[#1b5454] hover:text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Education Careers</span>
                        <a href="#" class="text-[#1b5454] hover:text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Law & Government -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-gavel text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">Law & Government</h3>
                <ul class="space-y-4">
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Legal Career Guide</span>
                        <a href="#" class="text-[#1b5454] hover:text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Public Service Paths</span>
                        <a href="#" class="text-[#1b5454] hover:text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Diplomacy Careers</span>
                        <a href="#" class="text-[#1b5454] hover:text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Agriculture & Environment -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-leaf text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">Agriculture & Environment</h3>
                <ul class="space-y-4">
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Agricultural Sciences</span>
                        <a href="#" class="text-[#1b5454] hover:text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Environmental Careers</span>
                        <a href="#" class="text-[#1b5454] hover:text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Sustainability Guide</span>
                        <a href="#" class="text-[#1b5454] hover:text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Hospitality & Tourism -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-hotel text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">Hospitality & Tourism</h3>
                <ul class="space-y-4">
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Hotel Management</span>
                        <a href="#" class="text-[#1b5454] hover:text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Tourism Industry Guide</span>
                        <a href="#" class="text-[#1b5454] hover:text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Event Management</span>
                        <a href="#" class="text-[#1b5454] hover:text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Additional Resources -->
        <div class="mt-12 text-center">
            <h3 class="text-2xl font-bold text-[#22345b] mb-6">Additional Resources</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-4xl mx-auto">
                <a href="#" class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition flex items-center justify-between">
                    <span class="text-[#22345b]">Interview Preparation Guide</span>
                    <i class="fas fa-download text-[#1b5454]"></i>
                </a>
                <a href="#" class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition flex items-center justify-between">
                    <span class="text-[#22345b]">CV Writing Template</span>
                    <i class="fas fa-download text-[#1b5454]"></i>
                </a>
                <a href="#" class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition flex items-center justify-between">
                    <span class="text-[#22345b]">Scholarship Opportunities</span>
                    <i class="fas fa-download text-[#1b5454]"></i>
                </a>
                <a href="#" class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition flex items-center justify-between">
                    <span class="text-[#22345b]">University Application Tips</span>
                    <i class="fas fa-download text-[#1b5454]"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<!-- FAQ Section -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 max-w-4xl">
        <h2 class="text-4xl font-bold text-[#22345b] mb-12 text-center">Frequently Asked Questions</h2>
        <div class="space-y-6">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold text-[#22345b] mb-2">How long does the mentorship program last?</h3>
                <p class="text-gray-700">Our standard program runs for 6 months, but many mentor-mentee relationships continue beyond this period based on mutual agreement.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold text-[#22345b] mb-2">What is the time commitment?</h3>
                <p class="text-gray-700">We recommend at least one hour per month for meetings, plus additional time for preparation and follow-up activities.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold text-[#22345b] mb-2">Can I change my mentor?</h3>
                <p class="text-gray-700">Yes, if you feel the match isn't right, you can request a new mentor through our program coordinator.</p>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="bg-[#22345b] rounded-xl p-8 text-white text-center">
            <h2 class="text-3xl font-bold mb-4">Have Questions?</h2>
            <p class="mb-6">Our mentorship coordination team is here to help you get started.</p>
            <div class="flex flex-col md:flex-row gap-4 justify-center">
                <a href="mailto:mentorship@ughs.edu" class="bg-yellow-400 text-[#22345b] px-8 py-3 rounded font-semibold hover:bg-yellow-300 transition">
                    Email Coordinator
                </a>
                <a href="tel:+254123456789" class="bg-white/20 text-white px-8 py-3 rounded font-semibold hover:bg-white/30 transition">
                    Call Us
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .hover\:scale-105:hover {
        transform: scale(1.05);
    }
</style>
@endpush
