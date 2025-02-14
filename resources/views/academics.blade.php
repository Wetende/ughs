@extends('layouts.master')

@section('title', 'Academics - UGHS')

@section('content')
<!-- Hero Section -->
<div class="relative w-full min-h-[60vh] md:min-h-[70vh] bg-white">
    <div class="absolute inset-0 bg-cover bg-center transition-all duration-700" 
         style="background-image: url('{{ asset('assets/images/academics.jpg') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-[#1b5454]/90 to-[#023D54]/90"></div>
    </div>
    <div class="relative h-full w-full flex items-center z-10">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-white max-w-4xl">
                <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold mb-4">Academic Excellence</h1>
                <p class="text-lg md:text-xl lg:text-2xl mb-8">Nurturing minds, fostering innovation, and building future leaders through comprehensive education.</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#curriculum" class="inline-flex items-center px-6 py-3 bg-yellow-400 text-[#22345b] rounded-lg hover:bg-yellow-300 transition-all duration-300">Our Curriculum</a>
                    <a href="#achievements" class="inline-flex items-center px-6 py-3 bg-white text-[#1b5454] rounded-lg hover:bg-gray-100 transition-all duration-300">Achievements</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Academic Programs -->
<div id="curriculum" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-blue-900 mb-4">Our Curriculum</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto mb-8"></div>
            <p class="text-xl text-gray-600">Comprehensive education tailored for success</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Sciences -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="h-48 bg-gradient-to-br from-blue-500 to-green-500 relative">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <i class="fas fa-flask text-6xl text-white"></i>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-blue-900 mb-4">Sciences</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Biology
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Chemistry
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Physics
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Computer Studies
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Languages -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="h-48 bg-gradient-to-br from-purple-500 to-pink-500 relative">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <i class="fas fa-language text-6xl text-white"></i>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-blue-900 mb-4">Languages</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            English
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Kiswahili
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            French (Optional)
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Literature
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Mathematics -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="h-48 bg-gradient-to-br from-yellow-500 to-red-500 relative">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <i class="fas fa-calculator text-6xl text-white"></i>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-blue-900 mb-4">Mathematics</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Pure Mathematics
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Applied Mathematics
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Statistics
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Business Mathematics
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Academic Achievements -->
<div id="achievements" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-blue-900 mb-4">Academic Achievements</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto mb-8"></div>
            <p class="text-xl text-gray-600">Celebrating our students' success</p>
        </div>

        <div class="grid md:grid-cols-4 gap-8">
            <!-- KCSE Performance -->
            <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                <div class="text-4xl font-bold text-blue-900 mb-2">B-</div>
                <p class="text-lg text-gray-600">Average Grade</p>
                <p class="text-sm text-gray-500">KCSE 2024</p>
            </div>

            <!-- University Admission -->
            <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                <div class="text-4xl font-bold text-green-600 mb-2">92%</div>
                <p class="text-lg text-gray-600">University Admission</p>
                <p class="text-sm text-gray-500">Class of 2024</p>
            </div>

            <!-- National Ranking -->
            <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                <div class="text-4xl font-bold text-yellow-500 mb-2">Top 100</div>
                <p class="text-lg text-gray-600">National Ranking</p>
                <p class="text-sm text-gray-500">Among Day Schools</p>
            </div>

            <!-- Subject Excellence -->
            <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                <div class="text-4xl font-bold text-purple-600 mb-2">15+</div>
                <p class="text-lg text-gray-600">Subject Distinctions</p>
                <p class="text-sm text-gray-500">KCSE 2024</p>
            </div>
        </div>
    </div>
</div>

<!-- Academic Support -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-blue-900 mb-4">Academic Support</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto mb-8"></div>
            <p class="text-xl text-gray-600">Resources for student success</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Library -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="text-yellow-500 mb-4">
                    <i class="fas fa-book-reader text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-4">Modern Library</h3>
                <p class="text-gray-600 mb-4">Access to extensive physical and digital resources</p>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        Digital Catalogs
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        Study Areas
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        Research Support
                    </li>
                </ul>
            </div>

            <!-- Computer Labs -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="text-blue-500 mb-4">
                    <i class="fas fa-desktop text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-4">Computer Labs</h3>
                <p class="text-gray-600 mb-4">Modern technology for digital learning</p>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        Internet Access
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        Educational Software
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        Technical Support
                    </li>
                </ul>
            </div>

            <!-- Remedial Programs -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="text-green-500 mb-4">
                    <i class="fas fa-chalkboard-teacher text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-4">Remedial Programs</h3>
                <p class="text-gray-600 mb-4">Extra support for academic improvement</p>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        One-on-One Tutoring
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        Study Groups
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        Progress Monitoring
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Faculty -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-blue-900 mb-4">Our Faculty</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto mb-8"></div>
            <p class="text-xl text-gray-600">Meet our experienced educators</p>
        </div>

        <div class="grid md:grid-cols-4 gap-8">
            @foreach(['Sciences', 'Languages', 'Mathematics', 'Humanities'] as $department)
            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="mb-6">
                    <div class="w-24 h-24 mx-auto rounded-full overflow-hidden border-4 border-[#1b5454]">
                        <img src="{{ asset('assets/images/teacher.jpg') }}" alt="Teacher" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Head of {{ $department }}</h3>
                    <p class="text-gray-600">Ph.D. in {{ $department }}</p>
                    <p class="text-sm text-gray-500 mt-2">15+ Years Experience</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="py-16 bg-[#1b5454]">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h2 class="text-4xl font-bold mb-8">Ready to Join Our Academic Community?</h2>
            <p class="text-xl mb-8">Take the first step towards academic excellence</p>
            <div class="space-x-4">
                <a href="/admissions" class="inline-block bg-yellow-500 text-white px-8 py-3 rounded-lg hover:bg-yellow-600 transition">Apply Now</a>
                <a href="/contact" class="inline-block bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg hover:bg-white hover:text-[#1b5454] transition">Contact Us</a>
            </div>
        </div>
    </div>
</div>
@endsection
