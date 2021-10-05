<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Fontawesome -->
        <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.0.0-beta2-web/css/all.min.css') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Table Layout -->
        <link
	    href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
	    rel="stylesheet">

    </head>
    <body class="font-sans antialiased">
        <div class="md:bg-gray-100 ">
            @include('layouts.admin-nav')

            <!-- Page Heading
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    
                </div>
            </header>  -->
            <!-- Side bar -->

            <!-- Page Content -->
            <main class="flex">
                <div class="w-1/4">
                    @include('admin.sidebar')
                </div>
                <div class="w-3/4">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>
