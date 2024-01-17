<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('theme/home/plugin/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    @include('layout.home.header')
    @yield('content')
    @include('layout.home.footer')

    <script src="theme/home/plugin/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>
</html>