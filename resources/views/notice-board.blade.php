@extends('layouts.master')

@section('title', 'Notice Board - Uasin Gishu High School')

@section('content')


<!-- Hero Section -->
<div class="relative bg-[#22345b] py-20">
<div class="absolute inset-0 bg-cover bg-center" @style(["background-image: url('" . asset('assets/images/notice.jpg') . "')"])></div>
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
            <a href="{{ route('notice-board') }}" class="px-6 py-2 rounded-full {{ $category == 'all' ? 'bg-[#22345b] text-white' : 'bg-gray-100 text-[#22345b]' }} hover:bg-opacity-90 transition">All Updates</a>
            <a href="{{ route('notice-board.category', 'Academic') }}" class="px-6 py-2 rounded-full {{ $category == 'Academic' ? 'bg-[#22345b] text-white' : 'bg-gray-100 text-[#22345b]' }} hover:bg-gray-200 transition">Academic</a>
            <a href="{{ route('notice-board.category', 'Sports') }}" class="px-6 py-2 rounded-full {{ $category == 'Sports' ? 'bg-[#22345b] text-white' : 'bg-gray-100 text-[#22345b]' }} hover:bg-gray-200 transition">Sports</a>
            <a href="{{ route('notice-board.category', 'Cultural') }}" class="px-6 py-2 rounded-full {{ $category == 'Cultural' ? 'bg-[#22345b] text-white' : 'bg-gray-100 text-[#22345b]' }} hover:bg-gray-200 transition">Cultural</a>
            <a href="{{ route('notice-board.category', 'Administrative') }}" class="px-6 py-2 rounded-full {{ $category == 'Administrative' ? 'bg-[#22345b] text-white' : 'bg-gray-100 text-[#22345b]' }} hover:bg-gray-200 transition">Administrative</a>
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
                
                @if($featuredNotices->count() > 0)
                <!-- Featured Announcements -->
                @foreach($featuredNotices as $featuredNotice)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-8">
                    @if($featuredNotice->attachment)
                    <img src="{{ asset('storage/'.$featuredNotice->attachment) }}" alt="{{ $featuredNotice->title }}" class="w-full h-64 object-cover">
                    @endif
                    <div class="p-6">
                        <div class="flex items-center gap-4 mb-4">
                            <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-800 text-sm font-medium">Featured</span>
                            <span class="px-3 py-1 rounded-full bg-{{ $featuredNotice->category == 'Academic' ? 'blue-100 text-blue-800' : ($featuredNotice->category == 'Sports' ? 'green-100 text-green-800' : ($featuredNotice->category == 'Cultural' ? 'purple-100 text-purple-800' : 'gray-100 text-gray-800')) }} text-sm font-medium">{{ $featuredNotice->category }}</span>
                            <span class="text-gray-500 text-sm">Posted on {{ $featuredNotice->created_at->format('F d, Y') }}</span>
                        </div>
                        <h3 class="text-2xl font-bold text-[#22345b] mb-2">{{ $featuredNotice->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($featuredNotice->content, 200) }}</p>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('notice-board.show', $featuredNotice) }}" class="text-yellow-400 hover:text-yellow-500 font-medium">Read More →</a>
                            @if($featuredNotice->event_date)
                            <div class="text-sm text-gray-500">
                                <i class="far fa-calendar-alt mr-1"></i> Event: {{ $featuredNotice->event_date->format('F d, Y h:i A') }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

                <!-- Regular Updates -->
                <div class="space-y-6">
                    @forelse($notices as $notice)
                    <!-- Update Item -->
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <div class="flex items-center gap-4 mb-4">
                            <span class="px-3 py-1 rounded-full 
                                @if($notice->category == 'Academic') bg-blue-100 text-blue-800 
                                @elseif($notice->category == 'Sports') bg-green-100 text-green-800 
                                @elseif($notice->category == 'Cultural') bg-purple-100 text-purple-800 
                                @else bg-gray-100 text-gray-800 
                                @endif
                                text-sm font-medium">{{ $notice->category }}</span>
                            <span class="text-gray-500 text-sm">{{ $notice->created_at->format('F d, Y') }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#22345b] mb-2">{{ $notice->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($notice->content, 150) }}</p>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('notice-board.show', $notice) }}" class="text-yellow-400 hover:text-yellow-500 font-medium">View Details →</a>
                            @if($notice->event_date)
                            <div class="text-sm text-gray-500">
                                <i class="far fa-calendar-alt mr-1"></i> Event: {{ $notice->event_date->format('F d, Y h:i A') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    @empty
                    <div class="bg-white rounded-xl shadow-md p-6 text-center">
                        <p class="text-gray-600">No notices found in this category.</p>
                    </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                <div class="mt-8">
                    {{ $notices->links() }}
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
                        @forelse($upcomingEvents as $event)
                        <!-- Event Item -->
                        <div class="flex items-start gap-4">
                            <div class="bg-gray-100 rounded-lg p-2 text-center min-w-[60px]">
                                <span class="block text-sm text-gray-600">{{ $event->event_date->format('M') }}</span>
                                <span class="block text-xl font-bold text-[#22345b]">{{ $event->event_date->format('d') }}</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-[#22345b]">{{ $event->title }}</h4>
                                <p class="text-sm text-gray-600">{{ $event->event_date->format('g:i A') }} - {{ $event->category }}</p>
                                <a href="{{ route('notice-board.show', $event) }}" class="text-sm text-yellow-400 hover:text-yellow-500">More Info →</a>
                            </div>
                        </div>
                        @empty
                        <div class="text-center py-4">
                            <p class="text-gray-500">No upcoming events scheduled.</p>
                        </div>
                        @endforelse
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

