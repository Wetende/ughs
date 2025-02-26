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
    </style>
    
    @yield('styles')
</head>
<body class="flex flex-col min-h-screen">
    @include('partials.topbar')
    @include('partials.navigation')

    <!-- Main Content -->
    <main class="flex-grow">
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
            function toggleMobileMenu() {
                const mobileMenu = document.getElementById('mobileMenu');
                mobileMenu.classList.toggle('translate-x-0');
            }
            
            // Add event listeners to mobile menu toggle buttons
            document.querySelectorAll('.mobile-menu-toggle').forEach(button => {
                button.addEventListener('click', toggleMobileMenu);
            });
            
            // Set background images from data attributes
            document.querySelectorAll('[data-background-image]').forEach(function(element) {
                const imageUrl = element.getAttribute('data-background-image');
                if (imageUrl) {
                    element.style.backgroundImage = `url('${imageUrl}')`;
                }
            });
        });
    </script>
</body>
</html>
