@extends('layouts.app')

@section('title', 'Our History')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-blue-600 text-white py-16">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-4">Our History</h1>
            <p class="text-xl">A Legacy of Excellence in Education</p>
        </div>
    </div>

    <!-- History Timeline -->
    <div class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <!-- Foundation -->
                <div class="mb-12">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-blue-600 font-bold">1980</span>
                        </div>
                        <h2 class="text-2xl font-bold">Foundation</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Upper Green Hill School was established with a vision to provide quality education that nurtures both academic excellence and character development. The school started with just two classrooms and a handful of dedicated teachers.</p>
                </div>

                <!-- Growth Period -->
                <div class="mb-12">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-blue-600 font-bold">1990</span>
                        </div>
                        <h2 class="text-2xl font-bold">Growth & Development</h2>
                    </div>
                    <p class="text-gray-600 mb-4">The school expanded significantly, adding new facilities including a library, science laboratories, and sports fields. This period also saw the introduction of our distinctive stream system.</p>
                </div>

                <!-- Modern Era -->
                <div class="mb-12">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-blue-600 font-bold">2000</span>
                        </div>
                        <h2 class="text-2xl font-bold">Modern Era</h2>
                    </div>
                    <p class="text-gray-600 mb-4">The turn of the millennium marked our transition into a modern educational institution. We integrated technology into our curriculum and established partnerships with international schools.</p>
                </div>

                <!-- Recent Achievements -->
                <div class="mb-12">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-blue-600 font-bold">2020</span>
                        </div>
                        <h2 class="text-2xl font-bold">Recent Achievements</h2>
                    </div>
                    <p class="text-gray-600 mb-4">In recent years, UGHS has achieved numerous accolades in academics, sports, and cultural activities. Our commitment to holistic education continues to shape future leaders.</p>
                </div>
            </div>

            <!-- Key Milestones -->
            <div class="mt-16">
                <h2 class="text-3xl font-bold mb-8 text-center">Key Milestones</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-4xl font-bold text-blue-600 mb-4">500+</div>
                        <h3 class="font-bold mb-2">Graduates</h3>
                        <p class="text-gray-600">Successfully graduated students who have gone on to prestigious universities</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-4xl font-bold text-blue-600 mb-4">50+</div>
                        <h3 class="font-bold mb-2">Awards</h3>
                        <p class="text-gray-600">National and international awards in various fields</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-4xl font-bold text-blue-600 mb-4">40+</div>
                        <h3 class="font-bold mb-2">Years</h3>
                        <p class="text-gray-600">Of excellence in education and character building</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
