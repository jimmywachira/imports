<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    @php
        $siteName = 'Xplore Cars Imports';
        $pageTitle = $title ?? config('app.name', $siteName);
        $pageDescription = $description ?? 'Xplore Cars Imports helps Kenyans buy premium Japanese vehicles with transparent CIF pricing, KEBS compliance, inspection reports, shipping, and customs clearing.';
        $pageKeywords = $keywords ?? 'car imports, import cars, car importers, import car dealership, car shipping, Japan car imports, Kenya car imports, Nairobi car imports';
        $pageUrl = request()->url();
        $siteUrl = config('app.url') ?: $pageUrl;
        $ogImage = asset('apple-touch-icon.png');
        $isAdmin = request()->is('admin*');
        $schema = [
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'Organization',
                    'name' => $siteName,
                    'url' => $siteUrl,
                    'logo' => $ogImage,
                    'contactPoint' => [
                        '@type' => 'ContactPoint',
                        'telephone' => '+254 757 356 989',
                        'contactType' => 'customer service',
                        'email' => 'localsays@gmail.com',
                        'areaServed' => 'KE',
                        'availableLanguage' => ['en', 'sw'],
                    ],
                ],
                [
                    '@type' => 'WebSite',
                    'name' => $siteName,
                    'url' => $siteUrl,
                    'potentialAction' => [
                        '@type' => 'SearchAction',
                        'target' => url('/cars') . '?search={search_term_string}',
                        'query-input' => 'required name=search_term_string',
                    ],
                ],
            ],
        ];
    @endphp

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $pageDescription }}">
    <meta name="keywords" content="{{ $pageKeywords }}">
    <meta name="robots" content="{{ $isAdmin ? 'noindex, nofollow' : 'index, follow' }}">
    <link rel="canonical" href="{{ $pageUrl }}">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="{{ $pageDescription }}">
    <meta property="og:url" content="{{ $pageUrl }}">
    <meta property="og:image" content="{{ $ogImage }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageTitle }}">
    <meta name="twitter:description" content="{{ $pageDescription }}">
    <meta name="twitter:image" content="{{ $ogImage }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script type="application/ld+json">
        {!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

</head>

<body class="w-full min-h-screen font-semibold flex flex-col bg-linear-to-br from-slate-100 via-white to-slate-100  dark:from-blue-950 dark:via-blue-900 dark:to-blue-800 antialiased transition-colors duration-300" style="font-family: 'Tilt Neon', cursive;">
    <!-- Navigation -->
    @include('partials.navbar')

    <!-- Main Content -->
    <div class="relative w-full flex-1">
        <main class="w-full">
            @isset($slot)
                {{ $slot }}
            @else
                @yield('content')
            @endisset
        </main>
    </div>

    <!-- Toast Notifications Placeholder -->
    <div id="toast-container" class="fixed bottom-4 right-4 z-50 pointer-events-none"></div>

    <!-- Icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
        (function () {
            const storedTheme = localStorage.getItem('theme');
            const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
            const initialTheme = storedTheme || (prefersDark ? 'dark' : 'light');

            function applyTheme(theme) {
                const isDark = theme === 'dark';
                document.documentElement.classList.toggle('dark', isDark);
                document.documentElement.setAttribute('data-theme', theme);
                localStorage.setItem('theme', theme);

                document.querySelectorAll('[data-theme-icon]').forEach((icon) => {
                    icon.setAttribute('name', isDark ? 'sunny-outline' : 'moon-outline');
                });
            }

            function bindToggle(id) {
                const button = document.getElementById(id);
                if (!button) {
                    return;
                }
                button.addEventListener('click', () => {
                    const nextTheme = document.documentElement.classList.contains('dark') ? 'light' : 'dark';
                    applyTheme(nextTheme);
                });
            }

            applyTheme(initialTheme);
            bindToggle('theme-toggle');
            bindToggle('theme-toggle-mobile');
        })();
    </script>

    @stack('scripts')
</body>
</html>
