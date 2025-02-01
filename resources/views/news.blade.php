@extends('layouts.app')

@section('title', 'News & Events')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-blue-600 text-white py-16">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-4">News & Events</h1>
            <p class="text-xl">Stay updated with the latest happenings at UGHS</p>
        </div>
    </div>

    <!-- News & Events Content -->
    <div class="py-16">
        <div class="container mx-auto px-4">
            <!-- Featured News -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold mb-8">Latest News</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- News Item 1 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="h-48 bg-gray-200">
                            <!-- News image placeholder -->
                        </div>
                        <div class="p-6">
                            <div class="text-sm text-gray-500 mb-2">January 30, 2025</div>
                            <h3 class="text-xl font-bold mb-2">National Science Competition Winners</h3>
                            <p class="text-gray-600 mb-4">Our students secured top positions in the National Science Competition, showcasing exceptional talent in innovation.</p>
                            <a href="#" class="text-blue-600 hover:text-blue-800">Read more →</a>
                        </div>
                    </div>

                    <!-- News Item 2 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="h-48 bg-gray-200">
                            <!-- News image placeholder -->
                        </div>
                        <div class="p-6">
                            <div class="text-sm text-gray-500 mb-2">January 25, 2025</div>
                            <h3 class="text-xl font-bold mb-2">New Sports Complex Inauguration</h3>
                            <p class="text-gray-600 mb-4">UGHS proudly announces the opening of our state-of-the-art sports complex, enhancing our athletic programs.</p>
                            <a href="#" class="text-blue-600 hover:text-blue-800">Read more →</a>
                        </div>
                    </div>

                    <!-- News Item 3 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="h-48 bg-gray-200">
                            <!-- News image placeholder -->
                        </div>
                        <div class="p-6">
                            <div class="text-sm text-gray-500 mb-2">January 20, 2025</div>
                            <h3 class="text-xl font-bold mb-2">Cultural Week Celebration</h3>
                            <p class="text-gray-600 mb-4">Students showcase diverse cultural performances and exhibitions during our annual Cultural Week.</p>
                            <a href="#" class="text-blue-600 hover:text-blue-800">Read more →</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Events -->
            <div>
                <h2 class="text-3xl font-bold mb-8">Upcoming Events</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Event 1 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-16 h-16 bg-blue-100 rounded-lg flex flex-col items-center justify-center mr-4">
                                    <span class="text-2xl font-bold text-blue-600">15</span>
                                    <span class="text-sm text-blue-600">Feb</span>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold">Parent-Teacher Meeting</h3>
                                    <p class="text-gray-600">2:00 PM - 5:00 PM</p>
                                </div>
                            </div>
                            <p class="text-gray-600">Join us for our quarterly parent-teacher meeting to discuss student progress and school developments.</p>
                        </div>
                    </div>

                    <!-- Event 2 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-16 h-16 bg-blue-100 rounded-lg flex flex-col items-center justify-center mr-4">
                                    <span class="text-2xl font-bold text-blue-600">28</span>
                                    <span class="text-sm text-blue-600">Feb</span>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold">Annual Sports Day</h3>
                                    <p class="text-gray-600">8:00 AM - 4:00 PM</p>
                                </div>
                            </div>
                            <p class="text-gray-600">A day filled with exciting sports competitions, team events, and athletic achievements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
