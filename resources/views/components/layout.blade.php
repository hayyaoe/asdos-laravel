<html>
    <head>
        <title> {{ $pageTitle }} </title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <x-navbar> </x-navbar>
        <x-header> {{ $message }} </x-header>
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
