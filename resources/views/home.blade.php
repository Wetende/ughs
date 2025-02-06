@extends('layouts.master')

@section('title', 'Welcome to UGHS')

@section('content')
<!-- Hero Section -->
<div class="relative h-[500px] bg-white overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/images/home.jpg') }}');"></div>
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container mx-auto px-4 h-full flex items-center relative z-10">
        <div class="max-w-2xl text-black">
            <h1 class="text-5xl font-bold mb-6 text-white">Welcome to Uasin Gishu High School</h1>
            <p class="text-xl mb-8 text-white">Only The Best</p>
            <div class="space-x-4">
                <a href="/admissions" class="bg-blue-900 text-white px-8 py-3 rounded-lg hover:bg-blue-800 transition-colors duration-300">Apply Now</a>
                <a href="/about" class="bg-yellow-400 text-white px-8 py-3 rounded-lg hover:bg-[#875a2f] transition">Learn More</a>
            </div>
            
            

        </div>
    </div>
</div>

<!-- Features Section -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center p-6 bg-white rounded-lg shadow-lg">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-graduation-cap text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-blue-900">Academic Excellence</h3>
                <p class="text-black">Committed to providing high-quality education and fostering academic achievement.</p>
            </div>
            <div class="text-center p-6 bg-white rounded-lg shadow-lg">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-users text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-green-900">Dedicated Faculty</h3>
                <p class="text-black">Expert teachers committed to nurturing every student's potential.</p>
            </div>
            <div class="text-center p-6 bg-white rounded-lg shadow-lg">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-microscope text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-red-900">Modern Facilities</h3>
                <p class="text-black">State-of-the-art facilities to support learning and growth.</p>
            </div>
        </div>
    </div>
</div>
<!-- School Overview Section -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-blue-900 mb-4">Our School</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto mb-8"></div>
            <p class="text-xl text-gray-600">The Best School In Nurturing Excellence and Building Future Leaders</p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-2xl font-bold text-[#1b5454] mb-4">Vision</h3>
                    <p class="text-gray-700">To be a model mixed day school.</p>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-2xl font-bold text-[#1b5454] mb-4">Mission</h3>
                    <p class="text-gray-700">To bring up an open-minded, independent, self-motivated individual through quality education.</p>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-2xl font-bold text-[#1b5454] mb-4">Core Values</h3>
                    <div class="flex space-x-4">
                        <div class="flex-1 text-center p-4 bg-white rounded-lg shadow-sm">
                            <i class="fas fa-hand-holding-heart text-2xl text-yellow-500 mb-2"></i>
                            <p class="font-semibold">Integrity</p>
                        </div>
                        <div class="flex-1 text-center p-4 bg-white rounded-lg shadow-sm">
                            <i class="fas fa-lightbulb text-2xl text-yellow-500 mb-2"></i>
                            <p class="font-semibold">Innovativeness</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-2xl font-bold text-[#1b5454] mb-4">Contact Us</h3>
                    <div class="space-y-3">
                        <p class="flex items-center"><i class="fas fa-map-marker-alt w-6 text-yellow-500"></i> P.O. Box 380-30100, Eldoret, Kenya</p>
                        <p class="flex items-center"><i class="fas fa-phone w-6 text-yellow-500"></i> 0737015750</p>
                        <p class="flex items-center"><i class="fas fa-fax w-6 text-yellow-500"></i> (053) 2061534</p>
                        <p class="flex items-center"><i class="fas fa-envelope w-6 text-yellow-500"></i> uasingishusecsch@gmail.com</p>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="relative h-96 rounded-xl overflow-hidden shadow-xl">
                    <img src="{{ asset('assets/images/school-building.jpg') }}" alt="School Building" class="w-full h-full object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                        <div class="text-white">
                            <h3 class="text-2xl font-bold mb-2">Only the Best</h3>
                            <p>The Best School In Nurturing Excellence and Building Future Leaders</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Clubs and Societies Section -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-blue-900 mb-4">Clubs & Societies</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto mb-8"></div>
            <p class="text-xl text-gray-600">Discover your passion through our diverse range of activities</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Academic Clubs -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="text-yellow-500 mb-4">
                        <i class="fas fa-brain text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4">Academic Clubs</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-calculator w-6"></i> Mathematics Club</li>
                        <li class="flex items-center"><i class="fas fa-flask w-6"></i> Science & Engineering</li>
                        <li class="flex items-center"><i class="fas fa-laptop-code w-6"></i> ICT Club</li>
                    </ul>
                </div>
            </div>

            <!-- Arts & Culture -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="text-yellow-500 mb-4">
                        <i class="fas fa-palette text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4">Arts & Culture</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-theater-masks w-6"></i> Drama Club</li>
                        <li class="flex items-center"><i class="fas fa-music w-6"></i> Music Club</li>
                        <li class="flex items-center"><i class="fas fa-paint-brush w-6"></i> Arts Club</li>
                    </ul>
                </div>
            </div>

            <!-- Service & Leadership -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="text-yellow-500 mb-4">
                        <i class="fas fa-hands-helping text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4">Service & Leadership</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-heart w-6"></i> Charity Club</li>
                        <li class="flex items-center"><i class="fas fa-users w-6"></i> Leo Club</li>
                        <li class="flex items-center"><i class="fas fa-cross w-6"></i> Religious Societies</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="/student-life" class="inline-flex items-center px-8 py-3 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition-colors duration-300">
                View All Clubs
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</div>
<!-- News & Events Section -->
<div class="py-16 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-blue-900 mb-4">Latest News & Events</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto mb-8"></div>
            <p class="text-xl text-gray-600">Stay updated with the latest happenings at Uasin Gishu High School</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- News Item 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2">
                <div class="relative">
                    <img src="{{ asset('assets/images/student-council.jpg') }}" alt="Student Council" class="w-full h-56 object-cover">
                    <div class="absolute top-4 right-4 bg-blue-900 text-white px-4 py-1 rounded-full text-sm font-semibold">
                        FEB 2025
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-blue-900 mb-3 hover:text-green-600 transition-colors">Student Council Elections</h3>
                    <p class="text-gray-600 mb-4">Celebrating democracy in action as students elect their new council representatives.</p>
                    <a href="#" class="inline-flex items-center text-blue-900 hover:text-green-600 transition-colors">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- News Item 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2">
                <div class="relative">
                    <img src="{{ asset('assets/images/sports.jpg') }}" alt="Sports Day" class="w-full h-56 object-cover">
                    <div class="absolute top-4 right-4 bg-green-600 text-white px-4 py-1 rounded-full text-sm font-semibold">
                        JAN 2025
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-blue-900 mb-3 hover:text-green-600 transition-colors">Annual Sports Day</h3>
                    <p class="text-gray-600 mb-4">Students showcase their athletic prowess in various sports competitions.</p>
                    <a href="#" class="inline-flex items-center text-blue-900 hover:text-green-600 transition-colors">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- News Item 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2">
                <div class="relative">
                    <img src="{{ asset('assets/images/academics.jpg') }}" alt="Academic Excellence" class="w-full h-56 object-cover">
                    <div class="absolute top-4 right-4 bg-yellow-500 text-white px-4 py-1 rounded-full text-sm font-semibold">
                        DEC 2024
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-blue-900 mb-3 hover:text-green-600 transition-colors">Academic Excellence</h3>
                    <p class="text-gray-600 mb-4">Our students achieve outstanding results in national examinations.</p>
                    <a href="#" class="inline-flex items-center text-blue-900 hover:text-green-600 transition-colors">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="/news" class="inline-flex items-center px-8 py-3 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition-colors duration-300">
                View All News
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</div>
<!-- Admissions Section -->
<div class="relative py-20 bg-gradient-to-br from-blue-900 via-blue-800 to-green-900">
    <!-- Decorative Elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-40 h-40 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-32 h-32 bg-white rounded-full translate-x-1/2 translate-y-1/2"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-2xl overflow-hidden">
            <div class="grid md:grid-cols-2">
                <!-- Content Side -->
                <div class="p-8 md:p-12">
                    <h2 class="text-4xl font-bold text-blue-900 mb-6">Join Our School Community</h2>
                    <p class="text-lg text-gray-700 mb-8">Start your journey with us and discover the endless possibilities that await at Upper Gakoe High School.</p>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-graduation-cap text-green-600"></i>
                            </div>
                            <span class="text-gray-700 ml-4">Comprehensive academic programs</span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-users text-blue-600"></i>
                            </div>
                            <span class="text-gray-700 ml-4">Experienced teaching staff</span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-desktop text-purple-600"></i>
                            </div>
                            <span class="text-gray-700 ml-4">Modern learning facilities</span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-futbol text-yellow-600"></i>
                            </div>
                            <span class="text-gray-700 ml-4">Diverse extracurricular activities</span>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="/admissions" class="inline-flex items-center px-6 py-3 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition-colors duration-300">
                            <span>Apply Now</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                        <a href="/about" class="inline-flex items-center px-6 py-3 bg-white text-blue-900 rounded-lg border-2 border-blue-900 hover:bg-blue-50 transition duration-300">
                            <span>Learn More</span>
                            <i class="fas fa-info-circle ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Image Side -->
                <div class="relative hidden md:block">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-900 to-green-900 opacity-90"></div>
                    <img src="{{ asset('assets/images/campus-life.jpg') }}" alt="Campus Life" class="w-full h-full object-cover">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white p-6">
                            <div class="text-5xl font-bold mb-4">2024</div>
                            <div class="text-xl">Admissions Open</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-12 text-white text-center">
            <div>
                <div class="text-4xl font-bold mb-2">99%</div>
                <div class="text-sm opacity-90">Certification Rate</div>
            </div>
            <div>
                <div class="text-4xl font-bold mb-2">50+</div>
                <div class="text-sm opacity-90">Extra-Curricular Activities</div>
            </div>
            <div>
                <div class="text-4xl font-bold mb-2">25:1</div>
                <div class="text-sm opacity-90">Student-Teacher Ratio</div>
            </div>
            <div>
                <div class="text-4xl font-bold mb-2">95%</div>
                <div class="text-sm opacity-90">University Acceptance</div>
            </div>
        </div>
    </div>
</div>

<!-- Leadership Section -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-blue-900 mb-4">Our Leadership</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto mb-8"></div>
            <p class="text-xl text-gray-600">Meet the dedicated team leading Uasin Gishu High School</p>
        </div>

        <!-- Senior Leadership - 4 Columns -->
        <div class="grid md:grid-cols-4 gap-8 mb-16">
            <!-- Principal -->
            <div class="bg-white rounded-xl shadow-lg p-6 transform transition-all duration-300 hover:-translate-y-2">
                <div class="relative mb-6">
                    <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-blue-900">
                        <img src="{{ asset('assets/images/principal.jpg') }}" alt="Principal" class="w-full h-full object-cover">
                    </div>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-2">Dr. Murkomen</h3>
                <p class="text-green-600 font-semibold mb-2">Principal</p>
                <p class="text-gray-600 text-sm">Ph.D. in Educational Leadership</p>
            </div>

            <!-- Deputy Principal 1 -->
            <div class="bg-white rounded-xl shadow-lg p-6 transform transition-all duration-300 hover:-translate-y-2">
                <div class="relative mb-6">
                    <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-green-600">
                        <img src="{{ asset('assets/images/deputy1.jpg') }}" alt="Deputy Principal 1" class="w-full h-full object-cover">
                    </div>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-2">Mrs. Bush - Academics</p>
                <p class="text-gray-600 text-sm">M.Ed. in Curriculum Development</p>
            </div>

            <!-- Deputy Principal 2 -->
            <div class="bg-white rounded-xl shadow-lg p-6 transform transition-all duration-300 hover:-translate-y-2">
                <div class="relative mb-6">
                    <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-green-600">
                        <img src="{{ asset('assets/images/deputy2.jpg') }}" alt="Deputy Principal 2" class="w-full h-full object-cover">
                    </div>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-2">Mr. David Johnson</h3>
                <p class="text-green-600 font-semibold mb-2">Deputy Principal - Administration</p>
                <p class="text-gray-600 text-sm">M.Ed. in Educational Management</p>
            </div>

            <!-- Board Chairman -->
            <div class="bg-white rounded-xl shadow-lg p-6 transform transition-all duration-300 hover:-translate-y-2">
                <div class="relative mb-6">
                    <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-yellow-500">
                        <img src="{{ asset('assets/images/chairman.jpg') }}" alt="Board Chairman" class="w-full h-full object-cover">
                    </div>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-2">Prof. Michael Brown</h3>
                <p class="text-green-600 font-semibold mb-2">Board Chairman</p>
                <p class="text-gray-600 text-sm">Ph.D. in Educational Policy</p>
            </div>
        </div>

        <!-- Department Heads - 6 Columns -->
        <div class="grid md:grid-cols-6 gap-6">
            @foreach(['Sciences', 'Languages', 'Mathematics', 'Humanities', 'Technical', 'Arts'] as $department)
            <div class="bg-white rounded-xl shadow-lg p-4 transform transition-all duration-300 hover:-translate-y-2">
                <div class="relative mb-4">
                    <div class="w-20 h-20 mx-auto rounded-full overflow-hidden border-2 border-gray-300">
                        <img src="{{ asset('assets/images/department-head.jpg') }}" alt="Department Head" class="w-full h-full object-cover">
                    </div>
                </div>
                <h4 class="text-lg font-bold text-blue-900 mb-1">Head of {{ $department }}</h4>
                <p class="text-sm text-gray-600">Department</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<div class="py-16 bg-[#1b5454]">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-white mb-4">What Our Community Says</h2>
            <div class="w-24 h-1 bg-yellow-400 mx-auto mb-8"></div>
            <p class="text-xl text-white">Voices from our vibrant school community</p>
        </div>

        <!-- Testimonials Slider -->
        <div class="swiper testimonialSwiper max-w-6xl mx-auto">
            <div class="swiper-wrapper">
                <!-- Testimonial Cards -->
                <div class="swiper-slide">
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <div class="relative">
                            <div class="absolute -top-16 left-1/2 transform -translate-x-1/2">
                                <div class="w-24 h-24 rounded-full border-4 border-yellow-400 overflow-hidden bg-white">
                                    <img src="{{ asset('assets/images/parent1.jpg') }}" alt="Parent" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -top-2 right-0 bg-yellow-400 text-[#1b5454] text-sm font-bold px-3 py-1 rounded-full">
                                    Parent
                                </div>
                            </div>
                            <div class="pt-12 text-center">
                                <p class="text-gray-700 text-lg mb-6 leading-relaxed">
                                    "The school's commitment to excellence has helped shape my child's future in remarkable ways. The dedicated teachers and supportive environment make all the difference."
                                </p>
                                <h4 class="text-[#1b5454] font-bold text-xl">James Kipruto</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <div class="relative">
                            <div class="absolute -top-16 left-1/2 transform -translate-x-1/2">
                                <div class="w-24 h-24 rounded-full border-4 border-yellow-400 overflow-hidden bg-white">
                                    <img src="{{ asset('assets/images/alumni1.jpg') }}" alt="Alumni" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -top-2 right-0 bg-yellow-400 text-[#1b5454] text-sm font-bold px-3 py-1 rounded-full">
                                    Alumni
                                </div>
                            </div>
                            <div class="pt-12 text-center">
                                <p class="text-gray-700 text-lg mb-6 leading-relaxed">
                                    "The values and education I received at UGHS have been instrumental in my career success. The school prepared me well for university and beyond."
                                </p>
                                <h4 class="text-[#1b5454] font-bold text-xl">Peter Kimani</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <div class="relative">
                            <div class="absolute -top-16 left-1/2 transform -translate-x-1/2">
                                <div class="w-24 h-24 rounded-full border-4 border-yellow-400 overflow-hidden bg-white">
                                    <img src="{{ asset('assets/images/student2.jpg') }}" alt="Student" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -top-2 right-0 bg-yellow-400 text-[#1b5454] text-sm font-bold px-3 py-1 rounded-full">
                                    Student
                                </div>
                            </div>
                            <div class="pt-12 text-center">
                                <p class="text-gray-700 text-lg mb-6 leading-relaxed">
                                    "The diverse range of activities and clubs has helped me discover my passions. Our teachers make learning engaging and fun every day."
                                </p>
                                <h4 class="text-[#1b5454] font-bold text-xl">Mary Chepkemoi</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Navigation and Pagination -->
            <div class="swiper-button-prev !text-yellow-400 !-left-2"></div>
            <div class="swiper-button-next !text-yellow-400 !-right-2"></div>
            <div class="swiper-pagination !-bottom-10"></div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .testimonialSwiper {
        padding: 70px 20px 60px !important;
    }
    .testimonialSwiper .swiper-pagination-bullet {
        background: #ffffff;
        opacity: 0.7;
        width: 10px;
        height: 10px;
    }
    .testimonialSwiper .swiper-pagination-bullet-active {
        background: #facc15;
        opacity: 1;
    }
    .testimonialSwiper .swiper-button-next:after,
    .testimonialSwiper .swiper-button-prev:after {
        font-size: 24px;
        font-weight: bold;
    }
    .testimonialSwiper .swiper-slide {
        height: auto;
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    new Swiper(".testimonialSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        effect: "slide",
        speed: 800,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
                centeredSlides: false,
            },
            1024: {
                slidesPerView: 3,
                centeredSlides: false,
            },
        },
    });
});
</script>
@endpush

@endsection