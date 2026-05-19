<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ __('messages.logo_text') }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        @viteReactRefresh
        @vite(['resources/css/app.css', 'resources/js/app.tsx'])
        <script>
            window.__AIG__ = {
                locale: @json(app()->getLocale()),
                path: @json(request()->path()),
                messages: @json(__('messages')),
                routes: {
                    home: @json(route('home')),
                    aboutUs: @json(route('aboutUs')),
                    programs: @json(route('programs')),
                    team: @json(route('team')),
                    impact: @json(route('impact')),
                    gallery: @json(route('gallery')),
                    contactUs: @json(route('contactUs')),
                    contactSubmit: @json(route('contact.submit')),
                    langEn: @json(url('/lang/en')),
                    langSw: @json(url('/lang/sw')),
                },
            };
        </script>
    </head>
    <body>
        <div id="root"></div>
    </body>
</html>
