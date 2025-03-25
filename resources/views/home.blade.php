@extends('layouts.master')

@section('title', 'Welcome to UGHS')

@section('content')
<!-- Hero Section -->
<main>
<section aria-label="Hero Slider" class="relative h-[800px] md:h-[900px] lg:h-[95vh] w-full bg-white overflow-hidden hero-section">
    <!-- Slider container -->
    <div class="swiper hero-slider h-full w-full" role="region" aria-roledescription="carousel">
        <div class="swiper-wrapper">
            <!-- Slide 1: Welcome -->
            <div class="swiper-slide relative" role="group" aria-roledescription="slide">
                <div class="absolute inset-0 bg-cover bg-center transition-all duration-700" 
                     data-background-image="{{ asset('images/hero/school-building.jpg') }}"
                     aria-hidden="true">
                    <div class="absolute inset-0 bg-black opacity-60"></div>
                </div>
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-end pb-16 relative z-10">
                    <div class="text-white max-w-2xl mx-auto text-center">
                        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-2 sm:mb-4 animate-fadeIn">Welcome to Uasin Gishu High School</h1>
                        <p class="text-base sm:text-lg md:text-xl mb-2 animate-slideUp">Only the Best</p>
                        <p class="text-sm sm:text-base md:text-lg mb-4 sm:mb-6 md:mb-8 animate-slideUp">📍 Eldoret, Kenya</p>
                        <a href="/about" class="inline-flex items-center px-3 sm:px-4 md:px-6 py-2 sm:py-2.5 md:py-3 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition-all duration-300 transform hover:scale-105" aria-label="Learn more about our school">
                            <span class="text-sm sm:text-base">Learn More</span>
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 md:w-5 md:h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Vision & Mission -->
            <div class="swiper-slide relative" role="group" aria-roledescription="slide">
                <div class="absolute inset-0 bg-cover bg-center" 
                     data-background-image="{{ asset('images/hero/students.jpg') }}"
                     aria-hidden="true">
                    <div class="absolute inset-0 bg-black opacity-60"></div>
                </div>
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-end pb-16 relative z-10">
                    <div class="text-white max-w-2xl mx-auto text-center">
                        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3 sm:mb-6">Our Vision & Mission</h2>
                        <div class="mb-2 sm:mb-4">
                            <h3 class="text-xl sm:text-2xl font-semibold mb-1 sm:mb-2">Vision</h3>
                            <p class="text-base sm:text-lg md:text-xl">To be a model mixed day school.</p>
                        </div>
                        <div class="mb-4 sm:mb-6 md:mb-8">
                            <h3 class="text-xl sm:text-2xl font-semibold mb-1 sm:mb-2">Mission</h3>
                            <p class="text-base sm:text-lg md:text-xl">To bring up open-minded, independent, self-motivated individuals through quality education.</p>
                        </div>
                        <a href="/about#vision" class="inline-flex items-center px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 md:py-3 bg-green-700 text-white rounded-lg hover:bg-green-600 transition-colors" aria-label="Read more about our vision and mission">
                            <span class="text-sm sm:text-base">Read More</span>
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 md:w-5 md:h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Student Life -->
            <div class="swiper-slide relative" role="group" aria-roledescription="slide">
                <div class="absolute inset-0 bg-cover bg-center" 
                     data-background-image="{{ asset('images/hero/student-life.jpg') }}"
                     aria-hidden="true">
                    <div class="absolute inset-0 bg-black opacity-60"></div>
                </div>
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-end pb-16 relative z-10">
                    <div class="text-white max-w-2xl mx-auto text-center">
                        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3 sm:mb-6">Vibrant Student Life</h2>
                        <p class="text-base sm:text-lg md:text-xl mb-4 sm:mb-6 md:mb-8">Join our diverse clubs and societies, participate in sports, and develop your talents through various extracurricular activities.</p>
                        <a href="/student-life" class="inline-flex items-center px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 md:py-3 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition-colors" aria-label="Explore activities at our school">
                            <span class="text-sm sm:text-base">Explore Activities</span>
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 md:w-5 md:h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 4: Academic Excellence -->
            <div class="swiper-slide relative" role="group" aria-roledescription="slide">
                <div class="absolute inset-0 bg-cover bg-center" 
                     data-background-image="{{ asset('images/hero/academics.jpg') }}"
                     aria-hidden="true">
                    <div class="absolute inset-0 bg-black opacity-60"></div>
                </div>
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-end pb-16 relative z-10">
                    <div class="text-white max-w-2xl mx-auto text-center">
                        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3 sm:mb-6">Academic Excellence</h2>
                        <p class="text-base sm:text-lg md:text-xl mb-2 sm:mb-4">We offer a comprehensive curriculum with:</p>
                        <ul class="text-sm sm:text-base md:text-lg mb-4 sm:mb-6 md:mb-8 space-y-1 sm:space-y-2">
                            <li>• Modern Science Laboratories</li>
                            <li>• Well-equipped Computer Labs</li>
                            <li>• Experienced Teaching Staff</li>
                            <li>• Quality Learning Resources</li>
                        </ul>
                        <a href="/academics" class="inline-flex items-center px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 md:py-3 bg-green-700 text-white rounded-lg hover:bg-green-600 transition-colors">
                            <span class="text-sm sm:text-base">View Programs</span>
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 md:w-5 md:h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 5: Admissions -->
            <div class="swiper-slide relative" role="group" aria-roledescription="slide">
                <div class="absolute inset-0 bg-cover bg-center" 
                     data-background-image="{{ asset('images/hero/admissions.jpg') }}"
                     aria-hidden="true">
                    <div class="absolute inset-0 bg-black opacity-60"></div>
                </div>
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-end pb-16 relative z-10">
                    <div class="text-white max-w-2xl mx-auto text-center">
                        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3 sm:mb-6">Join Our Community</h2>
                        <p class="text-base sm:text-lg md:text-xl mb-4 sm:mb-6 md:mb-8">Take the first step towards excellence. Applications are now open for new students.</p>
                        <div class="space-x-2 sm:space-x-4">
                            <a href="/admissions" class="inline-flex items-center px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 md:py-3 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition-colors" aria-label="Apply for admission">
                                <span class="text-sm sm:text-base">Apply Now</span>
                                <svg class="w-3 h-3 sm:w-4 sm:h-4 md:w-5 md:h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                            <a href="/fees" class="inline-flex items-center px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 md:py-3 bg-green-700 text-white rounded-lg hover:bg-green-600 transition-colors" aria-label="View fee structure">
                                <span class="text-sm sm:text-base">Fee Structure</span>
                                <svg class="w-3 h-3 sm:w-4 sm:h-4 md:w-5 md:h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 6: News & Announcements -->
            <div class="swiper-slide relative" role="group" aria-roledescription="slide">
                <div class="absolute inset-0 bg-cover bg-center" 
                     data-background-image="{{ asset('images/hero/notice.jpg') }}"
                     aria-hidden="true">
                    <div class="absolute inset-0 bg-black opacity-60"></div>
                </div>
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-end pb-16 relative z-10">
                    <div class="text-white max-w-2xl mx-auto text-center">
                        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3 sm:mb-6">Stay Updated</h2>
                        <p class="text-base sm:text-lg md:text-xl mb-2 sm:mb-4">Latest School News & Updates</p>
                        <ul class="text-sm sm:text-base md:text-lg mb-4 sm:mb-6 md:mb-8 space-y-1 sm:space-y-2" aria-label="News categories">
                            <li>📝 Exam Schedules</li>
                            <li>🎓 Academic Results</li>
                            <li>🏆 Competitions</li>
                            <li>🚀 Events</li>
                        </ul>
                        <a href="/news" class="inline-flex items-center px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 md:py-3 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition-colors" aria-label="Read school news">
                            <span class="text-sm sm:text-base">Read News</span>
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 md:w-5 md:h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Custom Navigation -->
        <div class="swiper-button-next custom-next flex" aria-label="Next slide"></div>
        <div class="swiper-button-prev custom-prev flex" aria-label="Previous slide"></div>
        
        <!-- Pagination -->
        <div class="swiper-pagination" aria-label="Slide pagination"></div>
    </div>
</section>

@push('styles')
<style>
    .hero-slider {
        position: relative;
        width: 100%;
        height: 100% !important; /* Force the slider to take full height */
    }
    .swiper-slide {
        position: relative;
        overflow: hidden;
        height: 100% !important; /* Force each slide to take full height */
        display: flex;
        align-items: flex-end; /* Align content to bottom */
    }
    .swiper-slide-active .animate-fadeIn {
        animation: fadeIn 1s ease-out forwards;
    }
    .swiper-slide-active .animate-slideUp {
        animation: slideUp 0.8s ease-out forwards;
    }
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .custom-next,
    .custom-prev {
        background-color: rgba(255, 255, 255, 0.9);
        width: 40px !important;
        height: 40px !important;
        border-radius: 50%;
        color: #1a365d !important;
        transition: all 0.3s ease;
        z-index: 20 !important;
    }
    @media (min-width: 768px) {
        .custom-next,
        .custom-prev {
            width: 45px !important;
            height: 45px !important;
        }
    }
    @media (min-width: 1024px) {
        .custom-next,
        .custom-prev {
            width: 50px !important;
            height: 50px !important;
        }
    }
    .custom-next:hover,
    .custom-prev:hover {
        background-color: #1a365d;
        color: white !important;
        transform: scale(1.1);
    }
    .custom-next::after,
    .custom-prev::after {
        font-size: 16px !important;
    }
    @media (min-width: 768px) {
        .custom-next::after,
        .custom-prev::after {
            font-size: 18px !important;
        }
    }
    @media (min-width: 1024px) {
        .custom-next::after,
        .custom-prev::after {
            font-size: 20px !important;
        }
    }
    .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        background: white;
        opacity: 0.7;
        transition: all 0.3s ease;
    }
    @media (min-width: 768px) {
        .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
        }
    }
    @media (min-width: 1024px) {
        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
        }
    }
    .swiper-pagination-bullet-active {
        opacity: 1;
        background: #1a365d;
        transform: scale(1.2);
    }
    .swiper-wrapper {
        height: 100% !important; /* Force wrapper to take full height */
    }
    .hero-section {
        height: 800px;
        max-height: 95vh; /* Set a maximum height for very tall screens */
    }
    @media (min-width: 768px) {
        .hero-section {
            height: 900px;
        }
    }
    @media (min-width: 1024px) {
        .hero-section {
            height: 95vh;
        }
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Wait for Swiper to be loaded
    function initSliders() {
        if (typeof Swiper === 'undefined') {
            // If Swiper is not loaded yet, wait and try again
            setTimeout(initSliders, 100);
            return;
        }
        
        // Initialize background images
        const bgElements = document.querySelectorAll('[data-background-image]');
        bgElements.forEach(el => {
            const bgUrl = el.getAttribute('data-background-image');
            if (bgUrl) {
                el.style.backgroundImage = `url('${bgUrl}')`;
            }
        });

        // Initialize hero slider
        const swiper = new Swiper('.hero-slider', {
            slidesPerView: 1,
            spaceBetween: 0,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            autoHeight: false,
            height: null,
            speed: 1000,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.custom-next',
                prevEl: '.custom-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            on: {
                slideChangeTransitionStart: function() {
                    const activeSlide = this.slides[this.activeIndex];
                    const elements = activeSlide.querySelectorAll('.animate-fadeIn, .animate-slideUp');
                    elements.forEach(el => {
                        el.style.opacity = '0';
                        el.style.animation = 'none';
                    });
                },
                slideChangeTransitionEnd: function() {
                    const activeSlide = this.slides[this.activeIndex];
                    const elements = activeSlide.querySelectorAll('.animate-fadeIn, .animate-slideUp');
                    elements.forEach(el => {
                        el.style.animation = '';
                    });
                }
            },
            breakpoints: {
                // Mobile
                320: {
                    slidesPerView: 1
                },
                // Tablet
                768: {
                    slidesPerView: 1
                },
                // Desktop
                1024: {
                    slidesPerView: 1
                }
            }
        });
        
        // Initialize testimonial slider if it exists
        if (document.querySelector('.testimonialSwiper')) {
            setTimeout(() => {
                const testimonialSwiper = new Swiper(".testimonialSwiper", {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    centeredSlides: true,
                    loop: true,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    effect: "slide",
                    speed: 800,
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1,
                        },
                        768: {
                            slidesPerView: 2,
                            centeredSlides: false,
                        },
                        1024: {
                            slidesPerView: 3,
                            centeredSlides: false,
                        },
                    },
                });
            }, 500);
        }
    }
    
    // Start initialization
    initSliders();
});
</script>
@endpush

<!-- Features Section -->
<section aria-labelledby="features-heading" class="py-8 sm:py-12 md:py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h2 id="features-heading" class="sr-only">Our Features</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-6 md:gap-8">
            <div class="text-center p-4 sm:p-5 md:p-6 bg-white rounded-lg shadow-lg">
                <div class="text-[#1b5454] mb-3 sm:mb-4" aria-hidden="true">
                    <i class="fas fa-graduation-cap text-3xl sm:text-4xl"></i>
                </div>
                <h3 class="text-xl sm:text-2xl font-bold mb-2 sm:mb-4 text-blue-900">Academic Excellence</h3>
                <p class="text-sm sm:text-base text-black">Committed to providing high-quality education and fostering academic achievement.</p>
            </div>
            <div class="text-center p-4 sm:p-5 md:p-6 bg-white rounded-lg shadow-lg">
                <div class="text-[#1b5454] mb-3 sm:mb-4" aria-hidden="true">
                    <i class="fas fa-users text-3xl sm:text-4xl"></i>
                </div>
                <h3 class="text-xl sm:text-2xl font-bold mb-2 sm:mb-4 text-green-900">Dedicated Faculty</h3>
                <p class="text-sm sm:text-base text-black">Expert teachers committed to nurturing every student's potential.</p>
            </div>
            <div class="text-center p-4 sm:p-5 md:p-6 bg-white rounded-lg shadow-lg">
                <div class="text-[#1b5454] mb-3 sm:mb-4" aria-hidden="true">
                    <i class="fas fa-microscope text-3xl sm:text-4xl"></i>
                </div>
                <h3 class="text-xl sm:text-2xl font-bold mb-2 sm:mb-4 text-red-900">Modern Facilities</h3>
                <p class="text-sm sm:text-base text-black">State-of-the-art facilities to support learning and growth.</p>
            </div>
        </div>
    </div>
</section>

<!-- School Overview Section -->
<section aria-labelledby="school-overview-heading" class="py-8 sm:py-12 md:py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8 sm:mb-12 md:mb-16">
            <h2 id="school-overview-heading" class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-900 mb-2 sm:mb-4">Our School</h2>
            <div class="w-16 sm:w-20 md:w-24 h-1 bg-green-600 mx-auto mb-4 sm:mb-6 md:mb-8" aria-hidden="true"></div>
            <p class="text-base sm:text-lg md:text-xl text-gray-600">The Best School In Nurturing Excellence and Building Future Leaders</p>
        </div>

        <div class="grid md:grid-cols-2 gap-6 sm:gap-8 md:gap-12 items-center">
            <div class="space-y-4 sm:space-y-6">
                <div class="bg-gray-50 p-4 sm:p-5 md:p-6 rounded-lg">
                    <h3 class="text-xl sm:text-2xl font-bold text-[#1b5454] mb-2 sm:mb-4">Vision</h3>
                    <p class="text-sm sm:text-base text-gray-700">To be a model mixed day school.</p>
                </div>
                
                <div class="bg-gray-50 p-4 sm:p-5 md:p-6 rounded-lg">
                    <h3 class="text-xl sm:text-2xl font-bold text-[#1b5454] mb-2 sm:mb-4">Mission</h3>
                    <p class="text-sm sm:text-base text-gray-700">To bring up an open-minded, independent, self-motivated individual through quality education.</p>
                </div>

                <div class="bg-gray-50 p-4 sm:p-5 md:p-6 rounded-lg">
                    <h3 class="text-xl sm:text-2xl font-bold text-[#1b5454] mb-2 sm:mb-4">Core Values</h3>
                    <div class="flex space-x-2 sm:space-x-4">
                        <div class="flex-1 text-center p-3 sm:p-4 bg-white rounded-lg shadow-sm">
                            <i class="fas fa-hand-holding-heart text-xl sm:text-2xl text-yellow-500 mb-1 sm:mb-2" aria-hidden="true"></i>
                            <p class="text-sm sm:text-base font-semibold">Integrity</p>
                        </div>
                        <div class="flex-1 text-center p-3 sm:p-4 bg-white rounded-lg shadow-sm">
                            <i class="fas fa-lightbulb text-xl sm:text-2xl text-yellow-500 mb-1 sm:mb-2" aria-hidden="true"></i>
                            <p class="text-sm sm:text-base font-semibold">Innovativeness</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-4 sm:p-5 md:p-6 rounded-lg">
                    <h3 class="text-xl sm:text-2xl font-bold text-[#1b5454] mb-2 sm:mb-4">Contact Us</h3>
                    <address class="not-italic space-y-2 sm:space-y-3">
                        <p class="flex items-center text-sm sm:text-base"><i class="fas fa-map-marker-alt w-5 sm:w-6 text-yellow-500" aria-hidden="true"></i> P.O. Box 380-30100, Eldoret, Kenya</p>
                        <p class="flex items-center text-sm sm:text-base"><i class="fas fa-phone w-5 sm:w-6 text-yellow-500" aria-hidden="true"></i> <a href="tel:0737015750" class="hover:underline">0737015750</a></p>
                        <p class="flex items-center text-sm sm:text-base"><i class="fas fa-fax w-5 sm:w-6 text-yellow-500" aria-hidden="true"></i> (053) 2061534</p>
                        <p class="flex items-center text-sm sm:text-base"><i class="fas fa-envelope w-5 sm:w-6 text-yellow-500" aria-hidden="true"></i> <a href="mailto:uasingishusecsch@gmail.com" class="hover:underline">uasingishusecsch@gmail.com</a></p>
                    </address>
                </div>
            </div>

            <div class="space-y-6 mt-6 md:mt-0">
                <figure class="relative h-64 sm:h-80 md:h-96 rounded-xl overflow-hidden shadow-xl">
                    <img src="{{ asset('images/hero/school-building.jpg') }}" alt="School Building" class="w-full h-full object-cover" width="600" height="384" loading="lazy">
                    <figcaption class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4 sm:p-6">
                        <div class="text-white">
                            <h3 class="text-lg sm:text-xl md:text-2xl font-bold mb-1 sm:mb-2">Only the Best</h3>
                            <p class="text-sm sm:text-base">The Best School In Nurturing Excellence and Building Future Leaders</p>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<!-- Clubs and Societies Section -->
<section aria-labelledby="clubs-heading" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 id="clubs-heading" class="text-4xl font-bold text-blue-900 mb-4">Clubs & Societies</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto mb-8" aria-hidden="true"></div>
            <p class="text-xl text-gray-600">Discover your passion through our diverse range of activities</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Academic Clubs -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="text-yellow-500 mb-4" aria-hidden="true">
                        <i class="fas fa-brain text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4">Academic Clubs</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-calculator w-6" aria-hidden="true"></i> Mathematics Club</li>
                        <li class="flex items-center"><i class="fas fa-flask w-6" aria-hidden="true"></i> Science & Engineering</li>
                        <li class="flex items-center"><i class="fas fa-laptop-code w-6" aria-hidden="true"></i> ICT Club</li>
                    </ul>
                </div>
            </div>

            <!-- Arts & Culture -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="text-yellow-500 mb-4" aria-hidden="true">
                        <i class="fas fa-palette text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4">Arts & Culture</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-theater-masks w-6" aria-hidden="true"></i> Drama Club</li>
                        <li class="flex items-center"><i class="fas fa-music w-6" aria-hidden="true"></i> Music Club</li>
                        <li class="flex items-center"><i class="fas fa-paint-brush w-6" aria-hidden="true"></i> Arts Club</li>
                    </ul>
                </div>
            </div>

            <!-- Service & Leadership -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="text-yellow-500 mb-4" aria-hidden="true">
                        <i class="fas fa-hands-helping text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4">Service & Leadership</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-heart w-6" aria-hidden="true"></i> Charity Club</li>
                        <li class="flex items-center"><i class="fas fa-users w-6" aria-hidden="true"></i> Leo Club</li>
                        <li class="flex items-center"><i class="fas fa-cross w-6" aria-hidden="true"></i> Religious Societies</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="/student-life" class="inline-flex items-center px-8 py-3 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition-colors duration-300" aria-label="View all clubs and societies">
                View All Clubs
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- News & Events Section -->
<section aria-labelledby="news-heading" class="py-16 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 id="news-heading" class="text-4xl font-bold text-blue-900 mb-4">Latest News & Events</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto mb-8" aria-hidden="true"></div>
            <p class="text-xl text-gray-600">Stay updated with the latest happenings at Uasin Gishu High School</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- News Item 1 -->
            <article class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2">
                <div class="relative">
                    <img src="{{ asset('assets/images/student2.jpg') }}" alt="Student Council" class="w-full h-56 object-cover" width="400" height="224" loading="lazy">
                    <div class="absolute top-4 right-4 bg-blue-900 text-white px-4 py-1 rounded-full text-sm font-semibold">
                        FEB 2025
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-blue-900 mb-3 hover:text-green-600 transition-colors">Student Council Elections</h3>
                    <p class="text-gray-600 mb-4">Celebrating democracy in action as students elect their new council representatives.</p>
                    <a href="#" class="inline-flex items-center text-blue-900 hover:text-green-600 transition-colors" aria-label="Read more about Student Council Elections">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- News Item 2 -->
            <article class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2">
                <div class="relative">
                    <img src="{{ asset('images/hero/feliphe-schiarolli-hes6nUC1MVc-unsplash.jpg') }}" alt="Sports Day" class="w-full h-56 object-cover" width="400" height="224" loading="lazy">
                    <div class="absolute top-4 right-4 bg-green-600 text-white px-4 py-1 rounded-full text-sm font-semibold">
                        JAN 2025
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-blue-900 mb-3 hover:text-green-600 transition-colors">Annual Sports Day</h3>
                    <p class="text-gray-600 mb-4">Students showcase their athletic prowess in various sports competitions.</p>
                    <a href="#" class="inline-flex items-center text-blue-900 hover:text-green-600 transition-colors" aria-label="Read more about Annual Sports Day">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- News Item 3 -->
            <article class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2">
                <div class="relative">
                    <img src="{{ asset('images/hero/academics.jpg') }}" alt="Academic Excellence" class="w-full h-56 object-cover" width="400" height="224" loading="lazy">
                    <div class="absolute top-4 right-4 bg-yellow-500 text-white px-4 py-1 rounded-full text-sm font-semibold">
                        DEC 2024
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-blue-900 mb-3 hover:text-green-600 transition-colors">Academic Excellence</h3>
                    <p class="text-gray-600 mb-4">Our students achieve outstanding results in national examinations.</p>
                    <a href="#" class="inline-flex items-center text-blue-900 hover:text-green-600 transition-colors" aria-label="Read more about Academic Excellence">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </article>
        </div>

        <div class="text-center mt-12">
            <a href="/news" class="inline-flex items-center px-8 py-3 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition-colors duration-300" aria-label="View all news">
                View All News
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Admissions Section -->
<section aria-labelledby="admissions-heading" class="relative py-20 bg-gradient-to-br from-blue-900 via-blue-800 to-green-900">
    <!-- Decorative Elements -->
    <div class="absolute inset-0 opacity-10" aria-hidden="true">
        <div class="absolute top-0 left-0 w-40 h-40 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-32 h-32 bg-white rounded-full translate-x-1/2 translate-y-1/2"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-2xl overflow-hidden">
            <div class="grid md:grid-cols-2">
                <!-- Content Side -->
                <div class="p-8 md:p-12">
                    <h2 id="admissions-heading" class="text-4xl font-bold text-blue-900 mb-6">Join Our School Community</h2>
                    <p class="text-lg text-gray-700 mb-8">Start your journey with us and discover the endless possibilities that await at Uasin Gishu High School.</p>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-full flex items-center justify-center" aria-hidden="true">
                                <i class="fas fa-graduation-cap text-green-600"></i>
                            </div>
                            <span class="text-gray-700 ml-4">Comprehensive academic programs</span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center" aria-hidden="true">
                                <i class="fas fa-users text-blue-600"></i>
                            </div>
                            <span class="text-gray-700 ml-4">Experienced teaching staff</span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center" aria-hidden="true">
                                <i class="fas fa-desktop text-purple-600"></i>
                            </div>
                            <span class="text-gray-700 ml-4">Modern learning facilities</span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center" aria-hidden="true">
                                <i class="fas fa-futbol text-yellow-600"></i>
                            </div>
                            <span class="text-gray-700 ml-4">Diverse extracurricular activities</span>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="/admissions" class="inline-flex items-center px-6 py-3 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition-colors duration-300" aria-label="Apply for admission">
                            <span>Apply Now</span>
                            <i class="fas fa-arrow-right ml-2" aria-hidden="true"></i>
                        </a>
                        <a href="/about" class="inline-flex items-center px-6 py-3 bg-white text-blue-900 rounded-lg border-2 border-blue-900 hover:bg-blue-50 transition duration-300" aria-label="Learn more about our school">
                            <span>Learn More</span>
                            <i class="fas fa-info-circle ml-2" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <!-- Image Side -->
                <div class="relative hidden md:block">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-900 to-green-900 opacity-90" aria-hidden="true"></div>
                    <img src="{{ asset('images/hero/campus-life.jpg') }}" alt="Campus Life" class="w-full h-full object-cover" loading="lazy">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white p-6">
                            <div class="text-5xl font-bold mb-4">2024</div>
                            <div class="text-xl">Admissions Open</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-12 text-white text-center">
            <div>
                <div class="text-4xl font-bold mb-2">99%</div>
                <div class="text-sm opacity-90">Certification Rate</div>
            </div>
            <div>
                <div class="text-4xl font-bold mb-2">50+</div>
                <div class="text-sm opacity-90">Extra-Curricular Activities</div>
            </div>
            <div>
                <div class="text-4xl font-bold mb-2">25:1</div>
                <div class="text-sm opacity-90">Student-Teacher Ratio</div>
            </div>
            <div>
                <div class="text-4xl font-bold mb-2">95%</div>
                <div class="text-sm opacity-90">University Acceptance</div>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Section -->
<section aria-labelledby="leadership-heading" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 id="leadership-heading" class="text-4xl font-bold text-blue-900 mb-4">Our Leadership</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto mb-8" aria-hidden="true"></div>
            <p class="text-xl text-gray-600">Meet the dedicated team leading Uasin Gishu High School</p>
        </div>

        <!-- Senior Leadership - 4 Columns -->
        <div class="grid md:grid-cols-4 gap-8 mb-16">
            <!-- Principal -->
            <div class="bg-white rounded-xl shadow-lg p-6 transform transition-all duration-300 hover:-translate-y-2">
                <div class="relative mb-6">
                    <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-blue-900">
                        <img src="{{ asset('assets/images/principal.jpg') }}" alt="Principal" class="w-full h-full object-cover" width="128" height="128" loading="lazy">
                    </div>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-2">Dr. Hosea</h3>
                <p class="text-green-600 font-semibold mb-2">Principal</p>
                <p class="text-gray-600 text-sm">Ph.D. in Educational Leadership</p>
            </div>

            <!-- Deputy Principal 1 -->
            <div class="bg-white rounded-xl shadow-lg p-6 transform transition-all duration-300 hover:-translate-y-2">
                <div class="relative mb-6">
                    <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-green-600">
                        <img src="{{ asset('assets/images/deputy1.jpg') }}" alt="Deputy Principal 1" class="w-full h-full object-cover" width="128" height="128" loading="lazy">
                    </div>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-2">Mrs. Bush</h3>
                <p class="text-green-600 font-semibold mb-2">Deputy Principal - Academics</p>
                <p class="text-gray-600 text-sm">M.Ed. in Curriculum Development</p>
            </div>

            <!-- Deputy Principal 2 -->
            <div class="bg-white rounded-xl shadow-lg p-6 transform transition-all duration-300 hover:-translate-y-2">
                <div class="relative mb-6">
                    <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-green-600">
                        <img src="{{ asset('assets/images/deputy2.jpg') }}" alt="Deputy Principal 2" class="w-full h-full object-cover" width="128" height="128" loading="lazy">
                    </div>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-2">Mr. David Johnson</h3>
                <p class="text-green-600 font-semibold mb-2">Deputy Principal - Administration</p>
                <p class="text-gray-600 text-sm">M.Ed. in Educational Management</p>
            </div>

            <!-- Board Chairman -->
            <div class="bg-white rounded-xl shadow-lg p-6 transform transition-all duration-300 hover:-translate-y-2">
                <div class="relative mb-6">
                    <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-yellow-500">
                        <img src="{{ asset('assets/images/chairman.jpg') }}" alt="Board Chairman" class="w-full h-full object-cover" width="128" height="128" loading="lazy">
                    </div>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-2">Prof. Michael Brown</h3>
                <p class="text-green-600 font-semibold mb-2">Board Chairman</p>
                <p class="text-gray-600 text-sm">Ph.D. in Educational Policy</p>
            </div>
        </div>

        <!-- Department Heads - 6 Columns -->
        <div class="grid md:grid-cols-6 gap-6">
            @foreach(['Sciences', 'Languages', 'Mathematics', 'Humanities', 'Technical', 'Arts'] as $department)
            <div class="bg-white rounded-xl shadow-lg p-4 transform transition-all duration-300 hover:-translate-y-2">
                <div class="relative mb-4">
                    <div class="w-20 h-20 mx-auto rounded-full overflow-hidden border-2 border-gray-300">
                        <img src="{{ asset("assets/images/department-head-{$department}.jpg") }}" alt="Head of {{ $department }}" class="w-full h-full object-cover" width="80" height="80" loading="lazy">
                    </div>
                </div>
                <h4 class="text-lg font-bold text-blue-900 mb-1">Head of {{ $department }}</h4>
                <p class="text-sm text-gray-600">Department</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section aria-labelledby="testimonials-heading" class="py-16 bg-[#1b5454]">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 id="testimonials-heading" class="text-4xl font-bold text-white mb-4">What Our Community Says</h2>
            <div class="w-24 h-1 bg-yellow-400 mx-auto mb-8" aria-hidden="true"></div>
            <p class="text-xl text-white">Voices from our vibrant school community</p>
        </div>

        <!-- Testimonials Slider -->
        <div class="swiper testimonialSwiper max-w-6xl mx-auto" role="region" aria-roledescription="carousel">
            <div class="swiper-wrapper">
                <!-- Testimonial Cards -->
                <div class="swiper-slide" role="group" aria-roledescription="slide">
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <div class="relative">
                            <div class="absolute -top-16 left-1/2 transform -translate-x-1/2">
                                <div class="w-24 h-24 rounded-full border-4 border-yellow-400 overflow-hidden bg-white">
                                    <img src="{{ asset('assets/images/parent1.jpg') }}" alt="Parent" class="w-full h-full object-cover" width="96" height="96" loading="lazy">
                                </div>
                                <div class="absolute -top-2 right-0 bg-yellow-400 text-[#1b5454] text-sm font-bold px-3 py-1 rounded-full">
                                    Parent
                                </div>
                            </div>
                            <div class="pt-12 text-center">
                                <blockquote class="relative text-gray-700 text-lg mb-6 leading-relaxed">
                                    "The school's commitment to excellence has helped shape my child's future in remarkable ways. The dedicated teachers and supportive environment make all the difference."
                                </blockquote>
                                <footer>
                                    <h4 class="text-[#1b5454] font-bold text-xl">James Kipruto</h4>
                                    <img src="{{ asset('assets/images/james.jpg') }}" alt="James Kipruto" class="w-24 h-24 mx-auto rounded-full border-4 border-yellow-400 mb-4" width="96" height="96" loading="lazy">
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide" role="group" aria-roledescription="slide">
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <div class="relative">
                            <div class="absolute -top-16 left-1/2 transform -translate-x-1/2">
                                <div class="w-24 h-24 rounded-full border-4 border-yellow-400 overflow-hidden bg-white">
                                    <img src="{{ asset('assets/images/alumni1.jpg') }}" alt="Alumni" class="w-full h-full object-cover" width="96" height="96" loading="lazy">
                                </div>
                                <div class="absolute -top-2 right-0 bg-yellow-400 text-[#1b5454] text-sm font-bold px-3 py-1 rounded-full">
                                    Alumni
                                </div>
                            </div>
                            <div class="pt-12 text-center">
                                <blockquote class="relative text-gray-700 text-lg mb-6 leading-relaxed">
                                    "The values and education I received at UGHS have been instrumental in my career success. The school prepared me well for university and beyond."
                                </blockquote>
                                <footer>
                                    <h4 class="text-[#1b5454] font-bold text-xl">Peter Kimani</h4>
                                    <img src="{{ asset('assets/images/peter.jpg') }}" alt="Peter Kimani" class="w-24 h-24 mx-auto rounded-full border-4 border-yellow-400 mb-4" width="96" height="96" loading="lazy">
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide" role="group" aria-roledescription="slide">
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <div class="relative">
                            <div class="absolute -top-16 left-1/2 transform -translate-x-1/2">
                                <div class="w-24 h-24 rounded-full border-4 border-yellow-400 overflow-hidden bg-white">
                                    <img src="{{ asset('assets/images/student1.jpg') }}" alt="Student" class="w-full h-full object-cover" width="96" height="96" loading="lazy">
                                </div>
                                <div class="absolute -top-2 right-0 bg-yellow-400 text-[#1b5454] text-sm font-bold px-3 py-1 rounded-full">
                                    Student
                                </div>
                            </div>
                            <div class="pt-12 text-center">
                                <blockquote class="relative text-gray-700 text-lg mb-6 leading-relaxed">
                                    "The diverse range of activities and clubs has helped me discover my passions. Our teachers make learning engaging and fun every day."
                                </blockquote>
                                <footer>
                                    <h4 class="text-[#1b5454] font-bold text-xl">Mary Chepkemoi</h4>
                                    <img src="{{ asset('assets/images/mary.jpg') }}" alt="Mary Chepkemoi" class="w-24 h-24 mx-auto rounded-full border-4 border-yellow-400 mb-4" width="96" height="96" loading="lazy">
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide" role="group" aria-roledescription="slide">
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <div class="relative">
                            <div class="absolute -top-16 left-1/2 transform -translate-x-1/2">
                                <div class="w-24 h-24 rounded-full border-4 border-yellow-400 overflow-hidden bg-white">
                                    <img src="{{ asset('assets/images/student2.jpg') }}" alt="Student" class="w-full h-full object-cover" width="96" height="96" loading="lazy">
                                </div>
                                <div class="absolute -top-2 right-0 bg-yellow-400 text-[#1b5454] text-sm font-bold px-3 py-1 rounded-full">
                                    Student
                                </div>
                            </div>
                            <div class="pt-12 text-center">
                                <blockquote class="relative text-gray-700 text-lg mb-6 leading-relaxed">
                                    "The diverse range of activities and clubs has helped me discover my passions. Our teachers make learning engaging and fun every day."
                                </blockquote>
                                <footer>
                                    <h4 class="text-[#1b5454] font-bold text-xl">Mary Chepkemoi</h4>
                                    <img src="{{ asset('assets/images/mary.jpg') }}" alt="Mary Chepkemoi" class="w-24 h-24 mx-auto rounded-full border-4 border-yellow-400 mb-4" width="96" height="96" loading="lazy">
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Navigation and Pagination -->
            <div class="swiper-pagination" aria-label="Slide pagination"></div>
            <div class="swiper-button-prev" aria-label="Previous slide"></div>
            <div class="swiper-button-next" aria-label="Next slide"></div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .testimonialSwiper {
        padding: 50px 0;
    }
    .testimonialSwiper .swiper-slide {
        height: auto;
    }
    .swiper-button-next,
    .swiper-button-prev {
        color: #facc15 !important;
        z-index: 10 !important;
    }
    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 24px !important;
    }
    .swiper-pagination {
        z-index: 10 !important;
        bottom: 0 !important;
    }
    .swiper-pagination-bullet {
        background: #facc15 !important;
    }
</style>
@endpush

</main>
@endsection