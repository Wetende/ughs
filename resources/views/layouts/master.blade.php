<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Uasin Gishu High School')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
    
    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://code.jquery.com">
    
    <!-- Fonts - Asynchronous loading with font-display: swap -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'" crossorigin>
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" crossorigin>
    </noscript>
    
    <!-- Icons - Asynchronous loading -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </noscript>
    
    <!-- Swiper CSS - Asynchronous loading -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    </noscript>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com" defer></script>
    
    <!-- Critical CSS - Inlined for faster rendering -->
    <style>
        /* Base styles */
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.5;
        }
        
        /* Navigation styles */
        .bg-\[\#22345b\] {
            background-color: #22345b;
        }
        
        /* Hero section styles */
        .swiper-container {
            width: 100%;
            height: 100%;
        }
        
        /* Swiper navigation */
        .swiper-button-next,
        .swiper-button-prev {
            color: white !important;
        }
        .swiper-pagination-bullet {
            background: white !important;
        }
        .swiper-pagination-bullet-active {
            background: #1b5454 !important;
        }
        
        /* Layout utilities */
        .container {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }
        
        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            margin-top: 0;
            font-weight: 700;
            line-height: 1.2;
        }
        
        /* Font display strategy for custom fonts */
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: swap; /* Ensures text remains visible during font loading */
            src: local('Inter Regular'), local('Inter-Regular');
        }
        
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: local('Inter Bold'), local('Inter-Bold');
        }
        
        /* Accessibility enhancements */
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }
        
        /* High contrast text utilities */
        .text-high-contrast {
            color: #ffffff !important; /* Ensures 4.5:1 contrast ratio on dark backgrounds */
        }
        
        .text-high-contrast-dark {
            color: #121212 !important; /* Ensures 4.5:1 contrast ratio on light backgrounds */
        }
        
        /* Focus styles */
        .focus-visible:focus {
            outline: 2px solid #ffcc00;
            outline-offset: 2px;
        }
        
        /* Skip to content link - accessibility feature */
        .skip-to-content {
            position: absolute;
            top: -40px;
            left: 0;
            background: #ffcc00;
            color: #000;
            padding: 8px;
            z-index: 100;
            transition: top 0.2s ease;
        }
        
        .skip-to-content:focus {
            top: 0;
        }
    </style>
    
    @yield('styles')
</head>
<body class="flex flex-col min-h-screen">
    <!-- Skip to content link for keyboard users -->
    <a href="#main-content" class="skip-to-content focus:outline-none focus:ring-2 focus:ring-yellow-400">Skip to main content</a>
    
    <!-- Screen reader announcements container -->
    <div id="sr-announcements" class="sr-only" aria-live="polite" role="status"></div>
    
    @include('partials.topbar')
    @include('partials.navigation')

    <!-- Main Content -->
    <main id="main-content" class="flex-grow" tabindex="-1">
        @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.bottom-bar')

    <!-- Scripts - Deferred loading -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @stack('scripts')
    <script defer>
        document.addEventListener('DOMContentLoaded', function() {
            // Screen reader announcement utility
            window.announceToScreenReader = function(message, politeness = 'polite') {
                const container = document.getElementById('sr-announcements');
                container.textContent = message;
                container.setAttribute('aria-live', politeness);
                
                // Reset after a short delay to allow for multiple announcements
                setTimeout(() => {
                    container.textContent = '';
                }, 3000);
            };
            
            // Mobile menu functionality
            const mobileMenuToggles = document.querySelectorAll('.mobile-menu-toggle');
            const mobileMenu = document.getElementById('mobileMenu');
            const menuButton = document.querySelector('.mobile-menu-toggle[aria-expanded]');
            
            function toggleMobileMenu() {
                const isOpen = mobileMenu.classList.contains('translate-x-0');
                
                if (isOpen) {
                    mobileMenu.classList.remove('translate-x-0');
                    menuButton.setAttribute('aria-expanded', 'false');
                    // Enable scrolling on the body
                    document.body.style.overflow = '';
                    // Announce to screen readers
                    window.announceToScreenReader('Mobile menu closed');
                } else {
                    mobileMenu.classList.add('translate-x-0');
                    menuButton.setAttribute('aria-expanded', 'true');
                    // Disable scrolling on the body when menu is open
                    document.body.style.overflow = 'hidden';
                    // Announce to screen readers
                    window.announceToScreenReader('Mobile menu opened');
                }
            }
            
            // Add event listeners to mobile menu toggle buttons
            mobileMenuToggles.forEach(button => {
                button.addEventListener('click', toggleMobileMenu);
            });
            
            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                if (mobileMenu.classList.contains('translate-x-0') && 
                    !mobileMenu.contains(event.target) && 
                    !Array.from(mobileMenuToggles).some(toggle => toggle.contains(event.target))) {
                    toggleMobileMenu();
                }
            });
            
            // Close mobile menu on escape key
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape' && mobileMenu.classList.contains('translate-x-0')) {
                    toggleMobileMenu();
                }
            });
            
            // Sticky navigation
            const nav = document.querySelector('nav');
            const navTop = nav.offsetTop;
            
            function stickyNav() {
                if (window.scrollY >= navTop) {
                    document.body.classList.add('pt-20'); // Add padding to prevent content jump
                    nav.classList.add('fixed', 'top-0', 'left-0', 'w-full', 'z-40', 'shadow-md', 'transition-all', 'duration-300');
                } else {
                    document.body.classList.remove('pt-20');
                    nav.classList.remove('fixed', 'top-0', 'left-0', 'w-full', 'z-40', 'shadow-md', 'transition-all', 'duration-300');
                }
            }
            
            window.addEventListener('scroll', stickyNav);
            
            // Set background images from data attributes
            document.querySelectorAll('[data-background-image]').forEach(function(element) {
                const imageUrl = element.getAttribute('data-background-image');
                if (imageUrl) {
                    element.style.backgroundImage = `url('${imageUrl}')`;
                }
            });

            // Improve dropdown menu keyboard accessibility
            const dropdownTriggers = document.querySelectorAll('a[aria-haspopup="true"]');
            dropdownTriggers.forEach(trigger => {
                const dropdown = trigger.nextElementSibling;
                const dropdownItems = dropdown.querySelectorAll('[role="menuitem"]');
                
                // Toggle dropdown with keyboard
                trigger.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ' || e.key === 'ArrowDown') {
                        e.preventDefault();
                        const expanded = trigger.getAttribute('aria-expanded') === 'true';
                        trigger.setAttribute('aria-expanded', !expanded);
                        
                        if (!expanded) {
                            dropdown.classList.add('opacity-100', 'visible');
                            dropdown.classList.remove('opacity-0', 'invisible');
                            dropdownItems[0].focus();
                            window.announceToScreenReader('Dropdown menu opened');
                        } else {
                            dropdown.classList.remove('opacity-100', 'visible');
                            dropdown.classList.add('opacity-0', 'invisible');
                            window.announceToScreenReader('Dropdown menu closed');
                        }
                    }
                });
                
                // Handle keyboard navigation within dropdown
                dropdownItems.forEach((item, index) => {
                    item.addEventListener('keydown', function(e) {
                        if (e.key === 'ArrowDown') {
                            e.preventDefault();
                            const nextItem = dropdownItems[index + 1] || dropdownItems[0];
                            nextItem.focus();
                        } else if (e.key === 'ArrowUp') {
                            e.preventDefault();
                            const prevItem = dropdownItems[index - 1] || dropdownItems[dropdownItems.length - 1];
                            prevItem.focus();
                        } else if (e.key === 'Escape') {
                            e.preventDefault();
                            trigger.setAttribute('aria-expanded', 'false');
                            dropdown.classList.remove('opacity-100', 'visible');
                            dropdown.classList.add('opacity-0', 'invisible');
                            trigger.focus();
                            window.announceToScreenReader('Dropdown menu closed');
                        }
                    });
                });
                
                // Close dropdown when focus leaves
                document.addEventListener('click', function(e) {
                    if (!trigger.contains(e.target) && !dropdown.contains(e.target)) {
                        trigger.setAttribute('aria-expanded', 'false');
                        dropdown.classList.remove('opacity-100', 'visible');
                        dropdown.classList.add('opacity-0', 'invisible');
                    }
                });
            });
        });
    </script>
</body>
</html>
