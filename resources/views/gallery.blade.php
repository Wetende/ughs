@extends('layouts.master')

@section('title', 'Gallery - UGHS')

@section('content')
<!-- Hero Section -->
<div class="relative h-[300px] md:h-[400px] bg-gradient-to-r from-[#1b5454] to-[#023D54]">
    <div class="absolute inset-0">
        <div class="bg-black opacity-50 absolute inset-0"></div>
        <div class="container mx-auto px-4 h-full flex items-center relative z-10">
            <div class="text-white max-w-3xl">
                <h1 class="text-3xl md:text-5xl font-bold mb-4">School Gallery</h1>
                <p class="text-xl md:text-2xl font-light">Capturing moments and memories at UGHS</p>
            </div>
        </div>
    </div>
</div>

<!-- Gallery Categories -->
<div class="py-12 md:py-16">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="px-6 py-2 rounded-full bg-[#1b5454] text-white hover:bg-[#023D54] transition active" data-category="all">
                All
            </button>
            <button class="px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-[#1b5454] hover:text-white transition" data-category="facilities">
                Facilities
            </button>
            <button class="px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-[#1b5454] hover:text-white transition" data-category="events">
                Events
            </button>
            <button class="px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-[#1b5454] hover:text-white transition" data-category="sports">
                Sports
            </button>
            <button class="px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-[#1b5454] hover:text-white transition" data-category="academic">
                Academic
            </button>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Facilities -->
            <div class="gallery-item" data-category="facilities">
                <div class="relative group rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/gallery/library.jpg') }}" alt="School Library" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <h3 class="text-xl font-bold mb-2">Modern Library</h3>
                            <p class="text-sm">Our well-equipped library facility</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery-item" data-category="facilities">
                <div class="relative group rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/gallery/lab.jpg') }}" alt="Science Laboratory" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <h3 class="text-xl font-bold mb-2">Science Lab</h3>
                            <p class="text-sm">State-of-the-art laboratory facilities</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Events -->
            <div class="gallery-item" data-category="events">
                <div class="relative group rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/gallery/graduation.jpg') }}" alt="Graduation Ceremony" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <h3 class="text-xl font-bold mb-2">Graduation 2023</h3>
                            <p class="text-sm">Celebrating our graduates</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sports -->
            <div class="gallery-item" data-category="sports">
                <div class="relative group rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/gallery/sports.jpg') }}" alt="Sports Activities" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <h3 class="text-xl font-bold mb-2">Sports Day</h3>
                            <p class="text-sm">Annual athletics competition</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Academic -->
            <div class="gallery-item" data-category="academic">
                <div class="relative group rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/gallery/classroom.jpg') }}" alt="Classroom Session" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <h3 class="text-xl font-bold mb-2">Learning Environment</h3>
                            <p class="text-sm">Interactive classroom sessions</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add more gallery items as needed -->
        </div>
    </div>
</div>

@push('styles')
<style>
    .gallery-item {
        transition: all 0.3s ease;
    }
    .gallery-item.hidden {
        display: none;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('[data-category]');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => {
                    btn.classList.remove('bg-[#1b5454]', 'text-white');
                    btn.classList.add('bg-gray-200', 'text-gray-700');
                });

                // Add active class to clicked button
                button.classList.remove('bg-gray-200', 'text-gray-700');
                button.classList.add('bg-[#1b5454]', 'text-white');

                const category = button.dataset.category;

                galleryItems.forEach(item => {
                    if (category === 'all' || item.dataset.category === category) {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                });
            });
        });
    });
</script>
@endpush
@endsection
