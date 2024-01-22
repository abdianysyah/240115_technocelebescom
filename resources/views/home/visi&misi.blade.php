@extends('master.master_inner')
@section('content')
<main class="main">
    <!-- bread-crumb -->
    <div class="bread-crumb d-flex align-items-center w-100" style="height: 20rem">
        <div class="container py-4 text-center" data-aos="fade-up" data-aos-duration="0900">
            <h1 class="display-2 fw-bold">Visi & Misi</h1>
            <ul class="text-breadcrumb list-unstyled d-flex fs-4 justify-content-center align-items-center">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="mx-2">|</li>
                <li>About</li>
            </ul>
        </div>
    </div>


    <div class="container p-5">

        <!-- Header Section -->
        <header class="jumbotron text-center" data-aos="fade-up" data-aos-duration="0900">
            <div class="container">
                <h1 class="display-4">Visi & Misi CV Techno Celebes</h1>
                <p class="lead">Inovatif, Terpercaya, dan Berkontribusi pada Kemajuan Teknologi Informasi.</p>
            </div>
        </header>

        <!-- Visi Section -->
        <section class="container mt-4" data-aos="fade-up" data-aos-duration="0900">
            <h2 class="text-center mb-4">Visi</h2>
            <p class="lead text-center">
                Menjadi mitra teknologi terdepan yang memberikan solusi inovatif dan terpercaya,
                mendorong pertumbuhan bisnis klien, dan berkontribusi pada kemajuan teknologi informasi di Indonesia.
            </p>
        </section>

        <!-- Misi Section -->
        <section id="mission" class="container mt-5">
            <h2 class="text-center mb-4">Misi</h2>
            <div class="row justify-content-center">
                <!-- card ke 1 -->

                <div class="col-lg-5 col-md-6 col-sm-10 mx-4 my-3 shadow" style="border-radius: 30px;" data-aos="fade-up" data-aos-duration="0900">
                
                <div class="col-lg-5 col-md-6 col-sm-10 mx-4 my-3 shadow item-misi" style="border-radius: 30px;" data-aos="fade-up" data-aos-duration="0900">

                    <h2 class="fs-4 text-center mb-4">Pembuatan perangkat lunak</h2>
                    <div class="mission-item mb-4 text-center">
                        <i class="fas fa-laptop fa-5x mb-3"></i>
                        <p>Menyediakan solusi perangkat lunak yang kreatif, efisien, dan dapat disesuaikan dengan kebutuhan klien untuk meningkatkan produktivitas dan daya saing bisnis.</p>
                    </div>
                </div>
                <!-- card ke 2 -->

                <div class="col-lg-5 col-md-6 col-sm-10 mx-4 my-3 shadow" style="border-radius: 30px;" data-aos="fade-up" data-aos-duration="0900">

                <div class="col-lg-5 col-md-6 col-sm-10 mx-4 my-3 shadow item-misi" style="border-radius: 30px;" data-aos="fade-up" data-aos-duration="0900">
                
                    <h2 class="fs-4 text-center mb-4">Pemeliharaan dan Pembaharuan Perangkat Keras</h2>
                    <div class="mission-item mb-4 text-center">
                        <i class="fas fa-wrench fa-5x mb-3"></i>
                        <p>Memberikan layanan pemeliharaan rutin dan pembaharuan perangkat keras secara profesional untuk memastikan kinerja sistem yang optimal.</p>
                    </div>
                </div>
                <!-- card ke 3 -->

                <div class="col-lg-5 col-md-6 col-sm-10 mx-4 my-3 shadow" style="border-radius: 30px;" data-aos="fade-up" data-aos-duration="0900">

                <div class="col-lg-5 col-md-6 col-sm-10 mx-4 my-3 shadow item-misi" style="border-radius: 30px;" data-aos="fade-up" data-aos-duration="0900">

                    <h2 class="fs-4 text-center mb-4">Pembuatan Web</h2>
                    <div class="mission-item mb-4 text-center">
                        <i class="fas fa-code fa-5x mb-3"></i>
                        <p>Menghasilkan situs web yang responsif, estetis, dan berfokus pada pengalaman pengguna untuk mendukung keberhasilan online klien.</p>
                    </div>
                </div>
                <!-- card ke 4 -->

                <div class="col-lg-5 col-md-6 col-sm-10 mx-4 my-3 shadow" style="border-radius: 30px;" data-aos="fade-up" data-aos-duration="0900">

                <div class="col-lg-5 col-md-6 col-sm-10 mx-4 my-3 shadow item-misi" style="border-radius: 30px;" data-aos="fade-up" data-aos-duration="0900">

                    <h2 class="fs-4 text-center mb-4">IT Konsultan</h2>
                    <div class="mission-item mb-4 text-center">
                        <i class="fas fa-chart-bar fa-5x mb-3"></i>
                        <p>Menyediakan konsultasi IT yang komprehensif, membantu klien dalam merancang dan mengimplementasikan strategi teknologi informasi yang efektif.</p>
                    </div>
                </div>
                <!-- card ke 5 -->

                <div class="col-lg-5 col-md-6 col-sm-10 mx-4 my-3 shadow" style="border-radius: 30px;" data-aos="fade-up" data-aos-duration="0900">

                <div class="col-lg-5 col-md-6 col-sm-10 mx-4 my-3 shadow item-misi" style="border-radius: 30px;" data-aos="fade-up" data-aos-duration="0900">

                    <h2 class="fs-4 text-center mb-4">Design Digital</h2>
                    <div class="mission-item mb-4 text-center">
                        <i class="fas fa-paint-brush fa-5x mb-3"></i>
                        <p>Menghadirkan desain digital yang menarik dan menciptakan identitas merek yang kuat untuk memperkuat kehadiran online klien.</p>
                    </div>
                </div>
                <!-- card ke 6 -->

                <div class="col-lg-5 col-md-6 col-sm-10 mx-4 my-3 shadow" style="border-radius: 30px;" data-aos="fade-up" data-aos-duration="0900">

                <div class="col-lg-5 col-md-6 col-sm-10 mx-4 my-3 shadow item-misi" style="border-radius: 30px;" data-aos="fade-up" data-aos-duration="0900">

                    <h2 class="fs-4 text-center mb-4">Instalasi Jaringan</h2>
                    <div class="mission-item mb-4 text-center">
                        <i class="fas fa-network-wired fa-5x mb-3"></i>
                        <p>Merancang dan mengimplementasikan solusi instalasi jaringan yang andal, aman, dan efisien untuk mendukung konektivitas bisnis.</p>
                    </div>
                </div>
                <!-- card ke 7 -->

                <div class="col-lg-5 col-md-6 col-sm-10 mx-4 my-3 shadow" style="border-radius: 30px;" data-aos="fade-up" data-aos-duration="0900">

                <div class="col-lg-5 col-md-6 col-sm-10 mx-4 my-3 shadow item-misi" style="border-radius: 30px;" data-aos="fade-up" data-aos-duration="0900">

                    <h2 class="fs-4 text-center mb-4">Pembuat Konten Web</h2>
                    <div class="mission-item mb-4 text-center">
                        <i class="fas fa-file fa-5x mb-3"></i>
                        <p>Menghasilkan konten web berkualitas tinggi yang menarik dan relevan, membantu klien untuk menarik perhatian target audiens mereka.</p>
                    </div>
                </div>
                <!-- card ke 8 -->

                <div class="col-lg-5 col-md-6 col-sm-10 mx-4 my-3 shadow" style="border-radius: 30px;" data-aos="fade-up" data-aos-duration="0900">

                <div class="col-lg-5 col-md-6 col-sm-10 mx-4 my-3 shadow item-misi" style="border-radius: 30px;" data-aos="fade-up" data-aos-duration="0900">

                    <h2 class="fs-4 text-center mb-4">Internet of Things (IoT)</h2>
                    <div class="mission-item mb-4 text-center">
                        <i class="fas fa-wifi fa-5x mb-3"></i>
                        <p>Membangun solusi IoT yang inovatif, terkoneksi, dan dapat dioptimalkan untuk mendukung transformasi digital klien.</p>
                    </div>
                </div>
                <!-- card ke 9 -->

                <div class="col-lg-5 col-md-6 col-sm-10 mx-4 my-3 shadow" style="border-radius: 30px;" data-aos="fade-up" data-aos-duration="0900">

                <div class="col-lg-5 col-md-6 col-sm-10 mx-4 my-3 shadow item-misi" style="border-radius: 30px;" data-aos="fade-up" data-aos-duration="0900">

                    <h2 class="fs-4 text-center mb-4">Machine Learning</h2>
                    <div class="mission-item mb-4 text-center">
                        <i class="fas fa-robot fa-5x mb-3"></i>
                        <p> Menyediakan layanan machine learning untuk menganalisis data, memberikan wawasan mendalam, dan mengimplementasikan solusi cerdas untuk memajukan bisnis.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection