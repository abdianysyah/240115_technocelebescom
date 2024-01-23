@extends('master.master_inner')
@section('content')
<main>
    <!-- bread-crumb -->
    <div class="bread-crumb d-flex align-items-center w-100" style="height: 20rem">
        <div class="container py-4 text-center" data-aos="fade-up" data-aos-duration="0900">
            <h1 class="display-2 fw-bold">Contact Us</h1>
            <ul class="text-breadcrumb list-unstyled d-flex fs-4 justify-content-center align-items-center">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="mx-2">|</li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
    <div class="my-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <!-- card form -->
                <div class="col-lg-8 mb-5 mb-lg-0 order-lg-2 shadow " data-aos="fade-left" data-aos-duration="1200">
                    <div class="cardp-5">
                        <div class="card-body p-5">
                            <h2 class="card-title text-center fw-bolder p-3">Contact Us</h2>
                            <form action="" method="">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" placeholder="full name">
                                            <label for="floatingInputGrid">Nama</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" placeholder="email address">
                                            <label for="floatingInputGrid">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="subject">
                                    <label for="floatingSubject">Subject</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="massage" style="height: 100px"></textarea>
                                    <label for="floatingPassword">Pesan</label>
                                </div>
                                <div class=" gap-2">
                                    <button type="submit" class="btn btn-contact">Kirim Pesan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- konsultasi section -->
                <div class="col-lg-4 shadow" style="background-color: #96D1F1;" data-aos="fade-right" data-aos-duration="1200">
                    <div class="p-5" style="color:white">
                        <h2 class="fs-3">Konsultasi kepada tim kami</h2>
                        <p style="color: #e1e1e1">Hubungi kami untuk informasi lebih lanjut atau ada yang perlu ditanyakan</p>
                        <div class="d-flex align-items-start">
                            <div class="border border-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background-color: none; position:absolute">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div style="margin-left: 60px;">
                                <p>Alamat: <a href="https://maps.app.goo.gl/aeyd7jycixziSCWN9" target="_blank" class="content-konsultasi">Jalan Tadulako, Kelurahan Besusu Tengah, Kecamatan Palu Timur, Kota Palu, Provinsi Sulawesi Tengah, Indonesia</a></p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start my-5">
                            <div class="border border-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background-color: none; position:absolute">
                                <i class="fas fa-phone text-white"></i>
                            </div>
                            <div style="margin-left: 60px;">
                                <p>Whatsapp: <a href="https://wa.me/+6282189705433" target="_blank" class="content-konsultasi">+62-821-8970-5433</a></p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <div class="border border-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background-color: none; position:absolute">
                                <i class="fas fa-paper-plane text-white"></i>
                            </div>
                            <div style="margin-left: 60px;">
                                <p>Email: <a href="mailto:official@techno-celebes.com" class="content-konsultasi">official@techno-celebes.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection