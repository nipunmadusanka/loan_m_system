<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @include('libraries.styles')
</head>

<body>
    @auth
        @include('components.mainnav')
        @include('components.nav')


        @include('libraries.scripts')
        @yield('content')
    @else
        you are not allowed to access, please login
    @endauth
</body>

</html>
