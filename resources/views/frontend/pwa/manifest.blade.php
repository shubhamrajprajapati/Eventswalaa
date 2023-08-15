{
"name": "{{ config('app_settings.frontend.app.full_name') }}",
"short_name": "{{ config('app_settings.frontend.app.short_name') }}",
"start_url": "{{ config('app_settings.frontend.app.manifest.start_url') }}",
"display": "{{ config('app_settings.frontend.app.manifest.display') }}",
"scope" : "{{ config('app_settings.frontend.app.manifest.scope') }}",
"background_color": "{{ config('app_settings.frontend.app.manifest.background_color') }}",
"theme_color": "{{ config('app_settings.frontend.app.manifest.theme_color') }}",
"orientation": "{{ config('app_settings.frontend.app.manifest.orientation') }}",
"icons": [
{
"src": "{{ asset('pwa/android-chrome-57x57.png') }}",
"type": "image/png",
"sizes": "57x57",
"purpose": "any maskable"
},
{
"src": "{{ asset('pwa/android-chrome-60x60.png') }}",
"type": "image/png",
"sizes": "60x60",
"purpose": "any maskable"
},
{
"src": "{{ asset('pwa/android-chrome-72x72.png') }}",
"type": "image/png",
"sizes": "72x72",
"purpose": "any maskable"
},
{
"src": "{{ asset('pwa/android-chrome-76x76.png') }}",
"type": "image/png",
"sizes": "76x76",
"purpose": "any maskable"
},
{
"src": "{{ asset('pwa/android-chrome-96x96.png') }}",
"type": "image/png",
"sizes": "96x96",
"purpose": "any maskable"
},
{
"src": "{{ asset('pwa/android-chrome-114x114.png') }}",
"type": "image/png",
"sizes": "114x114",
"purpose": "any maskable"
},
{
"src": "{{ asset('pwa/android-chrome-120x120.png') }}",
"type": "image/png",
"sizes": "120x120",
"purpose": "any maskable"
},
{
"src": "{{ asset('pwa/android-chrome-144x144.png') }}",
"type": "image/png",
"sizes": "144x144",
"purpose": "any maskable"
},
{
"src": "{{ asset('pwa/android-chrome-152x152.png') }}",
"type": "image/png",
"sizes": "152x152",
"purpose": "any maskable"
},
{
"src": "{{ asset('pwa/android-chrome-180x180.png') }}",
"type": "image/png",
"sizes": "180x180",
"purpose": "any maskable"
},
{
"src": "{{ asset('pwa/android-chrome-192x192.png') }}",
"type": "image/png",
"sizes": "192x192",
"purpose": "any maskable"
},
{
"src": "{{ asset('pwa/android-chrome-384x384.png') }}",
"type": "image/png",
"sizes": "384x384",
"purpose": "any maskable"
},
{
"src": "{{ asset('pwa/android-chrome-512x512.png') }}",
"type": "image/png",
"sizes": "512x512",
"purpose": "any maskable"
}
]
}
