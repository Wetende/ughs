@extends('layouts.master')

@section('title', 'School Gallery - UGHS')
@section('content')
<!-- Hero Section -->
<div class="relative bg-[#22345b] py-20">
    <div class="container mx-auto px-4">
        <div class="text-center text-white">
            <h1 class="text-5xl font-bold mb-4">School Gallery</h1>
            <p class="text-xl opacity-90 max-w-2xl mx-auto">Explore the vibrant life at Uasin Gishu High School through our photo gallery.</p>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent"></div>
</div>

<!-- Gallery Categories -->
<div class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="px-6 py-2 rounded-full bg-[#22345b] text-white hover:bg-opacity-90 transition filter-btn active" data-category="all">
                All Photos
            </button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-[#22345b] hover:bg-[#22345b] hover:text-white transition filter-btn" data-category="facilities">
                Facilities
            </button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-[#22345b] hover:bg-[#22345b] hover:text-white transition filter-btn" data-category="events">
                Events
            </button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-[#22345b] hover:bg-[#22345b] hover:text-white transition filter-btn" data-category="sports">
                Sports
            </button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-[#22345b] hover:bg-[#22345b] hover:text-white transition filter-btn" data-category="academic">
                Academic
            </button>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Facilities -->
            <div class="gallery-item" data-category="facilities">
                <div class="relative group rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/gallery/library.jpg') }}" alt="Modern Library" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <h3 class="text-xl font-bold mb-2">Modern Library</h3>
                            <p class="text-sm">State-of-the-art learning facility</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery-item" data-category="facilities">
                <div class="relative group rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/gallery/science-lab.jpg') }}" alt="Science Laboratory" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <h3 class="text-xl font-bold mb-2">Science Laboratory</h3>
                            <p class="text-sm">Equipped with modern research facilities</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery-item" data-category="facilities">
                <div class="relative group rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/gallery/computer-lab.jpg') }}" alt="Computer Laboratory" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <h3 class="text-xl font-bold mb-2">Computer Laboratory</h3>
                            <p class="text-sm">Digital learning environment</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Events -->
            <div class="gallery-item" data-category="events">
                <div class="relative group rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/gallery/cultural-day.jpg') }}" alt="Cultural Day" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <h3 class="text-xl font-bold mb-2">Cultural Day</h3>
                            <p class="text-sm">Celebrating our diverse heritage</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery-item" data-category="events">
                <div class="relative group rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/gallery/graduation.jpg') }}" alt="Graduation Ceremony" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <h3 class="text-xl font-bold mb-2">Graduation Ceremony</h3>
                            <p class="text-sm">Celebrating student achievements</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery-item" data-category="events">
                <div class="relative group rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/gallery/parents-day.jpg') }}" alt="Parents Day" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <h3 class="text-xl font-bold mb-2">Parents Day</h3>
                            <p class="text-sm">Building strong school-parent relationships</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sports -->
            <div class="gallery-item" data-category="sports">
                <div class="relative group rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/gallery/football.jpg') }}" alt="Football Match" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <h3 class="text-xl font-bold mb-2">Football Match</h3>
                            <p class="text-sm">Inter-school championship</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery-item" data-category="sports">
                <div class="relative group rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/gallery/athletics.jpg') }}" alt="Athletics Meet" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <h3 class="text-xl font-bold mb-2">Athletics Meet</h3>
                            <p class="text-sm">Annual sports competition</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery-item" data-category="sports">
                <div class="relative group rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/gallery/basketball.jpg') }}" alt="Basketball Tournament" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <h3 class="text-xl font-bold mb-2">Basketball Tournament</h3>
                            <p class="text-sm">Regional championship games</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Academic -->
            <div class="gallery-item" data-category="academic">
                <div class="relative group rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/gallery/science-fair.jpg') }}" alt="Science Fair" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <h3 class="text-xl font-bold mb-2">Science Fair</h3>
                            <p class="text-sm">Student research projects</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery-item" data-category="academic">
                <div class="relative group rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/gallery/debate.jpg') }}" alt="Debate Competition" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <h3 class="text-xl font-bold mb-2">Debate Competition</h3>
                            <p class="text-sm">Fostering critical thinking</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery-item" data-category="academic">
                <div class="relative group rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/images/gallery/robotics.jpg') }}" alt="Robotics Club" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <h3 class="text-xl font-bold mb-2">Robotics Club</h3>
                            <p class="text-sm">Innovation and technology</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        // Show all items initially
        galleryItems.forEach(item => {
            item.style.display = 'block';
        });

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const selectedCategory = this.getAttribute('data-category');
                
                // Update button styles
                filterButtons.forEach(btn => {
                    if (btn === this) {
                        btn.classList.remove('bg-gray-100', 'text-[#22345b]');
                        btn.classList.add('bg-[#22345b]', 'text-white');
                    } else {
                        btn.classList.remove('bg-[#22345b]', 'text-white');
                        btn.classList.add('bg-gray-100', 'text-[#22345b]');
                    }
                });

                // Filter gallery items
                galleryItems.forEach(item => {
                    const itemCategory = item.getAttribute('data-category');
                    
                    if (selectedCategory === 'all' || selectedCategory === itemCategory) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.classList.add('opacity-100', 'scale-100');
                            item.classList.remove('opacity-0', 'scale-95');
                        }, 0);
                    } else {
                        item.classList.add('opacity-0', 'scale-95');
                        item.classList.remove('opacity-100', 'scale-100');
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300); // Match this with the CSS transition duration
                    }
                });
            });
        });
    });
</script>
@endpush

@push('styles')
<style>
    .gallery-item {
        transition: all 0.3s ease-in-out;
    }
    
    .opacity-0 {
        opacity: 0;
    }
    
    .opacity-100 {
        opacity: 1;
    }
    
    .scale-95 {
        transform: scale(0.95);
    }
    
    .scale-100 {
        transform: scale(1);
    }
</style>
@endpush
@endsection
