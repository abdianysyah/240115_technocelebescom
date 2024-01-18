<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Techno Celebes || Jasa Teknologi dan Informasi Kota Palu</title>
    <link rel="stylesheet" href="{{asset('theme/home/plugin/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/home/plugin/font-awesome-4.7.0/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/home/plugin/fontawesome-free/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/home/plugin/bootstrap-icon/bootstrap-icons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/home/plugin/aos/aos.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/home/plugin/bootstrap-icon/bootstrap-icons.min.css')}}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('theme/home/css/style_footer.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/home/css/home.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/home/css/style.css')}}" />
</head>

<body>
    @include('layout.home.header')
    @yield('content')
    @include('layout.home.footer')

    <!-- library plugin -->
    <script src="{{asset('theme/home/plugin/bootstrap-5.0.2-dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/home/plugin/aos/aos.js')}}"></script>
    <script src="{{asset('theme/home/plugin/jquery/jquery-3.7.1.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js" integrity="sha384-RM5tpOEd8GE6uj1t9gfrFqFl5Hly6dpb1E/B1lR9DO8z/FfYKVv/7pDCGh5PLONZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- custom js -->
    <script src="{{asset('theme/home/js/main.js')}}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>