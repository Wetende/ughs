@extends('layouts.app')

@section('title', 'School Leadership')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-blue-600 text-white py-16">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-4">School Leadership</h1>
            <p class="text-xl">Meet our dedicated leadership team</p>
        </div>
    </div>

    <!-- Leadership Team -->
    <div class="py-16">
        <div class="container mx-auto px-4">
            <!-- Principal -->
            <div class="max-w-4xl mx-auto mb-16">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3 bg-gray-100 p-8">
                            <div class="w-32 h-32 bg-gray-300 rounded-full mx-auto mb-4">
                                <!-- Principal photo placeholder -->
                            </div>
                            <h2 class="text-2xl font-bold text-center">Dr. Sarah Johnson</h2>
                            <p class="text-gray-600 text-center">School Principal</p>
                        </div>
                        <div class="md:w-2/3 p-8">
                            <h3 class="text-xl font-bold mb-4">Message from the Principal</h3>
                            <p class="text-gray-600 mb-4">Welcome to Upper Green Hill School. Our mission is to nurture every student's potential through academic excellence, character development, and innovative learning approaches. We believe in creating an environment where students can thrive and develop into responsible global citizens.</p>
                            <p class="text-gray-600">Together with our dedicated staff, we strive to provide a holistic education that prepares our students for the challenges and opportunities of the future.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Deputy Principals -->
            <h2 class="text-3xl font-bold mb-8 text-center">Deputy Principals</h2>
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto mb-16">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-4">
                            <!-- Deputy Principal 1 photo placeholder -->
                        </div>
                        <h3 class="text-xl font-bold text-center mb-2">Mr. David Kimani</h3>
                        <p class="text-gray-600 text-center mb-4">Deputy Principal - Academics</p>
                        <p class="text-gray-600">Overseeing academic programs and curriculum development to ensure educational excellence.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-4">
                            <!-- Deputy Principal 2 photo placeholder -->
                        </div>
                        <h3 class="text-xl font-bold text-center mb-2">Mrs. Jane Wanjiku</h3>
                        <p class="text-gray-600 text-center mb-4">Deputy Principal - Administration</p>
                        <p class="text-gray-600">Managing school operations and student affairs to maintain a conducive learning environment.</p>
                    </div>
                </div>
            </div>

            <!-- Department Heads -->
            <h2 class="text-3xl font-bold mb-8 text-center">Department Heads</h2>
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Sciences -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <div class="w-20 h-20 bg-gray-300 rounded-full mx-auto mb-4">
                            <!-- Photo placeholder -->
                        </div>
                        <h3 class="text-lg font-bold text-center mb-2">Dr. Peter Ochieng</h3>
                        <p class="text-gray-600 text-center">Head of Sciences</p>
                    </div>
                </div>

                <!-- Languages -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <div class="w-20 h-20 bg-gray-300 rounded-full mx-auto mb-4">
                            <!-- Photo placeholder -->
                        </div>
                        <h3 class="text-lg font-bold text-center mb-2">Ms. Lucy Muthoni</h3>
                        <p class="text-gray-600 text-center">Head of Languages</p>
                    </div>
                </div>

                <!-- Mathematics -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <div class="w-20 h-20 bg-gray-300 rounded-full mx-auto mb-4">
                            <!-- Photo placeholder -->
                        </div>
                        <h3 class="text-lg font-bold text-center mb-2">Mr. James Kiprop</h3>
                        <p class="text-gray-600 text-center">Head of Mathematics</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
