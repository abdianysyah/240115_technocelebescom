@extends('master.master_inner')
@section('content')
<main class="main">
    <!-- bread-crumb -->
    <div class="bread-crumb d-flex align-items-center w-100" style="height: 20rem">
        <div class="container py-4 text-center" data-aos="fade-up" data-aos-duration="0900">
            <h1 class="display-2 fw-bold">About Us</h1>
            <ul class="text-breadcrumb list-unstyled d-flex fs-4 justify-content-center align-items-center">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="mx-2">|</li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
    <!-- section tentang -->
    <div class="p-5">
        <!-- Jumbotron -->
        <div class="jumbotron" data-aos="fade-up" data-aos-duration="1100">
            <div class="container">
                <h1 class="display-6 fw-bold" style="color: #003853;">Selamat Datang di CV Techno Celebes</h1>
                <p class="lead text-secondary">Bergerak di bidang teknologi informasi sejak 2013.</p>
            </div>
        </div>

        <!-- About Section -->
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1100">
                    <h2>Tentang Kami</h2>
                    <p class="text-secondary">CV Techno Celebes adalah perusahaan teknologi informasi yang didirikan oleh Jafar Sadik S.Kom, M.Ti pada tahun 2020. Berbasis di Palu, Sulawesi Tengah.</p>
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10 col-sm-12">
                    <h2 data-aos="fade-up" data-aos-duration="1100">Layanan Kami</h2>
                    <p class="text-secondary" data-aos="fade-up" data-aos-duration="1100">CV Techno Celebes memiliki sumber daya manusia yang kompeten di bidang teknologi informasi. Terdapat berbagai bidang yang ada di CV Techno Celebes antara lain :</p>
                    <ul class="list-group ">
                        <li class="list-group-item" data-aos="fade-right" data-aos-duration="0900"><i class="fas fa-code"></i> Pembuatan Perangkat Lunak</li>
                        <li class="list-group-item" data-aos="fade-left" data-aos-duration="0900"><i class="fas fa-wrench"></i> Pemeliharaan dan Pembaharuan Perangkat Keras</li>
                        <li class="list-group-item" data-aos="fade-right" data-aos-duration="0900"><i class="fas fa-globe"></i> Pembuatan Web</li>
                        <li class="list-group-item" data-aos="fade-left" data-aos-duration="0900"><i class="fas fa-laptop"></i> IT Konsultan</li>
                        <li class="list-group-item" data-aos="fade-right" data-aos-duration="0900"><i class="fas fa-paint-brush"></i> Design Digital</li>
                        <li class="list-group-item" data-aos="fade-left" data-aos-duration="0900"><i class="fas fa-network-wired"></i> Instalasi Jaringan</li>
                        <li class="list-group-item" data-aos="fade-right" data-aos-duration="0900"><i class="fas fa-file"></i> Pembuat Konten Web</li>
                        <li class="list-group-item" data-aos="fade-left" data-aos-duration="0900"><i class="fas fa-wifi"></i> Internet of Things</li>
                        <li class="list-group-item" data-aos="fade-right" data-aos-duration="0900"><i class="fas fa-robot"></i> Machine Learning</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection