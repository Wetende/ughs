@extends('layouts.guest')
@include('partials.navigation')

@section('body')
<!-- Hero Section -->
<div class="relative bg-[#22345b] py-20">
<div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/images/notice.jpg') }}');"></div>
    <div class="container mx-auto px-4">
        <div class="text-center text-white">
            <h1 class="text-5xl font-bold mb-4">Notice Board</h1>
            <p class="text-xl opacity-90 max-w-2xl mx-auto">Stay updated with the latest news, announcements, and upcoming events at Uasin Gishu High School.</p>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-white to-transparent"></div>
</div>

<!-- Quick Filters -->
<div class="bg-white border-b">
    <div class="container mx-auto px-4 py-4">
        <div class="flex flex-wrap gap-4 justify-center">
            <button class="px-6 py-2 rounded-full bg-[#22345b] text-white hover:bg-opacity-90 transition">All Updates</button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-[#22345b] hover:bg-gray-200 transition">Academic</button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-[#22345b] hover:bg-gray-200 transition">Sports</button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-[#22345b] hover:bg-gray-200 transition">Cultural</button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-[#22345b] hover:bg-gray-200 transition">Administrative</button>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- News & Announcements Column -->
            <div class="lg:col-span-2 space-y-8">
                <h2 class="text-3xl font-bold text-[#22345b] mb-6">Latest Updates</h2>
                
                <!-- Featured Announcement -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <img src="path/to/featured-image.jpg" alt="Featured announcement" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <div class="flex items-center gap-4 mb-4">
                            <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-800 text-sm font-medium">Featured</span>
                            <span class="text-gray-500 text-sm">Posted on February 5, 2025</span>
                        </div>
                        <h3 class="text-2xl font-bold text-[#22345b] mb-2">Annual Sports Day Announcement</h3>
                        <p class="text-gray-600 mb-4">Join us for our annual sports day celebration featuring inter-house competitions, athletic events, and special performances by our students.</p>
                        <a href="#" class="text-yellow-400 hover:text-yellow-500 font-medium">Read More →</a>
                    </div>
                </div>

                <!-- Regular Updates -->
                <div class="space-y-6">
                    <!-- Update Item -->
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <div class="flex items-center gap-4 mb-4">
                            <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-800 text-sm font-medium">Academic</span>
                            <span class="text-gray-500 text-sm">February 3, 2025</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#22345b] mb-2">Form Four Mock Examination Schedule</h3>
                        <p class="text-gray-600 mb-4">The mock examination timetable has been released. Please check the schedule and prepare accordingly.</p>
                        <a href="#" class="text-yellow-400 hover:text-yellow-500 font-medium">View Details →</a>
                    </div>

                    <!-- Update Item -->
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <div class="flex items-center gap-4 mb-4">
                            <span class="px-3 py-1 rounded-full bg-green-100 text-green-800 text-sm font-medium">Cultural</span>
                            <span class="text-gray-500 text-sm">February 2, 2025</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#22345b] mb-2">Drama Club Performance</h3>
                        <p class="text-gray-600 mb-4">The drama club will be presenting their annual performance next week. Don't miss this spectacular show!</p>
                        <a href="#" class="text-yellow-400 hover:text-yellow-500 font-medium">Learn More →</a>
                    </div>

                    <!-- Update Item -->
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <div class="flex items-center gap-4 mb-4">
                            <span class="px-3 py-1 rounded-full bg-purple-100 text-purple-800 text-sm font-medium">Administrative</span>
                            <span class="text-gray-500 text-sm">February 1, 2025</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#22345b] mb-2">School Fees Update</h3>
                        <p class="text-gray-600 mb-4">Important information regarding the school fees structure for the upcoming term.</p>
                        <a href="#" class="text-yellow-400 hover:text-yellow-500 font-medium">Read More →</a>
                    </div>
                </div>

                <!-- Load More Button -->
                <div class="text-center mt-8">
                    <button class="bg-[#22345b] text-white px-8 py-3 rounded-lg hover:bg-opacity-90 transition">Load More Updates</button>
                </div>
            </div>

            <!-- Calendar & Events Column -->
            <div class="space-y-8">
                <h2 class="text-3xl font-bold text-[#22345b] mb-6">Upcoming Events</h2>

                <!-- Calendar Widget -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="mb-6">
                        <!-- Calendar will be implemented with JavaScript -->
                        <div class="calendar-placeholder bg-gray-50 h-64 rounded-lg flex items-center justify-center">
                            <span class="text-gray-400">Calendar Widget</span>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Events List -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-xl font-bold text-[#22345b] mb-4">This Month's Events</h3>
                    <div class="space-y-4">
                        <!-- Event Item -->
                        <div class="flex items-start gap-4">
                            <div class="bg-gray-100 rounded-lg p-2 text-center min-w-[60px]">
                                <span class="block text-sm text-gray-600">FEB</span>
                                <span class="block text-xl font-bold text-[#22345b]">10</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-[#22345b]">Parents' Meeting</h4>
                                <p class="text-sm text-gray-600">2:00 PM - Main Hall</p>
                                <a href="#" class="text-sm text-yellow-400 hover:text-yellow-500">Register →</a>
                            </div>
                        </div>

                        <!-- Event Item -->
                        <div class="flex items-start gap-4">
                            <div class="bg-gray-100 rounded-lg p-2 text-center min-w-[60px]">
                                <span class="block text-sm text-gray-600">FEB</span>
                                <span class="block text-xl font-bold text-[#22345b]">15</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-[#22345b]">Science Fair</h4>
                                <p class="text-sm text-gray-600">9:00 AM - Science Block</p>
                                <a href="#" class="text-sm text-yellow-400 hover:text-yellow-500">More Info →</a>
                            </div>
                        </div>

                        <!-- Event Item -->
                        <div class="flex items-start gap-4">
                            <div class="bg-gray-100 rounded-lg p-2 text-center min-w-[60px]">
                                <span class="block text-sm text-gray-600">FEB</span>
                                <span class="block text-xl font-bold text-[#22345b]">20</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-[#22345b]">Sports Day</h4>
                                <p class="text-sm text-gray-600">8:00 AM - Sports Ground</p>
                                <a href="#" class="text-sm text-yellow-400 hover:text-yellow-500">View Schedule →</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-xl font-bold text-[#22345b] mb-4">Quick Links</h3>
                    <div class="space-y-3">
                        <a href="#" class="block p-3 bg-gray-50 rounded-lg text-[#22345b] hover:bg-gray-100 transition">
                            <i class="fas fa-calendar-alt text-[#1b5454] mr-2"></i>
                            Academic Calendar
                        </a>
                        <a href="#" class="block p-3 bg-gray-50 rounded-lg text-[#22345b] hover:bg-gray-100 transition">
                            <i class="fas fa-book text-[#1b5454] mr-2"></i>
                            Exam Timetable
                        </a>
                        <a href="#" class="block p-3 bg-gray-50 rounded-lg text-[#22345b] hover:bg-gray-100 transition">
                            <i class="fas fa-trophy text-[#1b5454] mr-2"></i>
                            Sports Schedule
                        </a>
                        <a href="#" class="block p-3 bg-gray-50 rounded-lg text-[#22345b] hover:bg-gray-100 transition">
                            <i class="fas fa-bullhorn text-[#1b5454] mr-2"></i>
                            Club Activities
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter Subscription -->
<div class="bg-white py-12">
    <div class="container mx-auto px-4 max-w-2xl text-center">
        <h2 class="text-2xl font-bold text-[#22345b] mb-4">Stay Updated</h2>
        <p class="text-gray-600 mb-6">Subscribe to our newsletter to receive the latest news and updates directly in your inbox.</p>
        <form class="flex gap-4">
            <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
            <button type="submit" class="bg-yellow-400 text-[#22345b] px-8 py-3 rounded-lg hover:bg-yellow-500 transition">Subscribe</button>
        </form>
    </div>
</div>
@endsection
