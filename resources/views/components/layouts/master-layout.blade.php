<!DOCTYPE html>
<html lang="en" class="no-scrollbar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <title>XR</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="dark-theme bg-(--bg-primary-color) text-(--text-primary-color) no-scrollbar">
    <x-layouts.header></x-layouts.header>
    <x-misc.expanded-img-view></x-misc.expanded-img-view>
    <x-misc.ai-search-bar></x-misc.ai-search-bar>
    {{ $slot }}

    <x-layouts.footer></x-layouts.footer>
</body>

</html>
