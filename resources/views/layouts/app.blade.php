<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Laravel 10 tutorial</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('layouts.header')

    <div class="content-center">
        {{ $slot }}
    </div>

    @include('layouts.footer')

    @vite('resources/js/app.js')
</body>

</html>
