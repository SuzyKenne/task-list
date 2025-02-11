<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    {{-- blade-formatter-disable --}}

    <style type="text/tailwindcss">
    .btn{
        @apply rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 text-slate-700  ring-slate-700/10 hover:bg-slate-50;
    }
    .link{
        @apply font-medium text-gray-700 underline decoration-pink-500;
    }

    label{
        @apply block uppercase text-slate-700 mb-2
    }
    input, textarea {
        @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
    }

    .error{
        @apply text-red-500 text-sm;
    }
    </style>
    {{-- blade-formatter-enable --}}


    <title class="">Laravel 10 Task List App</title>
    @yield('styles')
</head>
<body class="container mx-auto mt-10 mb-10 max-w-lg">
    <h1 class="text-4xl text-center text-green-700 font-bold">@yield('title')</h1>
    <div>
        {{-- @if (session()->has('success')) --}}
            {{-- <div>{{ session('success') }}</div> --}}
            <div class=" relative mb-10 rounded border border-green-700 text-lg text-green-700 bg-green-100 px-4 py-3" role="alert">
                <strong class="font-bold">Success!</strong>
                <div>This is a flash message!</div>

               
            </div>
        {{-- @endif --}}
        @yield('content')
    </div>
</body>
</html>