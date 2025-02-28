/**
 * Accessibility testing utilities
 * This file is for development use only and should not be included in production
 */

/**
 * Checks for common accessibility issues
 * @returns {Object} Results of the accessibility tests
 */
export function testAccessibility() {
    const results = {
        errors: [],
        warnings: [],
        info: []
    };
    
    // Check for images without alt text
    const imagesWithoutAlt = document.querySelectorAll('img:not([alt])');
    if (imagesWithoutAlt.length > 0) {
        results.errors.push({
            type: 'Images without alt text',
            count: imagesWithoutAlt.length,
            elements: Array.from(imagesWithoutAlt)
        });
    }
    
    // Check for form inputs without labels
    const inputs = document.querySelectorAll('input, textarea, select');
    const inputsWithoutLabels = Array.from(inputs).filter(input => {
        // Skip inputs that don't need labels
        if (input.type === 'hidden' || input.type === 'submit' || input.type === 'button') {
            return false;
        }
        
        // Check if input has an id and a corresponding label
        if (input.id) {
            const label = document.querySelector(`label[for="${input.id}"]`);
            if (label) return false;
        }
        
        // Check if input is wrapped in a label
        if (input.closest('label')) return false;
        
        // Check if input has aria-label or aria-labelledby
        if (input.hasAttribute('aria-label') || input.hasAttribute('aria-labelledby')) {
            return false;
        }
        
        return true;
    });
    
    if (inputsWithoutLabels.length > 0) {
        results.errors.push({
            type: 'Form inputs without labels',
            count: inputsWithoutLabels.length,
            elements: inputsWithoutLabels
        });
    }
    
    // Check for links without text
    const linksWithoutText = Array.from(document.querySelectorAll('a')).filter(link => {
        const text = link.textContent.trim();
        const ariaLabel = link.getAttribute('aria-label');
        const ariaLabelledBy = link.getAttribute('aria-labelledby');
        const hasImage = link.querySelector('img[alt]');
        
        return !text && !ariaLabel && !ariaLabelledBy && !hasImage;
    });
    
    if (linksWithoutText.length > 0) {
        results.errors.push({
            type: 'Links without text',
            count: linksWithoutText.length,
            elements: linksWithoutText
        });
    }
    
    // Check for low contrast text (simplified check)
    const textElements = document.querySelectorAll('p, h1, h2, h3, h4, h5, h6, span, a, button, label');
    const potentialLowContrastElements = Array.from(textElements).filter(el => {
        const style = window.getComputedStyle(el);
        const color = style.color;
        const bgColor = style.backgroundColor;
        
        // Skip elements with transparent background
        if (bgColor === 'rgba(0, 0, 0, 0)' || bgColor === 'transparent') {
            return false;
        }
        
        // This is a simplified check - a real contrast check would be more complex
        // Just flagging potential issues for manual review
        return color === bgColor || (color === 'rgb(128, 128, 128)' && bgColor === 'rgb(255, 255, 255)');
    });
    
    if (potentialLowContrastElements.length > 0) {
        results.warnings.push({
            type: 'Potential low contrast text',
            count: potentialLowContrastElements.length,
            elements: potentialLowContrastElements
        });
    }
    
    // Check for missing landmarks
    const hasMain = document.querySelector('main');
    const hasNav = document.querySelector('nav');
    const hasHeader = document.querySelector('header');
    const hasFooter = document.querySelector('footer');
    
    if (!hasMain) {
        results.warnings.push({
            type: 'Missing main landmark',
            info: 'The page should have a main element to indicate the main content.'
        });
    }
    
    if (!hasNav) {
        results.warnings.push({
            type: 'Missing nav landmark',
            info: 'The page should have a nav element to indicate navigation.'
        });
    }
    
    if (!hasHeader) {
        results.info.push({
            type: 'Missing header landmark',
            info: 'Consider adding a header element for the page header.'
        });
    }
    
    if (!hasFooter) {
        results.info.push({
            type: 'Missing footer landmark',
            info: 'Consider adding a footer element for the page footer.'
        });
    }
    
    return results;
}

/**
 * Displays accessibility test results in the console
 */
export function logAccessibilityResults() {
    const results = testAccessibility();
    
    console.group('Accessibility Test Results');
    
    if (results.errors.length > 0) {
        console.error(`Found ${results.errors.length} types of accessibility errors:`);
        results.errors.forEach(error => {
            console.error(`- ${error.type}: ${error.count} instances`);
            if (error.elements) {
                console.group('Elements:');
                error.elements.forEach(el => console.error(el));
                console.groupEnd();
            }
        });
    } else {
        console.log('✓ No accessibility errors found');
    }
    
    if (results.warnings.length > 0) {
        console.warn(`Found ${results.warnings.length} types of accessibility warnings:`);
        results.warnings.forEach(warning => {
            console.warn(`- ${warning.type}: ${warning.info || (warning.count + ' instances')}`);
            if (warning.elements) {
                console.group('Elements:');
                warning.elements.forEach(el => console.warn(el));
                console.groupEnd();
            }
        });
    } else {
        console.log('✓ No accessibility warnings found');
    }
    
    if (results.info.length > 0) {
        console.info(`${results.info.length} accessibility suggestions:`);
        results.info.forEach(info => {
            console.info(`- ${info.type}: ${info.info}`);
        });
    }
    
    console.groupEnd();
    
    return results;
}

/**
 * Initializes accessibility testing
 * Only runs in development mode
 */
export function initAccessibilityTesting() {
    // Only run in development mode
    if (process.env.NODE_ENV !== 'production') {
        // Wait for page to fully load
        window.addEventListener('load', () => {
            setTimeout(logAccessibilityResults, 1000);
        });
        
        // Add to window for manual testing
        window.testAccessibility = testAccessibility;
        window.logAccessibilityResults = logAccessibilityResults;
    }
}

// Auto-initialize if this script is loaded directly
if (typeof window !== 'undefined' && process.env.NODE_ENV !== 'production') {
    window.addEventListener('DOMContentLoaded', initAccessibilityTesting);
} 