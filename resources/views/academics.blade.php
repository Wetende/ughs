@extends('layouts.app')

@section('title', 'Academics')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-blue-600 text-white py-16">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-4">Academic Excellence</h1>
            <p class="text-xl">Providing Quality Education at Every Level</p>
        </div>
    </div>

    <!-- Academic Programs -->
    <div class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8">Our Academic Programs</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Primary School -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-48 bg-gray-200">
                        <!-- Program image placeholder -->
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Primary School</h3>
                        <p class="text-gray-600 mb-4">Grades 1-6</p>
                        <ul class="list-disc list-inside text-gray-600">
                            <li>Foundation in core subjects</li>
                            <li>Hands-on learning activities</li>
                            <li>Character development</li>
                            <li>Creative arts and music</li>
                        </ul>
                        <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Learn more →</a>
                    </div>
                </div>

                <!-- Junior High -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-48 bg-gray-200">
                        <!-- Program image placeholder -->
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Junior High School</h3>
                        <p class="text-gray-600 mb-4">Grades 7-9</p>
                        <ul class="list-disc list-inside text-gray-600">
                            <li>Advanced core curriculum</li>
                            <li>Science and technology focus</li>
                            <li>Sports and athletics</li>
                            <li>Leadership opportunities</li>
                        </ul>
                        <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Learn more →</a>
                    </div>
                </div>

                <!-- Senior High -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-48 bg-gray-200">
                        <!-- Program image placeholder -->
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Senior High School</h3>
                        <p class="text-gray-600 mb-4">Grades 10-12</p>
                        <ul class="list-disc list-inside text-gray-600">
                            <li>College preparation</li>
                            <li>Advanced placement courses</li>
                            <li>Career guidance</li>
                            <li>Research programs</li>
                        </ul>
                        <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Learn more →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Curriculum -->
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8">Our Curriculum</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">Core Subjects</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h4 class="font-bold mb-2">Mathematics</h4>
                            <p class="text-gray-600">Advanced math concepts and problem-solving skills</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h4 class="font-bold mb-2">Science</h4>
                            <p class="text-gray-600">Physics, Chemistry, and Biology with lab work</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h4 class="font-bold mb-2">English</h4>
                            <p class="text-gray-600">Literature, writing, and communication skills</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h4 class="font-bold mb-2">Social Studies</h4>
                            <p class="text-gray-600">History, Geography, and Civic Education</p>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-4">Elective Subjects</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h4 class="font-bold mb-2">Computer Science</h4>
                            <p class="text-gray-600">Programming and digital literacy</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h4 class="font-bold mb-2">Fine Arts</h4>
                            <p class="text-gray-600">Visual arts, music, and performing arts</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h4 class="font-bold mb-2">Physical Education</h4>
                            <p class="text-gray-600">Sports, fitness, and health education</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h4 class="font-bold mb-2">Languages</h4>
                            <p class="text-gray-600">French, Spanish, and Mandarin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Academic Calendar -->
    <div class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8">Academic Calendar</h2>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="grid md:grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-xl font-bold mb-4">First Term</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li>• Start: September 1, 2024</li>
                            <li>• Mid-term Break: October 15-19</li>
                            <li>• End: December 15, 2024</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-4">Second Term</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li>• Start: January 8, 2025</li>
                            <li>• Mid-term Break: February 19-23</li>
                            <li>• End: April 5, 2025</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-4">Third Term</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li>• Start: April 22, 2025</li>
                            <li>• Mid-term Break: June 1-5</li>
                            <li>• End: July 15, 2025</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Academic Support -->
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8">Academic Support</h2>
            <div class="grid md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-book text-blue-600"></i>
                    </div>
                    <h3 class="font-bold mb-2">Library Resources</h3>
                    <p class="text-gray-600">Access to extensive digital and physical library resources</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-users text-blue-600"></i>
                    </div>
                    <h3 class="font-bold mb-2">Study Groups</h3>
                    <p class="text-gray-600">Peer-led study groups and collaborative learning</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-chalkboard-teacher text-blue-600"></i>
                    </div>
                    <h3 class="font-bold mb-2">Tutoring</h3>
                    <p class="text-gray-600">One-on-one tutoring and academic guidance</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-laptop text-blue-600"></i>
                    </div>
                    <h3 class="font-bold mb-2">Online Resources</h3>
                    <p class="text-gray-600">Access to digital learning platforms and resources</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
