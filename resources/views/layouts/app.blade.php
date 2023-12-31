<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'TrinityEnergy') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/front-assets/fontawesome-free-6.4.2-web/css/all.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        @font-face {
    font-family: RobotoSlab;
    src: url('{{ URL::asset('front-assets/fonts/roboto-slab/RobotoSlab-Light.ttf') }}')format(‘truetype’);
} 

 p{
    font-family: RobotoSlab;        
}
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        @font-face {
    font-family: RobotoSlab;
    src: url('{{ URL::asset('front-assets/fonts/roboto-slab/RobotoSlab-Light.ttf') }}')format(‘truetype’);
} 

 p{
    font-family: RobotoSlab;        
}


    </body>
</html>
