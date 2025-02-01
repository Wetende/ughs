@extends('layouts.master')

@section('title', 'Welcome to UGHS')

@section('content')
<!-- Hero Section -->
<div class="relative h-[600px] bg-gradient-to-r from-[#023D54] to-[#9A6735] overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container mx-auto px-4 h-full flex items-center relative z-10">
        <div class="max-w-2xl text-white">
            <h1 class="text-5xl font-bold mb-6">Welcome to Upper Gakoe High School</h1>
            <p class="text-xl mb-8">Nurturing Excellence, Building Future Leaders</p>
            <div class="space-x-4">
                <a href="/admissions" class="bg-[#023D54] text-white px-8 py-3 rounded-lg hover:bg-[#022b3d] transition">Apply Now</a>
                <a href="/about" class="bg-[#9A6735] text-white px-8 py-3 rounded-lg hover:bg-[#875a2f] transition">Learn More</a>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="py-16 bg-gradient-to-br from-white via-[#1b5454] to-yellow-50">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center p-6 bg-white rounded-lg shadow-lg">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-graduation-cap text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-black">Academic Excellence</h3>
                <p class="text-black">Committed to providing high-quality education and fostering academic achievement.</p>
            </div>
            <div class="text-center p-6 bg-white rounded-lg shadow-lg">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-users text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-black">Dedicated Faculty</h3>
                <p class="text-black">Expert teachers committed to nurturing every student's potential.</p>
            </div>
            <div class="text-center p-6 bg-white rounded-lg shadow-lg">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-microscope text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-black">Modern Facilities</h3>
                <p class="text-black">State-of-the-art facilities to support learning and growth.</p>
            </div>
        </div>
    </div>
</div>
<!-- Streams Section -->
<div class="py-16 bg-[#f8fafc]">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Streams</h2>
            <p class="text-xl text-gray-600">Discover your path through our specialized academic streams</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Twigga Stream -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-green-500">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-leaf text-green-500 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Twigga Stream</h3>
                    </div>
                    <p class="text-gray-600">Environmental focus: Nurturing future environmental leaders and conservationists.</p>
                </div>
            </div>

            <!-- Wareng Stream -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-red-500">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-users text-red-500 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Wareng Stream</h3>
                    </div>
                    <p class="text-gray-600">Leadership focus: Developing tomorrow's leaders through practical leadership skills.</p>
                </div>
            </div>

            <!-- Sosiani Stream -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-blue-500">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-book text-blue-500 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Sosiani Stream</h3>
                    </div>
                    <p class="text-gray-600">Academic focus: Excellence in scholarly pursuits and intellectual development.</p>
                </div>
            </div>

            <!-- Sergoit Stream -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-purple-500">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-palette text-purple-500 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Sergoit Stream</h3>
                    </div>
                    <p class="text-gray-600">Arts focus: Cultivating creativity and artistic expression.</p>
                </div>
            </div>

            <!-- Whe Stream -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-gray-500">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-microchip text-gray-500 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Whe Stream</h3>
                    </div>
                    <p class="text-gray-600">Technology focus: Embracing innovation and digital advancement.</p>
                </div>
            </div>

            <!-- Robe Stream -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-yellow-500">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-running text-yellow-500 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Robe Stream</h3>
                    </div>
                    <p class="text-gray-600">Sports focus: Developing athletic excellence and sportsmanship.</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <p class="text-gray-600 max-w-2xl mx-auto">Each stream is designed to nurture specific talents and interests while maintaining our high academic standards. Students receive specialized guidance and opportunities within their chosen stream.</p>
        </div>
    </div>
</div>
<!-- News & Events Section -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-12 text-center text-black">Latest News & Events</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('assets/images/news1.jpg') }}" alt="News 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-black">School Sports Day Success</h3>
                    <p class="text-black mb-4">Annual sports day showcases student athleticism and team spirit.</p>
                    <a href="#" class="text-[#1b5454] hover:text-[#023D54] font-semibold">Read More →</a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('assets/images/news2.jpg') }}" alt="News 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-black">Sports Tournament Success</h3>
                    <p class="text-black mb-4">Our students excel in the regional sports championship.</p>
                    <a href="/news/sports-success" class="text-[#1b5454] hover:text-[#023D54] font-semibold">Read More →</a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('assets/images/news3.jpg') }}" alt="News 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-black">Science Fair Winners</h3>
                    <p class="text-black mb-4">UGHS students win top prizes at the national science fair.</p>
                    <a href="/news/science-fair" class="text-[#1b5454] hover:text-[#023D54] font-semibold">Read More →</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Admissions Section -->
<div class="bg-[#003e3e] text-white py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl">
            <h2 class="text-4xl font-bold mb-6">Join Our School Community</h2>
            <p class="text-xl mb-8">Start your journey with us and discover the opportunities that await at UGHS.</p>
            
            <div class="space-y-4 mb-8">
                <div class="flex items-center">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-lg">Comprehensive academic programs</span>
                </div>
                <div class="flex items-center">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-lg">Experienced teaching staff</span>
                </div>
                <div class="flex items-center">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-lg">Modern learning facilities</span>
                </div>
                <div class="flex items-center">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-lg">Diverse extracurricular activities</span>
                </div>
            </div>
            
            <a href="/admissions" class="inline-block bg-white text-[#003e3e] px-8 py-3 rounded-lg text-lg font-semibold hover:bg-gray-100 transition">
                Learn More About Admissions
            </a>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<div class="py-16 bg-[#1b5454]">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-12 text-center text-white">What Our Students Say</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="text-black mb-4">"The teachers here are incredibly supportive and passionate about helping us learn."</p>
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/student1.jpg') }}" alt="Student 1" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-bold text-black">Jane Doe</h4>
                        <p class="text-black">Form 4 Student</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="text-black mb-4">"The diverse range of activities and supportive community at UGHS has helped me develop both academically and personally."</p>
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/student2.jpg') }}" alt="Student 2" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-bold text-black">John Smith</h4>
                        <p class="text-black">Form 3 Student</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="text-black mb-4">"I'm grateful for the guidance and support I've received at UGHS. It's more than just a school - it's a family."</p>
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/student3.jpg') }}" alt="Student 3" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-bold text-black">Mike Johnson</h4>
                        <p class="text-black">Form 2 Student</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="py-16 bg-gradient-to-r from-[#023D54] to-[#9A6735] text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-8">Begin Your Journey With Us</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Join our community of learners and discover the endless possibilities that await you at Upper Gakoe High School.</p>
        <a href="/admissions" class="inline-block bg-white text-[#023D54] px-8 py-3 rounded-lg hover:bg-gray-100 transition">Start Your Application</a>
    </div>
</div>
@endsection

@push('styles')
<style>
    .hero-pattern {
        background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%239C92AC' fill-opacity='0.4' fill-rule='evenodd'%3E%3Ccircle cx='3' cy='3' r='3'/%3E%3Ccircle cx='13' cy='13' r='3'/%3E%3C/g%3E%3C/svg%3E");
    }
</style>
@endpush