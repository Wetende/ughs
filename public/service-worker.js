// Service Worker Configuration
self.addEventListener('fetch', event => {
  // Skip POST requests entirely - don't attempt to cache them
  if (event.request.method !== 'GET') {
    return;
  }

  // Skip Livewire requests
  if (event.request.url.includes('/livewire/')) {
    return;
  }

  // For GET requests, use a network-first strategy
  event.respondWith(
    fetch(event.request)
      .then(response => {
        // Clone the response to store in cache
        const responseToCache = response.clone();
        
        // Only cache successful responses
        if (response.status === 200) {
          caches.open('v1').then(cache => {
            cache.put(event.request, responseToCache);
          });
        }
        
        return response;
      })
      .catch(() => {
        // If network request fails, try to serve from cache
        return caches.match(event.request);
      })
  );
});

// Clear old caches during activation
self.addEventListener('activate', event => {
  const cacheWhitelist = ['v1'];
  
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (cacheWhitelist.indexOf(cacheName) === -1) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
}); 