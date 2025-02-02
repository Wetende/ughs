@extends('layouts.master')

@section('title', 'Student Life - UGHS')

@section('content')
<!-- Hero Section -->
<div class="relative h-[300px] bg-gradient-to-r from-[#1b5454] to-[#023D54]">
    <div class="absolute inset-0">
        <div class="bg-black opacity-50 absolute inset-0"></div>
        <div class="container mx-auto px-4 h-full flex items-center relative z-10">
            <div class="text-white">
                <h1 class="text-4xl font-bold mb-4">Student Life at UGHS</h1>
                <p class="text-xl">Discover the vibrant community and activities that make our school special</p>
            </div>
        </div>
    </div>
</div>

<!-- Clubs Section -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-blue-900 mb-4">Our Clubs</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto mb-8"></div>
            <p class="text-xl text-gray-600">Join our diverse range of clubs and discover your passion</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Academic Clubs -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-blue-900">Mathematics Club</h3>
                        <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full">2B</span>
                    </div>
                    <p class="text-gray-600 mb-4">Patron: Mr. Lel</p>
                    <p class="text-gray-700">Explore the fascinating world of mathematics through problem-solving and competitions.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-blue-900">Science & Engineering</h3>
                        <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full">Physics Lab</span>
                    </div>
                    <p class="text-gray-600 mb-4">Patron: Mr. Radol</p>
                    <p class="text-gray-700">Hands-on experiments and innovative projects in science and engineering.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-blue-900">ICT Club</h3>
                        <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full">Computer Lab</span>
                    </div>
                    <p class="text-gray-600 mb-4">Patron: Mr. Lagat</p>
                    <p class="text-gray-700">Learn programming, web development, and other digital skills.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-blue-900">Journalism Club</h3>
                        <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full">2R</span>
                    </div>
                    <p class="text-gray-600 mb-4">Patron: Mrs. Wanyama</p>
                    <p class="text-gray-700">Develop writing and reporting skills through school publications.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-blue-900">Drama Club</h3>
                        <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full">Hall</span>
                    </div>
                    <p class="text-gray-600 mb-4">Patrons: Mr. Kitagwa/Bett</p>
                    <p class="text-gray-700">Express yourself through acting and theatrical productions.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-blue-900">Environmental Club</h3>
                        <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full">2S</span>
                    </div>
                    <p class="text-gray-600 mb-4">Patron: Kerich</p>
                    <p class="text-gray-700">Promote environmental conservation and sustainability.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Religious Societies Section -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-blue-900 mb-4">Religious Societies</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto mb-8"></div>
            <p class="text-xl text-gray-600">Nurturing spiritual growth and values</p>
        </div>

        <div class="grid md:grid-cols-3 lg:grid-cols-5 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                <div class="text-3xl mb-4"><i class="fas fa-cross text-blue-900"></i></div>
                <h3 class="font-bold text-lg mb-2">Christian Union</h3>
                <p class="text-sm text-gray-600">Venue: Hall</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                <div class="text-3xl mb-4"><i class="fas fa-church text-blue-900"></i></div>
                <h3 class="font-bold text-lg mb-2">Young Catholic Society</h3>
                <p class="text-sm text-gray-600">Venue: 2G</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                <div class="text-3xl mb-4"><i class="fas fa-book-reader text-blue-900"></i></div>
                <h3 class="font-bold text-lg mb-2">Jehovah's Witness</h3>
                <p class="text-sm text-gray-600">Venue: 3B</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                <div class="text-3xl mb-4"><i class="fas fa-mosque text-blue-900"></i></div>
                <h3 class="font-bold text-lg mb-2">Muslim Society</h3>
                <p class="text-sm text-gray-600">Venue: 2V</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                <div class="text-3xl mb-4"><i class="fas fa-om text-blue-900"></i></div>
                <h3 class="font-bold text-lg mb-2">Indian Society</h3>
                <p class="text-sm text-gray-600">Venue: Physics Lab</p>
            </div>
        </div>
    </div>
</div>

<!-- Meeting Schedule -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto bg-gradient-to-r from-[#1b5454] to-[#023D54] rounded-xl shadow-xl overflow-hidden">
            <div class="p-8 text-white">
                <h3 class="text-2xl font-bold mb-6">Club Meeting Schedule</h3>
                <div class="space-y-4">
                    <p class="flex items-center">
                        <i class="fas fa-calendar-alt w-8"></i>
                        <span>Religious Societies meet every Thursday</span>
                    </p>
                    <p class="flex items-center">
                        <i class="fas fa-clock w-8"></i>
                        <span>Club activities are scheduled after regular classes</span>
                    </p>
                    <p class="flex items-center">
                        <i class="fas fa-info-circle w-8"></i>
                        <span>Contact respective patrons for specific meeting times</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
