<!-- Footer -->
<footer class="bg-[#22345b] text-white pt-16 pb-8">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8 mb-8">
            <!-- School Info -->
            <div>
                <h3 class="text-xl font-bold mb-4">Uasin Gishu High School</h3>
                <p class="mb-4 text-gray-300">Nurturing Excellence Since 1952</p>
                <div class="space-y-2">
                    <p class="flex items-center text-gray-300">
                        <i class="fas fa-map-marker-alt w-6"></i>
                        P.O. Box 380-30100, Eldoret
                    </p>
                    <p class="flex items-center text-gray-300">
                        <i class="fas fa-phone w-6"></i>
                        0737015750
                    </p>
                    <p class="flex items-center text-gray-300">
                        <i class="fas fa-envelope w-6"></i>
                        uasingishusecsch@gmail.com
                    </p>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('about') }}" class="text-gray-300 hover:text-white transition">About Us</a>
                    </li>
                    <li>
                        <a href="{{ route('academics') }}" class="text-gray-300 hover:text-white transition">Academics</a>
                    </li>
                    <li>
                        <a href="{{ route('admissions') }}" class="text-gray-300 hover:text-white transition">Admissions</a>
                    </li>
                    <li>
                        <a href="{{ route('student-life') }}" class="text-gray-300 hover:text-white transition">Student Life</a>
                    </li>
                    <li>
                        <a href="{{ route('gallery') }}" class="text-gray-300 hover:text-white transition">Gallery</a>
                    </li>
                    <li>
                        <a href="{{ route('alumni') }}" class="text-gray-300 hover:text-white transition">Alumni</a>
                    </li>
                    <li>
                        <a href="{{ route('resources') }}" class="text-gray-300 hover:text-white transition">Resources</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Important Links -->
            <div>
                <h3 class="text-xl font-bold mb-4">Important Links</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="text-gray-300 hover:text-white transition">School Portal</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-white transition">E-Learning</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-white transition">Alumni Network</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-white transition">Careers</a>
                    </li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="text-xl font-bold mb-4">Stay Connected</h3>
                <p class="text-gray-300 mb-4">Subscribe to our newsletter for updates</p>
                <form class="space-y-4">
                    <div>
                        <input type="email" placeholder="Your email address" class="w-full px-4 py-2 rounded-lg bg-[#1a2847] border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:border-yellow-500">
                    </div>
                    <button type="submit" class="w-full bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition">
                        Subscribe
                    </button>
                </form>
                <!-- Social Media Links -->
                <div class="flex space-x-4 mt-6">
                    <a href="#" class="text-gray-300 hover:text-white transition">
                        <i class="fab fa-facebook text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white transition">
                        <i class="fab fa-twitter text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white transition">
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white transition">
                        <i class="fab fa-linkedin text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
