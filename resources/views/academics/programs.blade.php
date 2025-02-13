@extends('layouts.master')

@section('title', 'Academic Programs - UGHS')

@section('content')
<!-- Hero Section -->
<div class="relative h-[300px] md:h-[400px] bg-gradient-to-r from-[#1b5454] to-[#023D54]">
    <div class="absolute inset-0">
        <div class="bg-black opacity-50 absolute inset-0"></div>
        <div class="container mx-auto px-4 h-full flex items-center relative z-10">
            <div class="text-white max-w-3xl">
                <h1 class="text-3xl md:text-5xl font-bold mb-4">Academic Programs</h1>
                <p class="text-xl md:text-2xl font-light">Comprehensive Education for Future Leaders</p>
            </div>
        </div>
    </div>
</div>

<!-- Curriculum Overview -->
<div class="py-12 md:py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Our Curriculum</h2>
                <div class="w-24 h-1 bg-green-600 mx-auto mb-8"></div>
                <p class="text-xl text-gray-600">Comprehensive education following the 8-4-4 system</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gray-50 rounded-xl p-6 md:p-8">
                    <h3 class="text-xl font-bold text-[#1b5454] mb-4">Core Subjects</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Mathematics
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            English
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Kiswahili
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Sciences (Biology, Chemistry, Physics)
                        </li>
                    </ul>
                </div>

                <div class="bg-gray-50 rounded-xl p-6 md:p-8">
                    <h3 class="text-xl font-bold text-[#1b5454] mb-4">Optional Subjects</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Business Studies
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Computer Studies
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            Agriculture
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            History & Government
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Special Programs -->
<div class="py-12 md:py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Special Programs</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto mb-8"></div>
            <p class="text-xl text-gray-600">Enhanced learning opportunities for our students</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="text-yellow-500 mb-4">
                    <i class="fas fa-book-reader text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-4">Remedial Classes</h3>
                <p class="text-gray-600">Extra support for students who need additional help in specific subjects.</p>
                <ul class="mt-4 space-y-2 text-gray-600">
                    <li class="flex items-center">
                        <i class="fas fa-clock text-green-500 mr-2"></i>
                        After regular classes
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-users text-green-500 mr-2"></i>
                        Small group sessions
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="text-yellow-500 mb-4">
                    <i class="fas fa-trophy text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-4">Advanced Program</h3>
                <p class="text-gray-600">Challenging coursework for high-performing students.</p>
                <ul class="mt-4 space-y-2 text-gray-600">
                    <li class="flex items-center">
                        <i class="fas fa-star text-green-500 mr-2"></i>
                        Advanced topics
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-medal text-green-500 mr-2"></i>
                        Competition preparation
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="text-yellow-500 mb-4">
                    <i class="fas fa-laptop-code text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-4">Digital Learning</h3>
                <p class="text-gray-600">Integration of technology in education.</p>
                <ul class="mt-4 space-y-2 text-gray-600">
                    <li class="flex items-center">
                        <i class="fas fa-wifi text-green-500 mr-2"></i>
                        Online resources
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-desktop text-green-500 mr-2"></i>
                        Computer labs
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Academic Calendar -->
<div class="py-12 md:py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Academic Calendar</h2>
                <div class="w-24 h-1 bg-green-600 mx-auto mb-8"></div>
                <p class="text-xl text-gray-600">Key dates for the academic year</p>
            </div>

            <div class="bg-gray-50 rounded-xl shadow-lg overflow-hidden">
                <div class="grid md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-gray-200">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#1b5454] mb-4">Term 1</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-calendar-day w-6 text-yellow-500"></i>
                                <span>January - March</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-book w-6 text-yellow-500"></i>
                                <span>Mid-term Exams</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-flag-checkered w-6 text-yellow-500"></i>
                                <span>End-term Exams</span>
                            </li>
                        </ul>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#1b5454] mb-4">Term 2</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-calendar-day w-6 text-yellow-500"></i>
                                <span>May - July</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-book w-6 text-yellow-500"></i>
                                <span>Mid-term Exams</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-flag-checkered w-6 text-yellow-500"></i>
                                <span>End-term Exams</span>
                            </li>
                        </ul>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#1b5454] mb-4">Term 3</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-calendar-day w-6 text-yellow-500"></i>
                                <span>September - November</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-book w-6 text-yellow-500"></i>
                                <span>Mock Exams</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-graduation-cap w-6 text-yellow-500"></i>
                                <span>KCSE Exams</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="py-12 md:py-16 bg-[#1b5454]">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h2 class="text-2xl md:text-3xl font-bold mb-4 md:mb-6">Ready to Join Our Academic Community?</h2>
            <p class="text-lg md:text-xl mb-6 md:mb-8">Take the first step towards academic excellence</p>
            <div class="flex flex-col md:flex-row justify-center gap-4 md:gap-6">
                <a href="{{ route('admissions') }}" class="w-full md:w-auto bg-white text-[#1b5454] px-6 py-3 rounded-lg hover:bg-gray-100 transition text-center">Apply Now</a>
                <a href="{{ route('contact') }}" class="w-full md:w-auto bg-yellow-500 text-white px-6 py-3 rounded-lg hover:bg-yellow-600 transition text-center">Contact Us</a>
            </div>
        </div>
    </div>
</div>
@endsection
