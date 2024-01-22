@extends('master.master_inner')
@section('content')
<main class="main">
    <!-- bread-crumb -->
    <div class="bread-crumb d-flex align-items-center w-100" style="height: 20rem">
        <div class="container py-4 text-center" data-aos="fade-up" data-aos-duration="0900">
            <h1 class="display-2 fw-bold">Service</h1>
            <ul class="text-breadcrumb list-unstyled d-flex fs-4 justify-content-center align-items-center">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="mx-2">|</li>
                <li>Service</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <header class="jumbotron text-center" data-aos="fade-up" data-aos-duration="0900">
            <div class="">
                <h1 class="display-4 mt-2">Service</h1>
                <p class="lead">Our Pricing & Plans</p>
            </div>
        </header>

        <section class="my-5">
            <div class="row justify-content-center">
                <!-- card 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12  mx-auto my-2 p-5 shadow" data-aos="fade-up" data-aos-duration="0900">
                    <div class="d-flex flex-colum align-items-center">
                        <i class="fas fa-laptop-code fa-3x mb-3"></i>
                        <h2 class="fs-4 p-2">Website</h2>
                    </div>
                    <div class="text-center fs-6">
                        <h3><sup>Rp</sup>1.000.000</h3>
                    </div>
                    <div class="service">
                        <ul class="list-unstyled mb-5 p-3">
                            <li><i class="fas fa-check p-1"></i>Wordpress, PHP (Laravel, Codeigniter), Shopify</li>
                            <li><i class="fas fa-check p-1"></i>Menggunakan API yang modern</li>
                            <li><i class="fas fa-check p-1"></i>Dilengkapi dengan keamanan</li>
                            <li><i class="fas fa-check p-1"></i>E-commerce, portal sekolah, company profile, dll</li>
                            <li><i class="fas fa-check p-1"></i>Pengerjaan yang cepat</li>
                        </ul>
                        <div class="d-grid gap-2 d-md-block text-center">
                            <button class="btn btn-primary btn-lg" type="button">Lihat Detail <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <!-- card 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12  mx-auto my-2 p-5 shadow" data-aos="fade-up" data-aos-duration="0900">
                    <div class="d-flex flex-colum align-items-center">
                        <i class="fas fa-desktop fa-3x mb-3"></i>
                        <h2 class="fs-4 p-2">Desktop Application</h2>
                    </div>
                    <div class="text-center fs-6">
                        <h3><sup>Rp</sup>1.000.000</h3>
                    </div>
                    <div class="service">
                        <ul class="list-unstyled mb-5 p-3">
                            <li><i class="fas fa-check p-1"></i>Multiplatform (Windows, Linux, Apple)</li>
                            <li><i class="fas fa-check p-1"></i>Profesional web design</li>
                            <li><i class="fas fa-check p-1"></i>Tampilan yang responsif</li>
                            <li><i class="fas fa-check p-1"></i>Keamanan yang terjamin</li>
                            <li><i class="fas fa-check p-1"></i>Pengerjaan yang cepat</li>
                        </ul>
                        <div class="d-grid gap-2 d-md-block text-center">
                            <button class="btn btn-primary btn-lg" type="button">Lihat Detail <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <!-- card 3 -->
                <div class="col-lg-4 col-md-6 col-sm-12  mx-auto my-2 p-5 shadow" data-aos="fade-up" data-aos-duration="0900">
                    <div class="d-flex flex-colum align-items-center">
                        <i class="fas fa-wifi fa-3x mb-3"></i>
                        <h2 class="fs-4 p-2">Internet of Thinks(IoT)</h2>
                    </div>
                    <div class="text-center fs-6">
                        <h3><sup>Rp</sup>3.000.000</h3>
                    </div>
                    <div class="service">
                        <ul class="list-unstyled mb-5 p-3">
                            <li><i class="fas fa-check p-1"></i>Hardware dengan kualitas terbaik</li>
                            <li><i class="fas fa-check p-1"></i>Menggunakan API yang modern</li>
                            <li><i class="fas fa-check p-1"></i>Dilengkapi dengan keamanan yang canggih</li>
                            <li><i class="fas fa-check p-1"></i>Dapat menggunakan artificial intelligence</li>
                            <li><i class="fas fa-check p-1"></i>Pengerjaan yang cepat</li>
                        </ul>
                        <div class="d-grid gap-2 d-md-block text-center">
                            <button class="btn btn-primary btn-lg" type="button">Lihat Detail <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <!-- card 4 -->
                <div class="col-lg-4 col-md-6 col-sm-12  mx-auto my-2 p-5 shadow" data-aos="fade-up" data-aos-duration="0900">
                    <div class="d-flex flex-colum align-items-center">
                        <i class="fas fa-mobile fa-3x mb-3"></i>
                        <h2 class="fs-4 p-2">Mobile Apps</h2>
                    </div>
                    <div class="text-center fs-6">
                        <h3><sup>Rp</sup>3.000.000</h3>
                    </div>
                    <div class="service">
                        <ul class="list-unstyled mb-5 p-3">
                            <li><i class="fas fa-check p-1"></i>Menggunakan bahasa Java</li>
                            <li><i class="fas fa-check p-1"></i>Design yang menarik</li>
                            <li><i class="fas fa-check p-1"></i>Menggunakan API yang modern</li>
                            <li><i class="fas fa-check p-1"></i>Keamanan yang terjamin</li>
                            <li><i class="fas fa-check p-1"></i>Pengerjaan yang cepat</li>
                        </ul>
                        <div class="d-grid gap-2 d-md-block text-center">
                            <button class="btn btn-primary btn-lg" type="button">Lihat Detail <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <!-- card 5 -->
                <div class="col-lg-4 col-md-6 col-sm-12  mx-auto my-2 p-5 shadow" data-aos="fade-up" data-aos-duration="0900">
                    <div class="d-flex flex-colum align-items-center">
                        <i class="fas fa-chart-bar fa-3x mb-3"></i>
                        <h2 class="fs-4 p-2">IT Consultant</h2>
                    </div>
                    <div class="text-center fs-6">
                        <h3><sup>Rp</sup>499.000</h3>
                    </div>
                    <div class="service">
                        <ul class="list-unstyled mb-5 p-3">
                            <li><i class="fas fa-check p-1"></i>Menggunakan bahasa Java</li>
                            <li><i class="fas fa-check p-1"></i>Design yang menarik</li>
                            <li><i class="fas fa-check p-1"></i>Menggunakan API yang modern</li>
                            <li><i class="fas fa-check p-1"></i>Keamanan yang terjamin</li>
                            <li><i class="fas fa-check p-1"></i>Pengerjaan yang cepat</li>
                        </ul>
                        <div class="d-grid gap-2 d-md-block text-center">
                            <button class="btn btn-primary btn-lg" type="button">Lihat Detail <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <!-- card 6 -->
                <div class="col-lg-4 col-md-6 col-sm-12  mx-auto my-2 p-5 shadow" data-aos="fade-up" data-aos-duration="0900">
                    <div class="d-flex flex-colum align-items-center">
                        <i class="fas fa-camera fa-3x mb-3"></i>
                        <h2 class="fs-4 p-2">Content Creator & Editor</h2>
                    </div>
                    <div class="text-center fs-6">
                        <h3><sup>Rp</sup>125.000</h3>
                    </div>
                    <div class="service">
                        <ul class="list-unstyled mb-5 p-3">
                            <li><i class="fas fa-check p-1"></i>Menggunakan bahasa Java</li>
                            <li><i class="fas fa-check p-1"></i>Design yang menarik</li>
                            <li><i class="fas fa-check p-1"></i>Menggunakan API yang modern</li>
                            <li><i class="fas fa-check p-1"></i>Keamanan yang terjamin</li>
                            <li><i class="fas fa-check p-1"></i>Pengerjaan yang cepat</li>
                        </ul>
                        <div class="d-grid gap-2 d-md-block text-center">
                            <button class="btn btn-primary btn-lg" type="button">Lihat Detail <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <!-- card 7 -->
                <div class="col-lg-4 col-md-6 col-sm-12  mx-auto my-2 p-5 shadow" data-aos="fade-up" data-aos-duration="0900">
                    <div class="d-flex flex-colum align-items-center">
                        <i class="fas fa-paint-brush fa-3x mb-3"></i>
                        <h2 class="fs-4 p-2">Design Digital</h2>
                    </div>
                    <div class="text-center fs-6">
                        <h3><sup>Rp</sup>49.000</h3>
                    </div>
                    <div class="service">
                        <ul class="list-unstyled mb-5 p-3">
                            <li><i class="fas fa-check p-1"></i>Menggunakan bahasa Java</li>
                            <li><i class="fas fa-check p-1"></i>Design yang menarik</li>
                            <li><i class="fas fa-check p-1"></i>Menggunakan API yang modern</li>
                            <li><i class="fas fa-check p-1"></i>Keamanan yang terjamin</li>
                            <li><i class="fas fa-check p-1"></i>Pengerjaan yang cepat</li>
                        </ul>
                        <div class="d-grid gap-2 d-md-block text-center">
                            <button class="btn btn-primary btn-lg" type="button">Lihat Detail <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <!-- card 8 -->
                <div class="col-lg-4 col-md-6 col-sm-12  mx-auto my-2 p-5 shadow" data-aos="fade-up" data-aos-duration="0900">
                    <div class="d-flex flex-colum align-items-center">
                        <i class="fas fa-network-wired fa-3x mb-3"></i>
                        <h2 class="fs-4 p-2">Jaringan</h2>
                    </div>
                    <div class="text-center fs-6">
                        <h3><sup>Rp</sup>999.000</h3>
                    </div>
                    <div class="service">
                        <ul class="list-unstyled mb-5 p-3">
                            <li><i class="fas fa-check p-1"></i>Menggunakan bahasa Java</li>
                            <li><i class="fas fa-check p-1"></i>Design yang menarik</li>
                            <li><i class="fas fa-check p-1"></i>Menggunakan API yang modern</li>
                            <li><i class="fas fa-check p-1"></i>Keamanan yang terjamin</li>
                            <li><i class="fas fa-check p-1"></i>Pengerjaan yang cepat</li>
                        </ul>
                        <div class="d-grid gap-2 d-md-block text-center">
                            <button class="btn btn-primary btn-lg" type="button">Lihat Detail <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <!-- card 9 -->
                <div class="col-lg-4 col-md-6 col-sm-12  mx-auto my-2 p-5 shadow" data-aos="fade-up" data-aos-duration="0900">
                    <div class="d-flex flex-colum align-items-center">
                        <i class="fas fa-robot fa-3x mb-3"></i>
                        <h2 class="fs-4 p-2">Machine Learning</h2>
                    </div>
                    <div class="text-center fs-6">
                        <h3><sup>Rp</sup>3.000.000</h3>
                    </div>
                    <div class="service">
                        <ul class="list-unstyled mb-5 p-3">
                            <li><i class="fas fa-check p-1"></i>Menggunakan bahasa Java</li>
                            <li><i class="fas fa-check p-1"></i>Design yang menarik</li>
                            <li><i class="fas fa-check p-1"></i>Menggunakan API yang modern</li>
                            <li><i class="fas fa-check p-1"></i>Keamanan yang terjamin</li>
                            <li><i class="fas fa-check p-1"></i>Pengerjaan yang cepat</li>
                        </ul>
                        <div class="d-grid gap-2 d-md-block text-center">
                            <button class="btn btn-primary btn-lg" type="button">Lihat Detail <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <!-- card 10 -->
                <div class="col-lg-4 col-md-6 col-sm-12  mx-auto my-2 p-5 shadow" data-aos="fade-up" data-aos-duration="0900">
                    <div class="d-flex flex-colum align-items-center">
                        <i class="fas fa-wrench fa-3x mb-3"></i>
                        <h2 class="fs-4 p-2">Pemeliharaan Hardware</h2>
                    </div>
                    <div class="text-center fs-6">
                        <h3><sup>Rp</sup>125.000</h3>
                    </div>
                    <div class="service">
                        <ul class="list-unstyled mb-5 p-3">
                            <li><i class="fas fa-check p-1"></i>Menggunakan bahasa Java</li>
                            <li><i class="fas fa-check p-1"></i>Design yang menarik</li>
                            <li><i class="fas fa-check p-1"></i>Menggunakan API yang modern</li>
                            <li><i class="fas fa-check p-1"></i>Keamanan yang terjamin</li>
                            <li><i class="fas fa-check p-1"></i>Pengerjaan yang cepat</li>
                        </ul>
                        <div class="d-grid gap-2 d-md-block text-center">
                            <button class="btn btn-primary btn-lg" type="button">Lihat Detail <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection