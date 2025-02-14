@extends('layouts.master')

@section('title', 'Resources - UGHS')

@section('content')
<!-- Hero Section -->
<div class="relative w-full min-h-[50vh] md:min-h-[60vh] bg-white">
    <div class="absolute inset-0 bg-cover bg-center transition-all duration-700" 
         style="background-image: url('{{ asset('assets/images/resources.jpg') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-[#1b5454]/90 to-[#023D54]/90"></div>
    </div>
    <div class="relative h-full w-full flex items-center z-10">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-white max-w-4xl">
                <h1 class="text-3xl md:text-5xl font-bold mb-4">School Resources</h1>
                <p class="text-lg md:text-2xl font-light">Essential materials for students, parents, and staff</p>
            </div>
        </div>
    </div>
</div>

<!-- Resources Grid -->
<div class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Forms & Documents -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="text-[#1b5454] mb-4">
                        <i class="fas fa-file-alt text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Forms & Documents</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-download mr-2"></i>
                                Admission Application Form
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-download mr-2"></i>
                                Medical Information Form
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-download mr-2"></i>
                                Transportation Request Form
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-download mr-2"></i>
                                Fee Structure 2025
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Academic Resources -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="text-[#1b5454] mb-4">
                        <i class="fas fa-book text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Academic Resources</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-link mr-2"></i>
                                E-Library Access
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-link mr-2"></i>
                                Past Papers Archive
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-link mr-2"></i>
                                Study Guides
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-link mr-2"></i>
                                Online Learning Portal
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Parent Resources -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="text-[#1b5454] mb-4">
                        <i class="fas fa-users text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Parent Resources</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                School Calendar
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-book mr-2"></i>
                                Parent Handbook
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-bell mr-2"></i>
                                Parent Portal Guide
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-phone mr-2"></i>
                                Contact Directory
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Student Handbook -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="text-[#1b5454] mb-4">
                        <i class="fas fa-graduation-cap text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Student Handbook</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-book mr-2"></i>
                                School Rules & Regulations
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-clock mr-2"></i>
                                Daily Schedule
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-tshirt mr-2"></i>
                                Uniform Guidelines
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-bullhorn mr-2"></i>
                                Extra-Curricular Activities
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Health & Safety -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="text-[#1b5454] mb-4">
                        <i class="fas fa-heart text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Health & Safety</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-first-aid mr-2"></i>
                                Health Guidelines
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-shield-alt mr-2"></i>
                                Safety Protocols
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-procedures mr-2"></i>
                                Emergency Procedures
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-apple-alt mr-2"></i>
                                Nutrition Guidelines
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Technology Support -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="text-[#1b5454] mb-4">
                        <i class="fas fa-laptop text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Technology Support</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-question-circle mr-2"></i>
                                IT Help Desk
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-wifi mr-2"></i>
                                Wi-Fi Access Guide
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-tablet-alt mr-2"></i>
                                Device Requirements
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-[#1b5454]">
                                <i class="fas fa-lock mr-2"></i>
                                Online Safety Guide
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Frequently Asked Questions</h2>
        <div class="max-w-3xl mx-auto space-y-6">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold mb-2">How do I access the Parent Portal?</h3>
                <p class="text-gray-700">Login credentials are provided at the beginning of each academic year. If you've forgotten your password, use the 'Forgot Password' link on the login page.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold mb-2">Where can I find the school calendar?</h3>
                <p class="text-gray-700">The school calendar is available in the Parent Resources section and is updated regularly with important dates and events.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold mb-2">How do I report a technical issue?</h3>
                <p class="text-gray-700">Visit the IT Help Desk section under Technology Support to submit a ticket or contact our IT support team directly.</p>
            </div>
        </div>
    </div>
</section>
@endsection
