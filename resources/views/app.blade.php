<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-pink-50 text-gray-800">

    <!-- HEADER -->
    @include('partials.header')

    <!-- CONTENT -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- FOOTER -->
    @include('partials.footer')

</body>
</html>