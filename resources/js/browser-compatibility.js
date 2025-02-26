/**
 * Cross-browser compatibility utilities
 */

/**
 * Adds polyfills for older browsers
 */
export function addPolyfills() {
    // Polyfill for Element.prototype.matches
    if (!Element.prototype.matches) {
        Element.prototype.matches = 
            Element.prototype.msMatchesSelector || 
            Element.prototype.webkitMatchesSelector;
    }
    
    // Polyfill for Element.prototype.closest
    if (!Element.prototype.closest) {
        Element.prototype.closest = function(s) {
            let el = this;
            do {
                if (el.matches(s)) return el;
                el = el.parentElement || el.parentNode;
            } while (el !== null && el.nodeType === 1);
            return null;
        };
    }
    
    // Polyfill for NodeList.prototype.forEach
    if (window.NodeList && !NodeList.prototype.forEach) {
        NodeList.prototype.forEach = Array.prototype.forEach;
    }
    
    // Polyfill for Object.assign
    if (typeof Object.assign !== 'function') {
        Object.assign = function(target) {
            if (target === null || target === undefined) {
                throw new TypeError('Cannot convert undefined or null to object');
            }
            
            const to = Object(target);
            
            for (let index = 1; index < arguments.length; index++) {
                const nextSource = arguments[index];
                
                if (nextSource !== null && nextSource !== undefined) {
                    for (const nextKey in nextSource) {
                        if (Object.prototype.hasOwnProperty.call(nextSource, nextKey)) {
                            to[nextKey] = nextSource[nextKey];
                        }
                    }
                }
            }
            
            return to;
        };
    }
}

/**
 * Adds vendor prefixes to CSS properties
 * @param {HTMLElement} element - The element to apply styles to
 * @param {string} property - The CSS property
 * @param {string} value - The CSS value
 */
export function applyVendorPrefixes(element, property, value) {
    const prefixes = ['', '-webkit-', '-moz-', '-ms-', '-o-'];
    
    prefixes.forEach(prefix => {
        element.style[prefix + property] = value;
    });
}

/**
 * Detects browser and version
 * @returns {Object} Browser information
 */
export function detectBrowser() {
    const userAgent = navigator.userAgent;
    let browser = 'Unknown';
    let version = 'Unknown';
    
    // Detect Chrome
    if (/Chrome/.test(userAgent) && !/Chromium|Edge|Edg|OPR|Opera/.test(userAgent)) {
        browser = 'Chrome';
        version = userAgent.match(/Chrome\/(\d+\.\d+)/)[1];
    }
    // Detect Firefox
    else if (/Firefox/.test(userAgent)) {
        browser = 'Firefox';
        version = userAgent.match(/Firefox\/(\d+\.\d+)/)[1];
    }
    // Detect Safari
    else if (/Safari/.test(userAgent) && !/Chrome|Chromium|Edge|Edg|OPR|Opera/.test(userAgent)) {
        browser = 'Safari';
        version = userAgent.match(/Version\/(\d+\.\d+)/)[1];
    }
    // Detect Edge
    else if (/Edge|Edg/.test(userAgent)) {
        browser = 'Edge';
        version = userAgent.match(/Edge\/(\d+\.\d+)|Edg\/(\d+\.\d+)/)[1] || userAgent.match(/Edge\/(\d+\.\d+)|Edg\/(\d+\.\d+)/)[2];
    }
    // Detect IE
    else if (/MSIE|Trident/.test(userAgent)) {
        browser = 'Internet Explorer';
        version = userAgent.match(/MSIE (\d+\.\d+)/) ? userAgent.match(/MSIE (\d+\.\d+)/)[1] : '11.0';
    }
    
    return { browser, version };
}

/**
 * Applies browser-specific fixes
 */
export function applyBrowserFixes() {
    const { browser, version } = detectBrowser();
    
    // Fix for Safari flexbox issues
    if (browser === 'Safari') {
        document.querySelectorAll('.flex').forEach(el => {
            el.style.display = '-webkit-flex';
        });
    }
    
    // Fix for IE flexbox issues
    if (browser === 'Internet Explorer') {
        document.querySelectorAll('.flex').forEach(el => {
            el.style.display = '-ms-flexbox';
        });
    }
}

/**
 * Initializes all browser compatibility fixes
 */
export function initBrowserCompatibility() {
    addPolyfills();
    applyBrowserFixes();
}

// Auto-initialize if this script is loaded directly
if (typeof window !== 'undefined') {
    window.addEventListener('DOMContentLoaded', initBrowserCompatibility);
} 