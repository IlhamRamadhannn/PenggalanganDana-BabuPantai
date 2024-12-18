<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('custom.bootstrap5')
</head>
<style>
    .background {
        background-image: url('/images/seaextend.png');
        /* background-image:rgb(245, 245, 245); */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
<body>
    <div class="background">
        @include('layout.header')

        @yield('content')

        @include('layout.footer')
    </div>
</body>
