<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Laravel')</title>

        @section('css_head')
            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.bunny.net">
            <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
            @vite('resources/css/app.css')
            @livewireStyles
        @show

        @section('js_head')
            @vite('resources/js/app.js')
            @livewireScripts
        @show

    </head>
    <body class="antialiased">
        <div class="relative min-h-screen">

<header class="bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            
        </div>
        <div class="flex gap-x-12">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Home</a>
            <a href="/one" class="text-sm font-semibold leading-6 text-gray-900">Task One</a>
            <a href="/two" class="text-sm font-semibold leading-6 text-gray-900">Task Two</a>
            <a href="/three" class="text-sm font-semibold leading-6 text-gray-900">Task Three</a>
        </div>
        
    </nav>

</header>


            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                @yield('content')
            </div>
        </div>

@section('js_footer')
@show        
    </body>
</html>
