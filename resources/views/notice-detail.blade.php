@extends('layouts.master')

@section('title', $notice->title . ' - Uasin Gishu High School')

@section('content')
<!-- Hero Section -->
<div class="relative bg-[#22345b] py-16">
    <div class="absolute inset-0 bg-cover bg-center opacity-20" @style(["background-image: url('" . asset('assets/images/notice.jpg') . "')"])></div>
    <div class="container mx-auto px-4">
        <div class="text-center text-white">
            <h1 class="text-4xl font-bold mb-2">{{ $notice->title }}</h1>
            <div class="flex items-center justify-center gap-3 mt-4">
                <span class="px-3 py-1 rounded-full 
                    @if($notice->category == 'Academic') bg-blue-100 text-blue-800 
                    @elseif($notice->category == 'Sports') bg-green-100 text-green-800 
                    @elseif($notice->category == 'Cultural') bg-purple-100 text-purple-800 
                    @else bg-gray-100 text-gray-800 
                    @endif
                    text-sm font-medium">{{ $notice->category }}</span>
                <span class="text-gray-200 text-sm">Posted on {{ $notice->created_at->format('F d, Y') }}</span>
                @if($notice->is_featured)
                    <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-800 text-sm font-medium">Featured</span>
                @endif
                @if($notice->is_important)
                    <span class="px-3 py-1 rounded-full bg-red-100 text-red-800 text-sm font-medium">Important</span>
                @endif
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-white to-transparent"></div>
</div>

<!-- Main Content -->
<div class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Notice Content Column -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    @if($notice->attachment)
                    <img src="{{ asset('storage/'.$notice->attachment) }}" alt="{{ $notice->title }}" class="w-full h-64 object-cover">
                    @endif
                    <div class="p-8">
                        <div class="prose max-w-none">
                            {!! nl2br(e($notice->content)) !!}
                        </div>
                        
                        @if($notice->attachment)
                        <div class="mt-8 p-4 bg-gray-50 rounded-lg">
                            <h3 class="text-lg font-semibold text-[#22345b] mb-2">Attachments</h3>
                            <a href="{{ asset('storage/'.$notice->attachment) }}" target="_blank" class="flex items-center gap-2 text-blue-600 hover:text-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Download Attachment
                            </a>
                        </div>
                        @endif
                        
                        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <h3 class="text-sm font-semibold text-gray-500 mb-1">Start Date</h3>
                                <p class="text-[#22345b] font-medium">{{ \Carbon\Carbon::parse($notice->start_date)->format('F d, Y') }}</p>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <h3 class="text-sm font-semibold text-gray-500 mb-1">End Date</h3>
                                <p class="text-[#22345b] font-medium">{{ \Carbon\Carbon::parse($notice->stop_date)->format('F d, Y') }}</p>
                            </div>
                            @if($notice->event_date)
                            <div class="p-4 bg-gray-50 rounded-lg md:col-span-2">
                                <h3 class="text-sm font-semibold text-gray-500 mb-1">Event Date & Time</h3>
                                <p class="text-[#22345b] font-medium">{{ $notice->event_date->format('F d, Y h:i A') }}</p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                
                <div class="mt-6">
                    <a href="{{ route('notice-board') }}" class="inline-flex items-center text-[#22345b] hover:text-[#1b5454]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Back to Notice Board
                    </a>
                </div>
            </div>
            
            <!-- Sidebar Column -->
            <div class="space-y-8">
                <!-- Related Notices -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-xl font-bold text-[#22345b] mb-4">Related Notices</h3>
                    <div class="space-y-4">
                        @forelse($relatedNotices as $relatedNotice)
                        <div class="border-b border-gray-100 pb-4 last:border-0 last:pb-0">
                            <h4 class="font-semibold text-[#22345b] hover:text-[#1b5454]">
                                <a href="{{ route('notice-board.show', $relatedNotice) }}">{{ $relatedNotice->title }}</a>
                            </h4>
                            <p class="text-sm text-gray-600 mt-1">{{ Str::limit($relatedNotice->content, 80) }}</p>
                            <div class="flex items-center gap-2 mt-2">
                                <span class="text-xs text-gray-500">{{ $relatedNotice->created_at->format('M d, Y') }}</span>
                                <span class="px-2 py-0.5 rounded-full text-xs 
                                    @if($relatedNotice->category == 'Academic') bg-blue-100 text-blue-800 
                                    @elseif($relatedNotice->category == 'Sports') bg-green-100 text-green-800 
                                    @elseif($relatedNotice->category == 'Cultural') bg-purple-100 text-purple-800 
                                    @else bg-gray-100 text-gray-800 
                                    @endif">
                                    {{ $relatedNotice->category }}
                                </span>
                            </div>
                        </div>
                        @empty
                        <div class="text-center py-4">
                            <p class="text-gray-500">No related notices found.</p>
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
                
                <!-- Share Notice -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-xl font-bold text-[#22345b] mb-4">Share This Notice</h3>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center hover:bg-blue-700">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-blue-400 text-white flex items-center justify-center hover:bg-blue-500">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-green-600 text-white flex items-center justify-center hover:bg-green-700">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-red-600 text-white flex items-center justify-center hover:bg-red-700">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 