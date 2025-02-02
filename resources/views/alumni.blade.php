@extends('layouts.master')

@section('title', 'Alumni - UGHS')

@section('content')
<!-- Hero Section -->
<div class="relative h-[300px] md:h-[400px] bg-gradient-to-r from-[#1b5454] to-[#023D54]">
    <div class="absolute inset-0">
        <div class="bg-black opacity-50 absolute inset-0"></div>
        <div class="container mx-auto px-4 h-full flex items-center relative z-10">
            <div class="text-white max-w-3xl">
                <h1 class="text-3xl md:text-5xl font-bold mb-4">UGHS Alumni Network</h1>
                <p class="text-xl md:text-2xl font-light">Connecting generations of excellence</p>
            </div>
        </div>
    </div>
</div>

<!-- Alumni Success Stories -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Success Stories</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Success Story 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('assets/images/alumni/alumni1.jpg') }}" alt="Alumni 1" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Dr. Sarah Kipchoge</h3>
                    <p class="text-gray-600 mb-2">Class of 2005</p>
                    <p class="text-gray-700">Leading cardiovascular surgeon at Kenyatta National Hospital. Pioneering new surgical techniques.</p>
                </div>
            </div>

            <!-- Success Story 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('assets/images/alumni/alumni2.jpg') }}" alt="Alumni 2" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">James Mwangi</h3>
                    <p class="text-gray-600 mb-2">Class of 1998</p>
                    <p class="text-gray-700">CEO of TechInnovate Kenya. Leading digital transformation across East Africa.</p>
                </div>
            </div>

            <!-- Success Story 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('assets/images/alumni/alumni3.jpg') }}" alt="Alumni 3" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Prof. Elizabeth Wanjiru</h3>
                    <p class="text-gray-600 mb-2">Class of 1990</p>
                    <p class="text-gray-700">Distinguished Professor at MIT. Research focus on renewable energy solutions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Get Involved Section -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Get Involved</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Mentorship -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-user-friends text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Mentorship Program</h3>
                <p class="text-gray-700 mb-4">Guide current students through their academic journey and career choices.</p>
                <a href="#" class="text-[#1b5454] hover:text-[#023D54] font-semibold">Learn More →</a>
            </div>

            <!-- Career Network -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-briefcase text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Career Network</h3>
                <p class="text-gray-700 mb-4">Connect with fellow alumni and share job opportunities.</p>
                <a href="#" class="text-[#1b5454] hover:text-[#023D54] font-semibold">Join Network →</a>
            </div>

            <!-- Events -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-calendar-alt text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Alumni Events</h3>
                <p class="text-gray-700 mb-4">Participate in reunions, networking events, and school functions.</p>
                <a href="#" class="text-[#1b5454] hover:text-[#023D54] font-semibold">View Calendar →</a>
            </div>

            <!-- Give Back -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-gift text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Give Back</h3>
                <p class="text-gray-700 mb-4">Support scholarships and school development projects.</p>
                <a href="#" class="text-[#1b5454] hover:text-[#023D54] font-semibold">Donate Now →</a>
            </div>
        </div>
    </div>
</section>

<!-- Alumni Network Registration -->
<section class="py-16 bg-[#1b5454] text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Join Our Alumni Network</h2>
            <p class="text-lg mb-8">Stay connected with your alma mater and fellow alumni. Register to access exclusive benefits and opportunities.</p>
            <form class="max-w-md mx-auto space-y-4">
                <input type="text" placeholder="Full Name" class="w-full px-4 py-2 rounded-lg text-gray-900">
                <input type="email" placeholder="Email Address" class="w-full px-4 py-2 rounded-lg text-gray-900">
                <input type="text" placeholder="Graduation Year" class="w-full px-4 py-2 rounded-lg text-gray-900">
                <button type="submit" class="w-full bg-yellow-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-yellow-600 transition">
                    Register Now
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
