@extends('layouts.master')

@section('title', 'News & Events - UGHS')

@section('content')
<!-- Hero Section -->
<div class="relative w-full min-h-[50vh] md:min-h-[60vh] bg-white">
    <div class="absolute inset-0 bg-cover bg-center transition-all duration-700" 
         style="background-image: url('{{ asset('assets/images/news-events.jpg') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-[#1b5454]/90 to-[#023D54]/90"></div>
    </div>
    <div class="relative h-full w-full flex items-center z-10">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-white max-w-4xl">
                <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold mb-4">News & Events</h1>
                <p class="text-lg md:text-xl lg:text-2xl mb-8">Stay updated with the latest happenings at Uasin Gishu High School</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#latest-news" class="inline-flex items-center px-6 py-3 bg-yellow-400 text-[#22345b] rounded-lg hover:bg-yellow-300 transition-all duration-300">Latest News</a>
                    <a href="#upcoming-events" class="inline-flex items-center px-6 py-3 bg-white text-[#1b5454] rounded-lg hover:bg-gray-100 transition-all duration-300">Upcoming Events</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Latest News Section -->
<div id="latest-news" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-blue-900 mb-4">Latest News</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto mb-8"></div>
            <p class="text-xl text-gray-600">Keep up with our school's achievements and activities</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Featured News Item -->
            <div class="col-span-full md:col-span-2 bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
                <div class="relative h-96 md:h-[500px]">
                    <img src="{{ asset('assets/images/academic-excellence.jpg') }}" alt="Academic Excellence" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                        <span class="bg-yellow-500 text-white px-4 py-1 rounded-full text-sm font-semibold mb-4 inline-block">Featured</span>
                        <h3 class="text-3xl font-bold mb-4">Outstanding KCSE Performance</h3>
                        <p class="text-lg mb-4">Our students achieve remarkable results in the 2024 KCSE examinations, with over 80% qualifying for university admission.</p>
                        <div class="flex items-center">
                            <span class="mr-4"><i class="fas fa-calendar-alt mr-2"></i>February 1, 2025</span>
                            <a href="#" class="text-yellow-500 hover:text-yellow-400">Read More →</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent News Items -->
            <div class="space-y-8">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
                    <img src="{{ asset('assets/images/sports-day.jpg') }}" alt="Sports Day" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">Sports</span>
                        <h3 class="text-xl font-bold text-blue-900 mt-4 mb-2">Annual Sports Day Success</h3>
                        <p class="text-gray-600 mb-4">Students showcase exceptional athletic abilities in various sports competitions.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="mr-4"><i class="fas fa-calendar-alt mr-2"></i>January 28, 2025</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
                    <img src="{{ asset('assets/images/science-fair.jpg') }}" alt="Science Fair" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">Academics</span>
                        <h3 class="text-xl font-bold text-blue-900 mt-4 mb-2">Science Fair Winners</h3>
                        <p class="text-gray-600 mb-4">Our students win top prizes at the County Science Fair Competition.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="mr-4"><i class="fas fa-calendar-alt mr-2"></i>January 25, 2025</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- News Grid -->
        <div class="grid md:grid-cols-3 gap-8 mt-12">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
                <img src="{{ asset('assets/images/drama-club.jpg') }}" alt="Drama Performance" class="w-full h-48 object-cover">
                <div class="p-6">
                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-semibold">Arts</span>
                    <h3 class="text-xl font-bold text-blue-900 mt-4 mb-2">Drama Club Performance</h3>
                    <p class="text-gray-600 mb-4">Students deliver an outstanding performance at the annual drama festival.</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="mr-4"><i class="fas fa-calendar-alt mr-2"></i>January 20, 2025</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
                <img src="{{ asset('assets/images/community-service.jpg') }}" alt="Community Service" class="w-full h-48 object-cover">
                <div class="p-6">
                    <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-semibold">Community</span>
                    <h3 class="text-xl font-bold text-blue-900 mt-4 mb-2">Community Outreach</h3>
                    <p class="text-gray-600 mb-4">Students participate in local community service projects.</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="mr-4"><i class="fas fa-calendar-alt mr-2"></i>January 15, 2025</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
                <img src="{{ asset('assets/images/music-festival.jpg') }}" alt="Music Festival" class="w-full h-48 object-cover">
                <div class="p-6">
                    <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-semibold">Music</span>
                    <h3 class="text-xl font-bold text-blue-900 mt-4 mb-2">Music Festival Success</h3>
                    <p class="text-gray-600 mb-4">School choir wins multiple awards at the regional music festival.</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="mr-4"><i class="fas fa-calendar-alt mr-2"></i>January 10, 2025</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Upcoming Events Section -->
<div id="upcoming-events" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-blue-900 mb-4">Upcoming Events</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto mb-8"></div>
            <p class="text-xl text-gray-600">Mark your calendar for these important dates</p>
        </div>

        <div class="max-w-5xl mx-auto">
            <!-- Timeline -->
            <div class="space-y-8">
                <!-- Event 1 -->
                <div class="bg-white rounded-xl shadow-lg p-6 transform hover:-translate-y-1 transition-all duration-300">
                    <div class="flex flex-col md:flex-row items-start md:items-center">
                        <div class="md:w-48 mb-4 md:mb-0">
                            <div class="bg-blue-100 text-blue-800 rounded-lg p-3 text-center">
                                <div class="text-2xl font-bold">FEB 15</div>
                                <div class="text-sm">2025</div>
                            </div>
                        </div>
                        <div class="flex-1 md:ml-8">
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Parent-Teacher Meeting</h3>
                            <p class="text-gray-600 mb-4">Annual meeting to discuss student progress and school development plans.</p>
                            <div class="flex flex-wrap gap-4">
                                <span class="flex items-center text-sm text-gray-500">
                                    <i class="fas fa-clock mr-2"></i>
                                    9:00 AM - 4:00 PM
                                </span>
                                <span class="flex items-center text-sm text-gray-500">
                                    <i class="fas fa-map-marker-alt mr-2"></i>
                                    School Hall
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="bg-white rounded-xl shadow-lg p-6 transform hover:-translate-y-1 transition-all duration-300">
                    <div class="flex flex-col md:flex-row items-start md:items-center">
                        <div class="md:w-48 mb-4 md:mb-0">
                            <div class="bg-green-100 text-green-800 rounded-lg p-3 text-center">
                                <div class="text-2xl font-bold">FEB 20</div>
                                <div class="text-sm">2025</div>
                            </div>
                        </div>
                        <div class="flex-1 md:ml-8">
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Inter-House Sports Competition</h3>
                            <p class="text-gray-600 mb-4">Annual sports competition between school houses.</p>
                            <div class="flex flex-wrap gap-4">
                                <span class="flex items-center text-sm text-gray-500">
                                    <i class="fas fa-clock mr-2"></i>
                                    8:00 AM - 5:00 PM
                                </span>
                                <span class="flex items-center text-sm text-gray-500">
                                    <i class="fas fa-map-marker-alt mr-2"></i>
                                    School Sports Ground
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event 3 -->
                <div class="bg-white rounded-xl shadow-lg p-6 transform hover:-translate-y-1 transition-all duration-300">
                    <div class="flex flex-col md:flex-row items-start md:items-center">
                        <div class="md:w-48 mb-4 md:mb-0">
                            <div class="bg-purple-100 text-purple-800 rounded-lg p-3 text-center">
                                <div class="text-2xl font-bold">MAR 5</div>
                                <div class="text-sm">2025</div>
                            </div>
                        </div>
                        <div class="flex-1 md:ml-8">
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Career Day</h3>
                            <p class="text-gray-600 mb-4">Professional speakers and alumni share career insights with students.</p>
                            <div class="flex flex-wrap gap-4">
                                <span class="flex items-center text-sm text-gray-500">
                                    <i class="fas fa-clock mr-2"></i>
                                    10:00 AM - 3:00 PM
                                </span>
                                <span class="flex items-center text-sm text-gray-500">
                                    <i class="fas fa-map-marker-alt mr-2"></i>
                                    School Auditorium
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter Section -->
<div class="py-16 bg-[#1b5454]">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h2 class="text-4xl font-bold mb-8">Stay Updated</h2>
            <p class="text-xl mb-8">Subscribe to our newsletter for the latest news and updates</p>
            <form class="max-w-md mx-auto">
                <div class="flex flex-col md:flex-row gap-4">
                    <input type="email" placeholder="Enter your email" class="flex-1 px-6 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    <button type="submit" class="bg-yellow-500 text-white px-8 py-3 rounded-lg hover:bg-yellow-600 transition">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
