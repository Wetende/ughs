@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-blue-600 text-white py-16">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-4">About Our School</h1>
            <p class="text-xl">Building Tomorrow's Leaders Today</p>
        </div>
    </div>

    <!-- History Section -->
    <div class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-4">Our History</h2>
                    <p class="text-gray-600 mb-4">
                        Founded in [Year], our school has been committed to providing quality education to students for over [X] years. 
                        We have grown from a small institution to one of the most respected educational establishments in the region.
                    </p>
                    <p class="text-gray-600">
                        Throughout our history, we have maintained our commitment to academic excellence while adapting to meet 
                        the changing needs of our students and community.
                    </p>
                </div>
                <div class="bg-gray-200 h-64 rounded-lg">
                    <!-- Placeholder for school image -->
                    <div class="w-full h-full flex items-center justify-center text-gray-500">
                        School Image
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mission & Vision -->
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold mb-4">Our Mission</h3>
                    <p class="text-gray-600">
                        To provide a nurturing environment that encourages academic excellence, personal growth, 
                        and social responsibility, preparing students to become lifelong learners and responsible citizens.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold mb-4">Our Vision</h3>
                    <p class="text-gray-600">
                        To be a leading educational institution that inspires and empowers students to achieve their full potential 
                        and make positive contributions to society.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Values -->
    <div class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center">Our Core Values</h2>
            <div class="grid md:grid-cols-4 gap-6">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-book text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="font-bold mb-2">Excellence</h3>
                    <p class="text-gray-600">Striving for the highest standards in everything we do</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="font-bold mb-2">Integrity</h3>
                    <p class="text-gray-600">Acting with honesty and strong moral principles</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heart text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="font-bold mb-2">Respect</h3>
                    <p class="text-gray-600">Treating everyone with dignity and understanding</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-lightbulb text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="font-bold mb-2">Innovation</h3>
                    <p class="text-gray-600">Embracing new ideas and approaches to learning</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Leadership Team -->
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center">Our Leadership Team</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="w-32 h-32 bg-gray-200 rounded-full mx-auto mb-4">
                        <!-- Principal's photo placeholder -->
                    </div>
                    <h3 class="font-bold text-xl mb-2">Dr. John Doe</h3>
                    <p class="text-blue-600 mb-2">Principal</p>
                    <p class="text-gray-600">Ph.D. in Education Leadership</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="w-32 h-32 bg-gray-200 rounded-full mx-auto mb-4">
                        <!-- Vice Principal's photo placeholder -->
                    </div>
                    <h3 class="font-bold text-xl mb-2">Jane Smith</h3>
                    <p class="text-blue-600 mb-2">Vice Principal</p>
                    <p class="text-gray-600">M.Ed. in Educational Administration</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="w-32 h-32 bg-gray-200 rounded-full mx-auto mb-4">
                        <!-- Academic Director's photo placeholder -->
                    </div>
                    <h3 class="font-bold text-xl mb-2">Robert Johnson</h3>
                    <p class="text-blue-600 mb-2">Academic Director</p>
                    <p class="text-gray-600">M.Sc. in Curriculum Development</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
