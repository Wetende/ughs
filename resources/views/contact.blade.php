@extends('layouts.master')

@section('title', 'Contact Us - UGHS')

@section('content')
<!-- Hero Section -->
<div class="relative h-[300px] bg-gradient-to-r from-[#1b5454] to-[#023D54]">
<div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/images/contact.jpg') }}');"></div>    
<div class="absolute inset-0">
        <div class="bg-black opacity-50 absolute inset-0"></div>
        <div class="container mx-auto px-4 h-full flex items-center relative z-10">
            <div class="text-white max-w-2xl">
                <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
                <p class="text-xl">Get in touch with Uasin Gishu High School</p>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div>
                <div class="mb-12">
                    <h2 class="text-3xl font-bold text-blue-900 mb-8">Get In Touch</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Our Location</h3>
                                <p class="text-gray-600">Eldoret-Ziwa Road<br>P.O. Box 123, Eldoret<br>Kenya</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                <i class="fas fa-phone text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Phone Numbers</h3>
                                <p class="text-gray-600">Main Office: +254 700 000000<br>Admissions: +254 711 111111</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-yellow-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Email Addresses</h3>
                                <p class="text-gray-600">General Inquiries: info@ughs.ac.ke<br>Admissions: admissions@ughs.ac.ke</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mr-4">
                                <i class="fas fa-clock text-purple-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Office Hours</h3>
                                <p class="text-gray-600">Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 8:00 AM - 12:00 PM<br>Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Media Links -->
                <div>
                    <h2 class="text-3xl font-bold text-blue-900 mb-6">Connect With Us</h2>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center hover:bg-blue-700 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-12 h-12 rounded-full bg-blue-400 text-white flex items-center justify-center hover:bg-blue-500 transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-12 h-12 rounded-full bg-pink-600 text-white flex items-center justify-center hover:bg-pink-700 transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-12 h-12 rounded-full bg-red-600 text-white flex items-center justify-center hover:bg-red-700 transition">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-3xl font-bold text-blue-900 mb-8">Send Us a Message</h2>
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-gray-700 font-medium mb-2">First Name</label>
                            <input type="text" id="first_name" name="first_name" required
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition">
                        </div>
                        <div>
                            <label for="last_name" class="block text-gray-700 font-medium mb-2">Last Name</label>
                            <input type="text" id="last_name" name="last_name" required
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition">
                    </div>

                    <div>
                        <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition">
                    </div>

                    <div>
                        <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                        <select id="subject" name="subject" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition">
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="admissions">Admissions</option>
                            <option value="academics">Academics</option>
                            <option value="sports">Sports</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-[#1b5454] text-white py-3 px-6 rounded-lg hover:bg-[#023D54] transition duration-300">
                        Send Message
                    </button>
                </form>
            </div>
        </div>

        <!-- Google Maps -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-blue-900 mb-8">Our Location</h2>
            <div class="h-[400px] rounded-xl overflow-hidden shadow-lg">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7576147固定值!2d35.2697!3d0.5123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMMKwMzAnNDQuMyJOIDM1wrAxNicxMC45IkU!5e0!3m2!1sen!2sus!4v1固定值" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection
