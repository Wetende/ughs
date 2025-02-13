@extends('layouts.guest')


@section('title', 'Career Network - Uasin Gishu High School')

@section('body')
@include('partials.navigation')
<!-- Hero Section -->
<div class="relative bg-[#22345b] py-20">
<div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/images/career-network.jpg') }}');"></div>    
<div class="container mx-auto px-4">
        <div class="text-center text-white">
            <h1 class="text-5xl font-bold mb-4">Career Development</h1>
            <p class="text-xl opacity-90 max-w-2xl mx-auto">Your journey to a successful career starts here. Explore career paths, get guidance, and discover the tools you need to make informed decisions about your future.</p>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent"></div>
</div>

<!-- Career Guidance Section -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h2 class="text-3xl font-bold text-[#22345b] mb-4">Career Guidance</h2>
            <p class="text-gray-600">Our comprehensive career guidance program is designed to help you navigate your career choices and make informed decisions about your future. Whether you're exploring different fields or seeking specific advice, we're here to support your journey.</p>
        </div>

        <!-- Career Counseling Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-gray-50 rounded-xl p-8 shadow-md">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-user-tie text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">One-on-One Counseling</h3>
                <p class="text-gray-600 mb-4">Schedule a personal session with our career counselors to discuss your aspirations, strengths, and potential career paths.</p>
                <button class="bg-yellow-400 text-[#22345b] px-6 py-2 rounded-lg hover:bg-yellow-500 transition">Book Session</button>
            </div>
            <div class="bg-gray-50 rounded-xl p-8 shadow-md">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-users text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">Group Workshops</h3>
                <p class="text-gray-600 mb-4">Join our interactive workshops covering various aspects of career development, from skill assessment to industry insights.</p>
                <button class="bg-yellow-400 text-[#22345b] px-6 py-2 rounded-lg hover:bg-yellow-500 transition">View Schedule</button>
            </div>
        </div>
    </div>
</div>

<!-- Career Paths Section -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-[#22345b] mb-12 text-center">Explore Career Paths</h2>
        
        <!-- Career Fields Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- STEM -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-microscope text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">STEM Careers</h3>
                <ul class="space-y-3 text-gray-600">
                    <li>Engineering & Technology</li>
                    <li>Scientific Research</li>
                    <li>Mathematics & Data Science</li>
                    <li>Healthcare & Medicine</li>
                </ul>
                <a href="#" class="inline-block mt-6 text-yellow-400 hover:text-yellow-500">Learn More →</a>
            </div>

            <!-- Business & Finance -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-chart-line text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">Business & Finance</h3>
                <ul class="space-y-3 text-gray-600">
                    <li>Accounting & Banking</li>
                    <li>Marketing & Sales</li>
                    <li>Entrepreneurship</li>
                    <li>Business Administration</li>
                </ul>
                <a href="#" class="inline-block mt-6 text-yellow-400 hover:text-yellow-500">Learn More →</a>
            </div>

            <!-- Arts & Humanities -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-paint-brush text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">Arts & Humanities</h3>
                <ul class="space-y-3 text-gray-600">
                    <li>Creative Arts & Design</li>
                    <li>Media & Communication</li>
                    <li>Education & Teaching</li>
                    <li>Languages & Literature</li>
                </ul>
                <a href="#" class="inline-block mt-6 text-yellow-400 hover:text-yellow-500">Learn More →</a>
            </div>
        </div>

        <!-- Career Assessment Tool -->
        <div class="mt-16 bg-white rounded-xl shadow-lg p-8">
            <div class="text-center max-w-2xl mx-auto">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-clipboard-check text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">Career Assessment Tool</h3>
                <p class="text-gray-600 mb-6">Discover career paths that match your interests, skills, and values with our interactive assessment tool.</p>
                <button class="bg-yellow-400 text-[#22345b] px-8 py-3 rounded-lg hover:bg-yellow-500 transition">Take Assessment</button>
            </div>
        </div>
    </div>
</div>

<!-- Post-Form Four Guidance -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-[#22345b] mb-12 text-center">Life After Form Four</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Further Education -->
            <div class="bg-gray-50 rounded-xl p-8">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-graduation-cap text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">Further Education</h3>
                <ul class="space-y-4 text-gray-600">
                    <li class="flex items-start">
                        <i class="fas fa-check text-[#1b5454] mt-1 mr-2"></i>
                        <span>University Programs</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-[#1b5454] mt-1 mr-2"></i>
                        <span>Technical Colleges</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-[#1b5454] mt-1 mr-2"></i>
                        <span>Vocational Training</span>
                    </li>
                </ul>
                <button class="mt-6 bg-yellow-400 text-[#22345b] px-6 py-2 rounded-lg hover:bg-yellow-500 transition">Explore Options</button>
            </div>

            <!-- Direct Workforce -->
            <div class="bg-gray-50 rounded-xl p-8">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-briefcase text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">Enter Workforce</h3>
                <ul class="space-y-4 text-gray-600">
                    <li class="flex items-start">
                        <i class="fas fa-check text-[#1b5454] mt-1 mr-2"></i>
                        <span>Apprenticeships</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-[#1b5454] mt-1 mr-2"></i>
                        <span>Entry-Level Jobs</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-[#1b5454] mt-1 mr-2"></i>
                        <span>Internships</span>
                    </li>
                </ul>
                <button class="mt-6 bg-yellow-400 text-[#22345b] px-6 py-2 rounded-lg hover:bg-yellow-500 transition">Find Opportunities</button>
            </div>

            <!-- Gap Year -->
            <div class="bg-gray-50 rounded-xl p-8">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-globe text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">Gap Year</h3>
                <ul class="space-y-4 text-gray-600">
                    <li class="flex items-start">
                        <i class="fas fa-check text-[#1b5454] mt-1 mr-2"></i>
                        <span>Volunteer Programs</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-[#1b5454] mt-1 mr-2"></i>
                        <span>Travel Opportunities</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-[#1b5454] mt-1 mr-2"></i>
                        <span>Skill Development</span>
                    </li>
                </ul>
                <button class="mt-6 bg-yellow-400 text-[#22345b] px-6 py-2 rounded-lg hover:bg-yellow-500 transition">Plan Your Year</button>
            </div>
        </div>
    </div>
</div>

<!-- Career Resources -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-[#22345b] mb-12 text-center">Career Resources</h2>

        <!-- Resource Categories -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Resume & Applications -->
            <div class="bg-white rounded-xl p-8 shadow-md">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-file-alt text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">Resume & Applications</h3>
                <ul class="space-y-4">
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Resume Template</span>
                        <a href="#" class="text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Cover Letter Guide</span>
                        <a href="#" class="text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Application Checklist</span>
                        <a href="#" class="text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Interview Prep -->
            <div class="bg-white rounded-xl p-8 shadow-md">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-comments text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">Interview Preparation</h3>
                <ul class="space-y-4">
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Common Questions Guide</span>
                        <a href="#" class="text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Interview Tips</span>
                        <a href="#" class="text-[#1b5454]">
                            <i class="fas fa-download"></i>
                        </a>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-gray-700">Mock Interview Videos</span>
                        <a href="#" class="text-[#1b5454]">
                            <i class="fas fa-play"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Job Market Trends -->
        <div class="mt-12 bg-white rounded-xl p-8 shadow-md">
            <div class="text-center mb-8">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-chart-bar text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b]">Job Market Trends</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <h4 class="font-bold text-[#22345b] mb-2">In-Demand Skills</h4>
                    <p class="text-gray-600">Digital literacy, data analysis, and problem-solving are highly sought after.</p>
                </div>
                <div class="text-center">
                    <h4 class="font-bold text-[#22345b] mb-2">Emerging Industries</h4>
                    <p class="text-gray-600">Green technology, AI, and healthcare are showing significant growth.</p>
                </div>
                <div class="text-center">
                    <h4 class="font-bold text-[#22345b] mb-2">Future of Work</h4>
                    <p class="text-gray-600">Remote work and digital collaboration are becoming standard practices.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-[#22345b] mb-4">Need More Help?</h2>
            <p class="text-gray-600 mb-8">Our career guidance team is here to support you. Reach out to us for personalized assistance.</p>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="mailto:careers@ughs.edu" class="bg-yellow-400 text-[#22345b] px-8 py-3 rounded-lg hover:bg-yellow-500 transition">
                    <i class="fas fa-envelope mr-2"></i>Email Us
                </a>
                <a href="#" class="bg-[#22345b] text-white px-8 py-3 rounded-lg hover:bg-[#1a2844] transition">
                    <i class="fas fa-phone mr-2"></i>Schedule Call
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
