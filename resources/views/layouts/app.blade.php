<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title class="">Laravel 10 Task List App</title>
    @yield('styles')
</head>
<body class="container mx-auto mt-10 mb-10 max-w-lg">
    <h1 class="text-4xl text-center text-green-700 font-bold">@yield('title')</h1>
    <div>
        @if (session()->has('success'))
            <div>{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
</body>
</html>