<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Laravel 10 tutorial</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    @include('layouts.header')

    <div class="container">
        @yield('contents') 
    </div>
</body>
</html>