importScripts('cache-polyfill.js');

self.addEventListener('install', function(e) {
	e.waitUntil(
		caches.open('Omega').then(function(cache) {
			return cache.addAll([
				'index.php',
				'signin/index.php',
				'images/icons/favicon.ico',
				'images/icons/48.png',
				'images/icons/72.png',
				'images/icons/96.png',
				'images/icons/144.png',
				'images/icons/192.png',
				'images/icons/512.png',
			]);
		})
	);
});

self.addEventListener('fetch', function(event) {
	console.log(event.request.url);
	event.respondWith(
		caches.match(event.request).then(function(response) {
			return response || fetch(event.request);
		})
	);
});
