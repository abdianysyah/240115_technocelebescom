@extends('master.master_inner')
@section('content')
<main class="main">
    <!-- bread-crumb -->
    <div class="bread-crumb d-flex align-items-center w-100" style="height: 20rem">
        <div class="container py-4 text-center" data-aos="fade-up" data-aos-duration="0900">
            <h1 class="display-2 fw-bold">Portofolio</h1>
            <ul class="text-breadcrumb list-unstyled d-flex fs-4 justify-content-center align-items-center">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="mx-2">|</li>
                <li>Portofolio</li>
            </ul>
        </div>
    </div>
</main>


<section class="porto d-flex flex-wrap">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-12  d-flex  justify-content-center">
                <div class="card card-contain satu" data-aos="fade-up" data-aos-duration="800">
                  <img src="https://images.unsplash.com/photo-1431440869543-efaf3388c585?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="w-100 h-100">
                  <div class="card-body card-desk">
                    <h3>WEBSITE</h3>
                    <h5>Website Techno Celebes</h5>
                    <p class="deskription">Mangrovis.com adalah sebuah website milik Techno Celebes yang bergerak di bidang pendidikan. Mangrovis.com adalah sebuah platform Learning Management System yang dapat digunakan oleh seluruh kalangan tanpa</p>
                    <a class="btn my-button d-flex justify-content-center align-items-center" href="">Read More<i class="bi bi-chevron-double-right"></i></a>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center">
                <div class="card card-contain dua" data-aos="fade-up" data-aos-duration="800">
                  <img src="https://images.unsplash.com/photo-1509023464722-18d996393ca8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="w-100 h-100">
                  <div class="card-body card-desk">
                    <h3>DESIGN DIGITAL</h3>
                    <h5>Design Kartu Siswa</h5>
                    <p class="deskription">Website pengadaanalkes.com adalah sebuah website yang berisi produk-produk alat kesehatan berkualitas dari klinik hingga ke rumah sakit. Tidak hanya itu saja, dengan kualitas dan harga yang sangat terjangkau</p>
                    <a class="btn my-button d-flex justify-content-center align-items-center" href="">Read More<i class="bi bi-chevron-double-right"></i></a>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center">
                <div class="card card-contain tiga" data-aos="fade-up" data-aos-duration="800">
                  <img src="https://images.unsplash.com/photo-1476842634003-7dcca8f832de?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="w-100 h-100">
                  <div class="card-body card-desk">
                    <h3>website</h3>
                    <h5>Mangrovis.com</h5>
                    <p class="deskription">Mangrovis.com adalah sebuah website milik Techno Celebes yang bergerak di bidang pendidikan. Mangrovis.com adalah sebuah platform Learning Management System yang dapat digunakan oleh seluruh kalangan tanpa</p>
                    <a class="btn my-button d-flex justify-content-center align-items-center" href="">Read More<i class="bi bi-chevron-double-right"></i></a>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center">
                <div class="card card-contain empat" data-aos="fade-up" data-aos-duration="800">
                  <img src="https://images.unsplash.com/photo-1460355976672-71c3f0a4bdac?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="w-100 h-100">
                  <div class="card-body card-desk">
                    <h3>IOT</h3>
                    <h5>Pengadaanalkes.com</h5>
                    <p class="deskription">Website pengadaanalkes.com adalah sebuah website yang berisi produk-produk alat kesehatan berkualitas dari klinik hingga ke rumah sakit. Tidak hanya itu saja, dengan kualitas dan harga yang sangat terjangkau</p>
                    <a class="btn my-button d-flex justify-content-center align-items-center" href="">Read More<i class="bi bi-chevron-double-right"></i></a>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center">
                <div class="card card-contain lima" data-aos="fade-up" data-aos-duration="800">
                  <img src="https://images.unsplash.com/photo-1705404193661-73eb21f6514a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="w-100 h-100">
                  <div class="card-body card-desk desa">
                    <h3>website</h3>
                    <h5>Mangrovis.com</h5>
                    <p class="deskription">Mangrovis.com adalah sebuah website milik Techno Celebes yang bergerak di bidang pendidikan. Mangrovis.com adalah sebuah platform Learning Management System yang dapat digunakan oleh seluruh kalangan tanpa</p>
                    <a class="btn my-button d-flex justify-content-center align-items-center" href="">Read More<i class="bi bi-chevron-double-right"></i></a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection