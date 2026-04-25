<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $portfolio['seo']['title'] ?? 'Portfolio' }}</title>
    <meta name="description" content="{{ $portfolio['seo']['description'] ?? '' }}">
    <meta name="theme-color" content="#f7f7f2">
    <meta property="og:title" content="{{ $portfolio['seo']['title'] ?? 'Portfolio' }}">
    <meta property="og:description" content="{{ $portfolio['seo']['description'] ?? '' }}">
    <meta property="og:type" content="website">
    <script>
        (() => {
            const theme = localStorage.getItem('theme');
            const dark = theme ? theme === 'dark' : window.matchMedia('(prefers-color-scheme: dark)').matches;
            document.documentElement.classList.toggle('dark', dark);
        })();
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stone-50 text-stone-900 antialiased transition-colors duration-300 dark:bg-stone-950 dark:text-stone-100">
    @yield('content')
</body>
</html>
