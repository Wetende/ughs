/**
 * Performance optimization utilities
 */

/**
 * Defers non-critical images by replacing src with data-src
 * and setting loading="lazy" attribute
 */
export function deferImages() {
    const imgElements = document.querySelectorAll('img:not([loading="eager"])');
    
    imgElements.forEach(img => {
        // Skip images that are already optimized
        if (img.hasAttribute('loading')) return;
        
        // Set loading attribute to lazy
        img.setAttribute('loading', 'lazy');
        
        // For browsers that don't support native lazy loading
        if (!('loading' in HTMLImageElement.prototype)) {
            const src = img.getAttribute('src');
            img.setAttribute('data-src', src);
            img.setAttribute('src', 'data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1 1"%3E%3C/svg%3E');
        }
    });
}

/**
 * Defers non-critical CSS by loading it asynchronously
 * @param {string} href - URL of the CSS file to load
 */
export function loadCSS(href) {
    const link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = href;
    link.media = 'print';
    link.onload = function() {
        this.media = 'all';
    };
    document.head.appendChild(link);
}

/**
 * Prefetches links that the user is likely to navigate to
 */
export function prefetchLinks() {
    // Wait until page load is complete
    window.addEventListener('load', () => {
        // Wait a bit more to ensure critical resources are loaded
        setTimeout(() => {
            const links = Array.from(document.querySelectorAll('a'))
                .filter(link => {
                    // Only prefetch internal links
                    const href = link.getAttribute('href');
                    return href && href.startsWith('/') && !href.startsWith('#');
                })
                .map(link => link.getAttribute('href'));
            
            // Get unique links
            const uniqueLinks = [...new Set(links)];
            
            // Prefetch top 5 links
            uniqueLinks.slice(0, 5).forEach(url => {
                const link = document.createElement('link');
                link.rel = 'prefetch';
                link.href = url;
                document.head.appendChild(link);
            });
        }, 2000);
    });
}

/**
 * Initializes all performance optimizations
 */
export function initPerformanceOptimizations() {
    deferImages();
    prefetchLinks();
}

// Auto-initialize if this script is loaded directly
if (typeof window !== 'undefined') {
    window.addEventListener('DOMContentLoaded', initPerformanceOptimizations);
} 