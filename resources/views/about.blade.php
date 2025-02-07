@extends('layouts.master')

@section('title', 'About Us - UGHS')

@section('content')
<!-- Hero Section -->
<div class="relative h-[300px] md:h-[400px] bg-gradient-to-r from-[#1b5454] to-[#023D54]">
<div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/images/about.jpg') }}');"></div>
<div class="absolute inset-0">
        <div class="bg-black opacity-50 absolute inset-0"></div>
        <div class="container mx-auto px-4 h-full flex items-center relative z-10">
            <div class="text-white max-w-3xl">
                <h1 class="text-3xl md:text-5xl font-bold mb-4">About Our School</h1>
                <p class="text-xl md:text-2xl font-light">Nurturing Excellence Since 1952</p>
                <p class="text-lg md:text-xl mt-4 text-gray-200">"ONLY THE BEST"</p>
                <style>
                    .relative > div:first-child {
                        background-image: url({{ asset('images/about.jpg') }});
                        background-size: cover;
                        background-position: center;
                    }
                </style>

            </div>
        </div>
    </div>
</div>

<!-- Quick Stats -->
<div class="bg-white py-8 md:py-12 shadow-md relative -mt-16 md:-mt-20 z-20 rounded-lg max-w-6xl mx-4 md:mx-auto">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8 text-center">
            <div class="p-4">
                <div class="text-2xl md:text-4xl font-bold text-[#1b5454] mb-2">1952</div>
                <div class="text-sm md:text-base text-gray-600">Established</div>
            </div>
            <div class="p-4">
                <div class="text-2xl md:text-4xl font-bold text-[#1b5454] mb-2">1550+</div>
                <div class="text-sm md:text-base text-gray-600">Students</div>
            </div>
            <div class="p-4">
                <div class="text-2xl md:text-4xl font-bold text-[#1b5454] mb-2">60</div>
                <div class="text-sm md:text-base text-gray-600">Teachers</div>
            </div>
            <div class="p-4">
                <div class="text-2xl md:text-4xl font-bold text-[#1b5454] mb-2">7</div>
                <div class="text-sm md:text-base text-gray-600">Streams</div>
            </div>
        </div>
    </div>
</div>

<!-- History Section -->
<div class="py-12 md:py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-4">Our History</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto mb-8 md:mb-12"></div>

            <div class="space-y-8 md:space-y-12">
                <!-- Foundation -->
                <div class="bg-white rounded-xl shadow-lg p-6 md:p-8">
                    <h3 class="text-xl md:text-2xl font-bold text-[#1b5454] mb-4">The Beginning (1952)</h3>
                    <p class="text-gray-600 leading-relaxed text-sm md:text-base">
                        Uasin Gishu High School started in 1952 as an Asian School, with a student population of about 35 in form I, who were of Asian Origin of both gender. Later in the 1960s after independence, admission was opened to African students and since then has remained a school of mixed race to date, with students from the East African region and beyond.
                    </p>
                </div>

                <!-- Growth -->
                <div class="bg-white rounded-xl shadow-lg p-6 md:p-8">
                    <h3 class="text-xl md:text-2xl font-bold text-[#1b5454] mb-4">Growth & Development</h3>
                    <p class="text-gray-600 leading-relaxed mb-4 text-sm md:text-base">
                        Since its inception and due to its good performance in national exams, and its location at the heart of Eldoret town, the student population has greatly increased to the current population of about 950 students, supported by 60 dedicated teachers and 30 non-teaching staff members.
                    </p>
                    <p class="text-gray-600 leading-relaxed text-sm md:text-base">
                        Initially designed with one stream per class, the school expanded to accommodate growing demand. Through government and parent initiatives, additional classrooms were built, increasing to two streams. The late 1970s saw the introduction of A-level classes, further boosting enrollment.
                    </p>
                </div>

                <!-- Modern Era -->
                <div class="bg-white rounded-xl shadow-lg p-6 md:p-8">
                    <h3 class="text-xl md:text-2xl font-bold text-[#1b5454] mb-4">Modern Era & Achievements</h3>
                    <p class="text-gray-600 leading-relaxed mb-4 text-sm md:text-base">
                        Currently operating with five streams, our school continues to excel academically. In the 2013 national exams, 94 out of 224 students qualified for direct university entry, with over 100 more achieving C+ and above. These outstanding results have earned us recognition as the best mixed day school in the region.
                    </p>
                </div>

                <!-- Challenges & Vision -->
                <div class="bg-white rounded-xl shadow-lg p-6 md:p-8">
                    <h3 class="text-xl md:text-2xl font-bold text-[#1b5454] mb-4">Challenges & Future Vision</h3>
                    <p class="text-gray-600 leading-relaxed mb-4 text-sm md:text-base">
                        While celebrating our successes, we acknowledge our challenges, particularly in infrastructure and financial support. Our science laboratories, dating back to 1952, require modernization to meet current needs. Additionally, many of our academically gifted students come from challenging economic backgrounds.
                    </p>
                    <p class="text-gray-600 leading-relaxed text-sm md:text-base">
                        We envision a future where alumni and supporters come together to enhance our facilities and support our students, enabling us to maintain our tradition of excellence and truly live up to our motto: "ONLY THE BEST".
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="bg-[#1b5454] py-12 md:py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h2 class="text-2xl md:text-3xl font-bold mb-4 md:mb-6">Join Us in Shaping the Future</h2>
            <p class="text-lg md:text-xl mb-6 md:mb-8">Support our mission to provide quality education and maintain our tradition of excellence.</p>
            <div class="flex flex-col md:flex-row justify-center gap-4 md:gap-6">
                <a href="{{ route('contact') }}" class="w-full md:w-auto bg-white text-[#1b5454] px-6 py-3 rounded-lg hover:bg-gray-100 transition text-center">Contact Us</a>
                <a href="{{ route('admissions') }}" class="w-full md:w-auto bg-yellow-500 text-white px-6 py-3 rounded-lg hover:bg-yellow-600 transition text-center">Apply Now</a>
            </div>
        </div>
    </div>
</div>

<!-- Timeline -->
<div class="py-12 md:py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-4">Key Milestones</h2>
        <div class="w-24 h-1 bg-green-600 mx-auto mb-8 md:mb-12"></div>
        
        <div class="max-w-4xl mx-auto">
            <div class="relative">
                <!-- Timeline Line -->
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-[#1b5454]"></div>
                
                <!-- Timeline Items -->
                <div class="space-y-8 md:space-y-12">
                    <!-- Mobile Timeline Items -->
                    <div class="md:hidden space-y-8">
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="bg-[#1b5454] text-white px-4 py-2 rounded-lg inline-block mb-4">1952</div>
                            <h3 class="text-xl font-bold text-[#1b5454] mb-2">School Establishment</h3>
                            <p class="text-gray-600">Founded as an Asian School with 35 students in Form I</p>
                        </div>
                        
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="bg-[#1b5454] text-white px-4 py-2 rounded-lg inline-block mb-4">1960s</div>
                            <h3 class="text-xl font-bold text-[#1b5454] mb-2">Integration</h3>
                            <p class="text-gray-600">Opened admission to African students post-independence</p>
                        </div>
                        
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="bg-[#1b5454] text-white px-4 py-2 rounded-lg inline-block mb-4">1970s</div>
                            <h3 class="text-xl font-bold text-[#1b5454] mb-2">Expansion</h3>
                            <p class="text-gray-600">Introduction of A-level classes and increased enrollment</p>
                        </div>
                        
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="bg-[#1b5454] text-white px-4 py-2 rounded-lg inline-block mb-4">1989</div>
                            <h3 class="text-xl font-bold text-[#1b5454] mb-2">Education Reform</h3>
                            <p class="text-gray-600">Transition to 8-4-4 system of education</p>
                        </div>
                        
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="bg-[#1b5454] text-white px-4 py-2 rounded-lg inline-block mb-4">Present</div>
                            <h3 class="text-xl font-bold text-[#1b5454] mb-2">Current Status</h3>
                            <p class="text-gray-600">Seven streams with over 1500 students and consistent academic excellence</p>
                        </div>
                    </div>

                    <!-- Desktop Timeline Items -->
                    <div class="hidden md:block">
                        <div class="relative">
                            <div class="flex items-center justify-center">
                                <div class="bg-[#1b5454] text-white px-4 py-2 rounded-lg z-10">1952</div>
                            </div>
                            <div class="mt-4 bg-white p-6 rounded-lg shadow-lg">
                                <h3 class="text-xl font-bold text-[#1b5454] mb-2">School Establishment</h3>
                                <p class="text-gray-600">Founded as an Asian School with 35 students in Form I</p>
                            </div>
                        </div>
                        
                        <div class="relative mt-12">
                            <div class="flex items-center justify-center">
                                <div class="bg-[#1b5454] text-white px-4 py-2 rounded-lg z-10">1960s</div>
                            </div>
                            <div class="mt-4 bg-white p-6 rounded-lg shadow-lg">
                                <h3 class="text-xl font-bold text-[#1b5454] mb-2">Integration</h3>
                                <p class="text-gray-600">Opened admission to African students post-independence</p>
                            </div>
                        </div>
                        
                        <div class="relative mt-12">
                            <div class="flex items-center justify-center">
                                <div class="bg-[#1b5454] text-white px-4 py-2 rounded-lg z-10">1970s</div>
                            </div>
                            <div class="mt-4 bg-white p-6 rounded-lg shadow-lg">
                                <h3 class="text-xl font-bold text-[#1b5454] mb-2">Expansion</h3>
                                <p class="text-gray-600">Introduction of A-level classes and increased enrollment</p>
                            </div>
                        </div>
                        
                        <div class="relative mt-12">
                            <div class="flex items-center justify-center">
                                <div class="bg-[#1b5454] text-white px-4 py-2 rounded-lg z-10">1989</div>
                            </div>
                            <div class="mt-4 bg-white p-6 rounded-lg shadow-lg">
                                <h3 class="text-xl font-bold text-[#1b5454] mb-2">Education Reform</h3>
                                <p class="text-gray-600">Transition to 8-4-4 system of education</p>
                            </div>
                        </div>
                        
                        <div class="relative mt-12">
                            <div class="flex items-center justify-center">
                                <div class="bg-[#1b5454] text-white px-4 py-2 rounded-lg z-10">Present</div>
                            </div>
                            <div class="mt-4 bg-white p-6 rounded-lg shadow-lg">
                                <h3 class="text-xl font-bold text-[#1b5454] mb-2">Current Status</h3>
                                <p class="text-gray-600">Seven streams with over 1550 students and consistent academic excellence</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
