import Alpine from 'alpinejs';
import persist from '@alpinejs/persist';
import { initPerformanceOptimizations } from './performance';
import { initBrowserCompatibility } from './browser-compatibility';

// Only import accessibility testing in development mode
if (process.env.NODE_ENV !== 'production') {
    import('./accessibility-test').then(module => {
        module.initAccessibilityTesting();
    });
}

window.Alpine = Alpine;
Alpine.plugin(persist)

// Initialize browser compatibility fixes
initBrowserCompatibility();

// Initialize performance optimizations
initPerformanceOptimizations();

Alpine.start();