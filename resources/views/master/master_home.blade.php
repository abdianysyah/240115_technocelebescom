<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('theme/home/plugin/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/home/plugin/font-awesome-4.7.0/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('theme/home/css/style_footer.css')}}" />
</head>

<body>
    @include('layout.home.header')
    @yield('content')
    @include('layout.home.footer')

    <script src="theme/home/plugin/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>

</html>