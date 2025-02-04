@extends('layouts.guest')

@section('title', 'Alumni Network - Uasin Gishu High School')

@section('body')
@include('partials.navigation')

<!-- Hero Section -->
<div class="relative bg-[#22345b] text-white py-16">
    <div class="absolute inset-0 bg-gradient-to-r from-[#22345b] to-[#1a2844] opacity-90"></div>
    <div class="container mx-auto px-4 relative z-10">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 text-center">UGHS Alumni Network</h1>
        <p class="text-xl text-center mb-8">Connecting Generations of Excellence</p>
        <div class="max-w-3xl mx-auto bg-white/10 backdrop-blur-md rounded-lg p-8">
            <h2 class="text-2xl font-semibold mb-4 text-center">Join Our Global Network</h2>
            <form action="#" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="name" placeholder="Name" class="w-full p-3 rounded bg-white/20 border border-white/30 placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-yellow-400" required>
                    <input type="text" name="graduation_year" placeholder="Graduation Year" class="w-full p-3 rounded bg-white/20 border border-white/30 placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-yellow-400" required>
                    <input type="text" name="current_job" placeholder="Current Job/Title" class="w-full p-3 rounded bg-white/20 border border-white/30 placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-yellow-400" required>
                    <input type="text" name="location" placeholder="Location" class="w-full p-3 rounded bg-white/20 border border-white/30 placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-yellow-400" required>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-yellow-400 text-[#22345b] px-8 py-3 rounded-full font-semibold hover:bg-yellow-300 transition duration-300">Join the Network</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Alumni Spotlight Section -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-[#22345b] mb-8 text-center">Alumni Success Stories</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Success Story 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="{{ asset('assets/images/alumni-1.jpg') }}" alt="Alumni Success Story" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-[#22345b]">Dr. Sarah Kipchoge</h3>
                    <p class="text-gray-600 mb-2">Class of 2005</p>
                    <p class="text-gray-700">Leading cardiovascular surgeon at Kenyatta National Hospital.</p>
                </div>
            </div>
            <!-- Success Story 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="{{ asset('assets/images/alumni-2.jpg') }}" alt="Alumni Success Story" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-[#22345b]">James Mwangi</h3>
                    <p class="text-gray-600 mb-2">Class of 1998</p>
                    <p class="text-gray-700">CEO of TechInnovate Kenya, leading digital transformation.</p>
                </div>
            </div>
            <!-- Success Story 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="{{ asset('assets/images/alumni-3.jpg') }}" alt="Alumni Success Story" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-[#22345b]">Prof. Elizabeth Wanjiru</h3>
                    <p class="text-gray-600 mb-2">Class of 1990</p>
                    <p class="text-gray-700">Distinguished Professor at MIT, renewable energy research.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Upcoming Events Section -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-[#22345b] mb-8 text-center">Upcoming Events</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Event Card 1 -->
            <div class="bg-gray-50 rounded-lg p-6 shadow-md hover:shadow-xl transition duration-300">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-calendar-alt text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-[#22345b]">Class of 2015 Reunion</h3>
                <p class="text-gray-600 mb-4">Join us for a memorable evening of reconnecting with your classmates.</p>
                <p class="text-sm text-gray-500">Date: August 15, 2025</p>
            </div>
            <!-- Event Card 2 -->
            <div class="bg-gray-50 rounded-lg p-6 shadow-md hover:shadow-xl transition duration-300">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-users text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-[#22345b]">Career Networking Night</h3>
                <p class="text-gray-600 mb-4">Network with fellow alumni and share professional opportunities.</p>
                <p class="text-sm text-gray-500">Date: September 5, 2025</p>
            </div>
            <!-- Event Card 3 -->
            <div class="bg-gray-50 rounded-lg p-6 shadow-md hover:shadow-xl transition duration-300">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-graduation-cap text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-[#22345b]">Mentorship Program Launch</h3>
                <p class="text-gray-600 mb-4">Guide the next generation of UGHS students to success.</p>
                <p class="text-sm text-gray-500">Date: October 1, 2025</p>
            </div>
        </div>
    </div>
</div>

<!-- Impact Section -->
<div class="py-16 bg-[#22345b] text-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-12 text-center">Our Impact</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
            <div class="p-4">
                <div class="text-4xl font-bold mb-2">5000+</div>
                <p class="text-lg">Alumni Worldwide</p>
            </div>
            <div class="p-4">
                <div class="text-4xl font-bold mb-2">$2M+</div>
                <p class="text-lg">Scholarships Awarded</p>
            </div>
            <div class="p-4">
                <div class="text-4xl font-bold mb-2">300+</div>
                <p class="text-lg">Mentorship Connections</p>
            </div>
            <div class="p-4">
                <div class="text-4xl font-bold mb-2">50+</div>
                <p class="text-lg">Countries Represented</p>
            </div>
        </div>
    </div>
</div>

<!-- Get Involved Section -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-[#22345b] mb-8 text-center">Ways to Give Back</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-hand-holding-heart text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-[#22345b]">Support Scholarships</h3>
                <p class="text-gray-700">Help deserving students access quality education at UGHS.</p>
                <a href="#" class="inline-block mt-4 text-yellow-400 hover:text-yellow-500">Learn More →</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-chalkboard-teacher text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-[#22345b]">Become a Mentor</h3>
                <p class="text-gray-700">Share your experience and guide current students.</p>
                <a href="#" class="inline-block mt-4 text-yellow-400 hover:text-yellow-500">Join Program →</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-building text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-[#22345b]">Campus Development</h3>
                <p class="text-gray-700">Contribute to improving school facilities and resources.</p>
                <a href="#" class="inline-block mt-4 text-yellow-400 hover:text-yellow-500">Support →</a>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter Section -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="bg-[#22345b] rounded-xl p-8 text-white text-center">
            <h2 class="text-3xl font-bold mb-4">Stay Connected</h2>
            <p class="mb-6">Subscribe to our newsletter for alumni updates, events, and opportunities.</p>
            <form class="flex flex-col md:flex-row gap-4 justify-center">
                <input type="email" placeholder="Enter your email" class="flex-1 p-3 rounded bg-white/20 border border-white/30 placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                <button type="submit" class="bg-yellow-400 text-[#22345b] px-8 py-3 rounded font-semibold hover:bg-yellow-300 transition duration-300">Subscribe</button>
            </form>
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
