<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'DonasiKu')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('partials.header')

    <main class="min-h-screen">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
