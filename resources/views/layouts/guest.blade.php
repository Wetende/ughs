<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title', 'UGHS Portal')</title>
        
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Livewire Styles -->
        @livewireStyles
        
        <!-- Custom Styles -->
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
            
            /* Fix dropdown styling */
            select, select option {
                background-color: white !important;
                color: #333 !important;
            }
            
            /* Override any Livewire or component styles */
            select.form-select {
                background-color: white !important;
                color: #333 !important;
            }
            
            /* Fix dropdown option styling */
            select.form-select option {
                background-color: white !important;
                color: #333 !important;
                padding: 8px;
            }
            
            /* Fix dropdown hover state */
            select.form-select option:hover,
            select.form-select option:focus,
            select.form-select option:active {
                background-color: #f3f4f6 !important;
                color: #333 !important;
            }
        </style>
        
        @stack('styles')
        @yield('head')
    </head>
    <body class="flex flex-col min-h-screen bg-gray-100">
        @include('partials.topbar')

        <!-- Main Content -->
        <main class="flex-grow">
            @yield('body')
        </main>

        @include('partials.bottom-bar')

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
        <!-- Livewire Scripts -->
        @livewireScripts
        
        <!-- Livewire Debug Script -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                if (typeof Livewire !== 'undefined') {
                    console.log('Livewire initialized');
                    
                    // Prevent form submissions during Livewire updates
                    Livewire.hook('message.sent', () => {
                        const forms = document.querySelectorAll('form');
                        forms.forEach(form => {
                            form.setAttribute('data-submitting', 'true');
                        });
                    });

                    Livewire.hook('message.processed', (message, component) => {
                        console.log('Message processed for component:', component?.id);
                        
                        // Re-enable forms after updates
                        const forms = document.querySelectorAll('form');
                        forms.forEach(form => {
                            form.removeAttribute('data-submitting');
                        });
                    });
                    
                    // Handle snapshot errors more gracefully
                    Livewire.hook('message.failed', (message, component) => {
                        console.error('Livewire message failed:', message);
                        
                        if (message.indexOf('Snapshot missing') > -1 || message.indexOf('Could not find Livewire component') > -1) {
                            console.log('Detected snapshot or component missing error, attempting recovery...');
                            // Wait a brief moment and reload the page instead of showing an error
                            setTimeout(() => {
                                window.location.reload();
                            }, 500);
                        }
                    });
                    
                    // Prevent removing Livewire components from DOM
                    const observer = new MutationObserver((mutations) => {
                        mutations.forEach(mutation => {
                            if (mutation.type === 'childList' && mutation.removedNodes.length) {
                                mutation.removedNodes.forEach(node => {
                                    if (node.nodeType === 1 && node.getAttribute && node.getAttribute('wire:id')) {
                                        console.warn('IMPORTANT: Livewire component about to be removed from DOM:', node.getAttribute('wire:id'));
                                        
                                        // Store component data in localStorage to aid in recovery if needed
                                        try {
                                            const componentId = node.getAttribute('wire:id');
                                            const componentData = { 
                                                id: componentId,
                                                removedAt: new Date().toISOString()
                                            };
                                            localStorage.setItem('livewire_removed_component_' + componentId, JSON.stringify(componentData));
                                        } catch (e) {
                                            console.error('Failed to store component data', e);
                                        }
                                    }
                                });
                            }
                        });
                    });
                    
                    // Start observing but with a more focused approach
                    observer.observe(document.body, { 
                        childList: true, 
                        subtree: true,
                        attributes: false,
                        characterData: false
                    });
                    
                    // Handle events from components
                    window.addEventListener('registrationComplete', function(event) {
                        const details = event.detail;
                        if (details && details.redirect) {
                            console.log('Handling redirect to:', details.redirect);
                            // Store success info in localStorage
                            localStorage.setItem('registration_success', details.message || 'Registration successful');
                            // Redirect after a brief delay
                            setTimeout(() => {
                                window.location.href = details.redirect;
                            }, 2000);
                        }
                    });
                    
                    window.addEventListener('registrationError', function(event) {
                        console.error('Registration error:', event.detail?.message);
                    });
                    
                } else {
                    console.error('Livewire is not defined');
                }
            });
        </script>
        
        @stack('scripts')
    </body>
</html>
