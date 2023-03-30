<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen">
    <!-- Define the header/nav section -->
    <header>
        @include('layouts.nav')
    </header>

    <!-- Define the content section -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Define the footer section -->
    <footer>
        @include('layouts.footer')
    </footer>

</body>

</html>
