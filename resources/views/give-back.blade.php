@extends('layouts.guest')

@section('title', 'Empower the Future - Give Back to UGHS')

@section('body')
@include('partials.navigation')

<!-- Hero Section -->
<div class="relative h-[60vh] bg-cover bg-center" style="background-image: url('{{ asset('assets/images/students.jpg') }}');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative container mx-auto px-4 h-full flex flex-col justify-center text-white">
        <h1 class="text-5xl md:text-6xl font-bold mb-4">Empower the Future</h1>
        <p class="text-xl md:text-2xl mb-8 max-w-2xl">Your support helps shape the next generation of leaders at Uasin Gishu High School</p>
        <a href="#donate" class="bg-yellow-400 text-[#22345b] px-8 py-4 rounded-full text-xl font-bold hover:bg-yellow-300 transition inline-block w-fit">
            Donate Now
        </a>
    </div>
</div>

<!-- Impact Stats -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="p-6">
                <div class="text-4xl font-bold text-[#22345b] mb-2">500+</div>
                <p class="text-xl">Students Supported</p>
            </div>
            <div class="p-6">
                <div class="text-4xl font-bold text-[#22345b] mb-2">KES 25M</div>
                <p class="text-xl">Raised Last Year</p>
            </div>
            <div class="p-6">
                <div class="text-4xl font-bold text-[#22345b] mb-2">100%</div>
                <p class="text-xl">Impact on Future</p>
            </div>
        </div>
    </div>
</div>

<!-- Why Give Back -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-[#22345b] mb-12 text-center">Why Give Back?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="{{ asset('assets/images/students-learning.jpg') }}" alt="Students Learning" class="rounded-lg shadow-xl">
            </div>
            <div class="space-y-6">
                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-[#22345b]">Transform Lives</h3>
                    <p class="text-gray-700">Your contribution directly impacts students' lives, providing them with better facilities, resources, and opportunities for growth.</p>
                </div>
                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-[#22345b]">Build Future Leaders</h3>
                    <p class="text-gray-700">Help nurture the next generation of leaders, innovators, and change-makers through quality education.</p>
                </div>
                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-[#22345b]">Create Lasting Impact</h3>
                    <p class="text-gray-700">Your support creates a ripple effect, empowering students to achieve their dreams and give back to their communities.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ways to Give -->
<div id="donate" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-[#22345b] mb-12 text-center">Ways to Give</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- One-Time Donation -->
            <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-100">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-gift text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">One-Time Gift</h3>
                <p class="text-gray-700 mb-6">Make an immediate impact with a one-time donation of any amount.</p>
                <div class="space-y-4">
                    <button class="w-full py-2 border-2 border-[#22345b] text-[#22345b] rounded hover:bg-[#22345b] hover:text-white transition">KES 1,000</button>
                    <button class="w-full py-2 border-2 border-[#22345b] text-[#22345b] rounded hover:bg-[#22345b] hover:text-white transition">KES 5,000</button>
                    <button class="w-full py-2 border-2 border-[#22345b] text-[#22345b] rounded hover:bg-[#22345b] hover:text-white transition">KES 10,000</button>
                    <button class="w-full py-2 bg-yellow-400 text-[#22345b] rounded hover:bg-yellow-300 transition">Custom Amount</button>
                </div>
            </div>

            <!-- Monthly Giving -->
            <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-100">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-sync-alt text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">Monthly Giving</h3>
                <p class="text-gray-700 mb-6">Create sustainable impact with a recurring monthly donation.</p>
                <div class="space-y-4">
                    <button class="w-full py-2 border-2 border-[#22345b] text-[#22345b] rounded hover:bg-[#22345b] hover:text-white transition">KES 500/month</button>
                    <button class="w-full py-2 border-2 border-[#22345b] text-[#22345b] rounded hover:bg-[#22345b] hover:text-white transition">KES 1,000/month</button>
                    <button class="w-full py-2 border-2 border-[#22345b] text-[#22345b] rounded hover:bg-[#22345b] hover:text-white transition">KES 2,500/month</button>
                    <button class="w-full py-2 bg-yellow-400 text-[#22345b] rounded hover:bg-yellow-300 transition">Custom Amount</button>
                </div>
            </div>

            <!-- Legacy Giving -->
            <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-100">
                <div class="text-[#1b5454] mb-4">
                    <i class="fas fa-heart text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#22345b] mb-4">Legacy Giving</h3>
                <p class="text-gray-700 mb-6">Create a lasting legacy through planned giving and bequests.</p>
                <ul class="space-y-4 text-gray-700">
                    <li class="flex items-center">
                        <i class="fas fa-check text-[#1b5454] mr-2"></i>
                        Estate Planning
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-[#1b5454] mr-2"></i>
                        Named Scholarships
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-[#1b5454] mr-2"></i>
                        Endowment Funds
                    </li>
                </ul>
                <button class="w-full py-2 mt-6 bg-yellow-400 text-[#22345b] rounded hover:bg-yellow-300 transition">Learn More</button>
            </div>
        </div>
    </div>
</div>

<!-- Current Projects -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-[#22345b] mb-12 text-center">Current Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Project 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <img src="{{ asset('assets/images/library.jpg') }}" alt="New Library" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-[#22345b] mb-2">New Library Wing</h3>
                    <div class="mb-4">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-400 h-2 rounded-full" style="width: 75%"></div>
                        </div>
                        <div class="flex justify-between text-sm text-gray-600 mt-1">
                            <span>KES 7.5M raised</span>
                            <span>KES 10M goal</span>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">Help us build a state-of-the-art library to foster learning and research.</p>
                    <button class="bg-[#22345b] text-white px-6 py-2 rounded hover:bg-[#1a2844] transition">Support This Project</button>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <img src="{{ asset('assets/images/lab.jpg') }}" alt="Science Lab" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-[#22345b] mb-2">Science Lab Equipment</h3>
                    <div class="mb-4">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-400 h-2 rounded-full" style="width: 40%"></div>
                        </div>
                        <div class="flex justify-between text-sm text-gray-600 mt-1">
                            <span>KES 2M raised</span>
                            <span>KES 5M goal</span>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">Upgrade our science labs with modern equipment for hands-on learning.</p>
                    <button class="bg-[#22345b] text-white px-6 py-2 rounded hover:bg-[#1a2844] transition">Support This Project</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Success Stories -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-[#22345b] mb-12 text-center">Impact Stories</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Story 1 -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="mb-4">
                    <img src="{{ asset('assets/images/student1.jpg') }}" alt="Student Story" class="w-20 h-20 rounded-full mx-auto">
                </div>
                <blockquote class="text-gray-700 text-center mb-4">"The scholarship I received changed my life. Now I'm studying medicine at the University of Nairobi."</blockquote>
                <p class="text-center font-semibold text-[#22345b]">- Jane Kimani, Class of 2020</p>
            </div>

            <!-- Story 2 -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="mb-4">
                    <img src="{{ asset('assets/images/student2.jpg') }}" alt="Student Story" class="w-20 h-20 rounded-full mx-auto">
                </div>
                <blockquote class="text-gray-700 text-center mb-4">"The new computer lab helped me discover my passion for programming. Today, I work as a software engineer."</blockquote>
                <p class="text-center font-semibold text-[#22345b]">- John Ochieng, Class of 2018</p>
            </div>

            <!-- Story 3 -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="mb-4">
                    <img src="{{ asset('assets/images/student3.jpg') }}" alt="Student Story" class="w-20 h-20 rounded-full mx-auto">
                </div>
                <blockquote class="text-gray-700 text-center mb-4">"Thanks to the sports facility upgrade, I was able to train properly and now represent Kenya in athletics."</blockquote>
                <p class="text-center font-semibold text-[#22345b]">- Mary Cherono, Class of 2019</p>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 max-w-4xl">
        <h2 class="text-4xl font-bold text-[#22345b] mb-12 text-center">Frequently Asked Questions</h2>
        <div class="space-y-6">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold text-[#22345b] mb-2">How are donations used?</h3>
                <p class="text-gray-700">Your donations directly support student scholarships, facility improvements, and educational programs. We ensure 100% transparency in fund allocation.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold text-[#22345b] mb-2">Is my donation tax-deductible?</h3>
                <p class="text-gray-700">Yes, all donations to UGHS are tax-deductible. You will receive a receipt for your records.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold text-[#22345b] mb-2">Can I specify how my donation is used?</h3>
                <p class="text-gray-700">Yes, you can designate your gift to support specific programs, scholarships, or projects that align with your interests.</p>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="bg-[#22345b] rounded-xl p-8 text-white text-center">
            <h2 class="text-3xl font-bold mb-4">Questions About Giving?</h2>
            <p class="mb-6">Our development team is here to help you make a meaningful impact.</p>
            <div class="flex flex-col md:flex-row gap-4 justify-center">
                <a href="mailto:giving@ughs.edu" class="bg-yellow-400 text-[#22345b] px-8 py-3 rounded font-semibold hover:bg-yellow-300 transition">
                    Email Us
                </a>
                <a href="tel:+254123456789" class="bg-white/20 text-white px-8 py-3 rounded font-semibold hover:bg-white/30 transition">
                    Call Us
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .hover\:scale-105:hover {
        transform: scale(1.05);
    }
</style>
@endpush
