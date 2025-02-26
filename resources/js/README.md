# UGHS Website Testing and Optimization Tools

This directory contains JavaScript utilities for testing, optimizing, and ensuring cross-browser compatibility for the UGHS website.

## Performance Optimization (`performance.js`)

Utilities for optimizing website performance:

- **Image Optimization**: Automatically defers non-critical images with lazy loading
- **CSS Loading**: Asynchronously loads non-critical CSS files
- **Link Prefetching**: Prefetches likely navigation targets for faster page transitions

Usage:

```js
import { initPerformanceOptimizations } from './performance';

// Initialize all performance optimizations
initPerformanceOptimizations();

// Or use individual functions
import { deferImages, loadCSS, prefetchLinks } from './performance';
deferImages();
loadCSS('/path/to/non-critical.css');
prefetchLinks();
```

## Browser Compatibility (`browser-compatibility.js`)

Utilities for ensuring cross-browser compatibility:

- **Polyfills**: Adds polyfills for older browsers
- **Vendor Prefixes**: Applies vendor prefixes to CSS properties
- **Browser Detection**: Detects browser and version
- **Browser-Specific Fixes**: Applies fixes for known browser issues

Usage:

```js
import { initBrowserCompatibility } from './browser-compatibility';

// Initialize all browser compatibility fixes
initBrowserCompatibility();

// Or use individual functions
import { 
  addPolyfills, 
  applyVendorPrefixes, 
  detectBrowser, 
  applyBrowserFixes 
} from './browser-compatibility';

addPolyfills();
const { browser, version } = detectBrowser();
```

## Accessibility Testing (`accessibility-test.js`)

Utilities for testing accessibility compliance (development mode only):

- **Automated Tests**: Checks for common accessibility issues
- **Console Reporting**: Displays test results in the browser console
- **Element Identification**: Identifies problematic elements for manual review

Usage:

```js
// In development mode only
import { initAccessibilityTesting } from './accessibility-test';
initAccessibilityTesting();

// Or use individual functions
import { testAccessibility, logAccessibilityResults } from './accessibility-test';
const results = testAccessibility();
logAccessibilityResults();
```

## Integration with Main Application

These utilities are automatically integrated in `app.js` and will run when the application starts.

## Manual Testing

For manual testing, the following global functions are available in the browser console (development mode only):

- `window.testAccessibility()`: Runs accessibility tests and returns results
- `window.logAccessibilityResults()`: Displays accessibility test results in the console

## Best Practices

1. **Performance**: Always lazy load below-the-fold images
2. **Compatibility**: Test on multiple browsers (Chrome, Firefox, Safari, Edge)
3. **Accessibility**: Fix all errors and warnings reported by the accessibility tests 