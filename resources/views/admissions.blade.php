@extends('layouts.master')

@section('title', 'Admissions - UGHS')

@section('content')
<!-- Hero Section -->
<div class="relative w-full min-h-[60vh] md:min-h-[70vh] bg-white">
    <div class="absolute inset-0 bg-cover bg-center transition-all duration-700" 
         style="background-image: url('{{ asset('assets/images/admissions.jpg') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-[#1b5454]/80 to-[#023D54]/80"></div>
    </div>
    <div class="relative h-full w-full flex items-center z-10">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-white max-w-4xl">
                <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold mb-4">Join Our School Community</h1>
                <p class="text-lg md:text-xl lg:text-2xl mb-8">Start your journey towards excellence at Uasin Gishu High School</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#fee-structure" class="inline-flex items-center px-6 py-3 bg-yellow-400 text-[#22345b] rounded-lg hover:bg-yellow-300 transition-all duration-300">
                        View Fees
                    </a>
                    <a href="#requirements" class="inline-flex items-center px-6 py-3 bg-white text-[#1b5454] rounded-lg hover:bg-gray-100 transition-all duration-300">
                        Requirements
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fee Structure Section -->
<div id="fee-structure" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-blue-900 mb-4">Fee Structure</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto mb-8"></div>
            <p class="text-xl text-gray-600">Transparent and affordable education</p>
        </div>

        <div class="max-w-4xl mx-auto">
            <!-- Fee Table -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-8">
                <table class="w-full">
                    <thead>
                        <tr class="bg-[#1b5454] text-white">
                            <th class="px-6 py-4 text-left">Form</th>
                            <th class="px-6 py-4 text-right">Lunch Programme</th>
                            <th class="px-6 py-4 text-right">Transport</th>
                            <th class="px-6 py-4 text-right">Tuition</th>
                            <th class="px-6 py-4 text-right">Remedial</th>
                            <th class="px-6 py-4 text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium">Form 1</td>
                            <td class="px-6 py-4 text-right">15,000</td>
                            <td class="px-6 py-4 text-right">12,000</td>
                            <td class="px-6 py-4 text-right">-</td>
                            <td class="px-6 py-4 text-right">-</td>
                            <td class="px-6 py-4 text-right font-bold">27,000</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium">Form 2</td>
                            <td class="px-6 py-4 text-right">15,000</td>
                            <td class="px-6 py-4 text-right">12,000</td>
                            <td class="px-6 py-4 text-right">-</td>
                            <td class="px-6 py-4 text-right">-</td>
                            <td class="px-6 py-4 text-right font-bold">27,000</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium">Form 3</td>
                            <td class="px-6 py-4 text-right">15,000</td>
                            <td class="px-6 py-4 text-right">12,000</td>
                            <td class="px-6 py-4 text-right">6,000</td>
                            <td class="px-6 py-4 text-right">9,000</td>
                            <td class="px-6 py-4 text-right font-bold">42,000</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium">Form 4</td>
                            <td class="px-6 py-4 text-right">15,000</td>
                            <td class="px-6 py-4 text-right">12,000</td>
                            <td class="px-6 py-4 text-right">6,000</td>
                            <td class="px-6 py-4 text-right">9,000</td>
                            <td class="px-6 py-4 text-right font-bold">42,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Bank Account Details -->
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gray-50 rounded-xl p-6">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('assets/images/kcb-logo.png') }}" alt="KCB Bank" class="h-8 mr-4">
                        <h3 class="text-xl font-bold text-blue-900">KCB Bank</h3>
                    </div>
                    <p class="text-gray-600">Account Number:</p>
                    <p class="text-xl font-bold text-[#1b5454]">1152921185</p>
                </div>

                <div class="bg-gray-50 rounded-xl p-6">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('assets/images/national-bank-logo.png') }}" alt="National Bank" class="h-8 mr-4">
                        <h3 class="text-xl font-bold text-blue-900">National Bank</h3>
                    </div>
                    <p class="text-gray-600">Account Number:</p>
                    <p class="text-xl font-bold text-[#1b5454]">010 2102 826 3700</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Requirements Section -->
<div id="requirements" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-blue-900 mb-4">Admission Requirements</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto mb-8"></div>
            <p class="text-xl text-gray-600">What you need to join our community</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="text-yellow-500 mb-4">
                    <i class="fas fa-file-alt text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-4">Documents Required</h3>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        Birth Certificate
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        Previous School Reports
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        Leaving Certificate
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        2 Passport Photos
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="text-yellow-500 mb-4">
                    <i class="fas fa-user-graduate text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-4">Academic Requirements</h3>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        Minimum Grade Requirements
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        English Proficiency
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        Mathematics Competency
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        Good Conduct Record
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="text-yellow-500 mb-4">
                    <i class="fas fa-clipboard-list text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-4">Application Process</h3>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-center">
                        <i class="fas fa-1 text-green-500 mr-2 w-6 text-center"></i>
                        Fill Application Form
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-2 text-green-500 mr-2 w-6 text-center"></i>
                        Submit Documents
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-3 text-green-500 mr-2 w-6 text-center"></i>
                        Interview Process
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-4 text-green-500 mr-2 w-6 text-center"></i>
                        Admission Decision
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto bg-[#1b5454] rounded-xl shadow-xl overflow-hidden">
            <div class="p-8 text-white">
                <h3 class="text-2xl font-bold mb-6">Need More Information?</h3>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        <p class="flex items-center">
                            <i class="fas fa-phone w-8"></i>
                            <span>0737015750</span>
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-envelope w-8"></i>
                            <span>uasingishusecsch@gmail.com</span>
                        </p>
                    </div>
                    <div class="space-y-4">
                        <p class="flex items-center">
                            <i class="fas fa-map-marker-alt w-8"></i>
                            <span>P.O. Box 380-30100, Eldoret, Kenya</span>
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-clock w-8"></i>
                            <span>Mon - Fri, 8:00 AM - 5:00 PM</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
