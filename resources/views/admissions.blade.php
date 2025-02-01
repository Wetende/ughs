@extends('layouts.app')

@section('title', 'Admissions')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-blue-600 text-white py-16">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-4">Join Our School</h1>
            <p class="text-xl">Begin Your Journey to Excellence</p>
        </div>
    </div>

    <!-- Admission Process -->
    <div class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8">Admission Process</h2>
            <div class="grid md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-blue-600 font-bold">1</span>
                    </div>
                    <h3 class="font-bold mb-2">Submit Application</h3>
                    <p class="text-gray-600">Complete the online application form with all required documents</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-blue-600 font-bold">2</span>
                    </div>
                    <h3 class="font-bold mb-2">Document Review</h3>
                    <p class="text-gray-600">Our admissions team will review your application and documents</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-blue-600 font-bold">3</span>
                    </div>
                    <h3 class="font-bold mb-2">Interview</h3>
                    <p class="text-gray-600">Selected candidates will be invited for an interview</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-blue-600 font-bold">4</span>
                    </div>
                    <h3 class="font-bold mb-2">Final Decision</h3>
                    <p class="text-gray-600">Acceptance letters will be sent to successful candidates</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Requirements -->
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8">Admission Requirements</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Required Documents</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Completed application form
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Birth certificate
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Previous school records
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Passport-size photographs
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Health records
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Academic Requirements</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Minimum grade requirements
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            English proficiency
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Entrance examination
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Interview performance
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Fee Structure -->
    <div class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8">Fee Structure</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Primary School</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Tuition Fee</span>
                            <span class="font-semibold">$X,XXX</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Books & Materials</span>
                            <span class="font-semibold">$XXX</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Activity Fee</span>
                            <span class="font-semibold">$XXX</span>
                        </div>
                        <hr class="my-4">
                        <div class="flex justify-between font-bold">
                            <span>Total</span>
                            <span>$X,XXX</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Junior High</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Tuition Fee</span>
                            <span class="font-semibold">$X,XXX</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Books & Materials</span>
                            <span class="font-semibold">$XXX</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Activity Fee</span>
                            <span class="font-semibold">$XXX</span>
                        </div>
                        <hr class="my-4">
                        <div class="flex justify-between font-bold">
                            <span>Total</span>
                            <span>$X,XXX</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Senior High</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Tuition Fee</span>
                            <span class="font-semibold">$X,XXX</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Books & Materials</span>
                            <span class="font-semibold">$XXX</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Activity Fee</span>
                            <span class="font-semibold">$XXX</span>
                        </div>
                        <hr class="my-4">
                        <div class="flex justify-between font-bold">
                            <span>Total</span>
                            <span>$X,XXX</span>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center text-gray-600 mt-6">* All fees are subject to change. Please contact the admissions office for the most current information.</p>
        </div>
    </div>

    <!-- Apply Now CTA -->
    <div class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Join Us?</h2>
            <p class="text-xl mb-8">Take the first step towards a bright future</p>
            <a href="{{ route('register') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">Apply Now</a>
        </div>
    </div>
</div>
@endsection
