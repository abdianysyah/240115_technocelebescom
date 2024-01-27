@extends('master.master_inner')
@section('content')
<main>
    <!-- bread-crumb -->
    <div class="bread-crumb d-flex align-items-center w-100" style="height: 20rem">
        <div class="container py-4 text-center" data-aos="fade-up" data-aos-duration="0900">
            <h1 class="display-2 fw-bold">Article</h1>
            <ul class="text-breadcrumb list-unstyled d-flex fs-4 justify-content-center align-items-center">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="mx-2">|</li>
                <li>Article</li>
            </ul>
        </div>
    </div>

    <div class="container p-5">
        <div class="row">
            <div class="col-lg-8 py-5">
                <h3 class="fw-bolder mb-1 p-2" data-aos="fade-up" data-aos-duration="900">Artikel Terbaru</h3>
                <div class="card" data-aos="fade-up" data-aos-duration="900">
                    <a href="#" class="link-dark">
                        <img src="https://img.okezone.com/okz/500/content/2023/12/17/54/2940303/menyikapi-teknologi-ai-dengan-hak-cipta-fFNw7XMJC7.jpg" class="w-100 h-100 rounded" alt="...">
                        <div class="card-body p-2">
                            <p class="card-text fw-bolder mb-2">Menyikapi Teknologi AI dengan Hak Cipta</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 m-auto">
                <h3 class="fs-5 fw-bolder" data-aos="fade-up" data-aos-duration="900">Artikel Terpopuler</h3>
                <div class="list-group">
                    <a href="{{route("article-single",7)}}" class="list-group-item list-group-item-action" data-aos="fade-left" data-aos-duration="0900">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">5 IDE Terbaik untuk Coding</h5>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action" data-aos="fade-left" data-aos-duration="0900">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">10 Rekomendasi Ekstension Visual Studio Code untuk Web Developer</h5>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action" data-aos="fade-left" data-aos-duration="0900">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">DBS Foundation Kembali Selenggarakan Kelas Coding Gratis</h5>
                        </div>
                      </a>
                    <a href="#" class="list-group-item list-group-item-action" data-aos="fade-left" data-aos-duration="0900">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">Era 4.0, Saatnya Anak Belajar Coding Sejak Dini Secara Fun Demi Masa Depan</h5>
                        </div>
                    </a>
                </div>
            </div>

            <!-- card 1 -->
            <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center pt-5">
                <a href="#" class="link-dark">
                    <div class="card card-article" data-aos="fade-up" data-aos-duration="0900">
                        <img src="https://asset-a.grid.id/photo/2023/10/23/chatgptjpg-20231023023424.jpg" class="card-img-top rounded" alt="...">
                        <div class="card-body">
                            <p class="card-text fw-bolder mb-1">Apa saja Inovasi Teknologi CES 2024? ChatGPT hingga Robot Pintar</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- card 2 -->
            <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center pt-5">
                <a href="#" class="link-dark">
                    <div class="card card-article" data-aos="fade-up" data-aos-duration="0900">
                        <img src="https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2024/01/25/blibli-ai-development-tim-blib-20240125104715.jpeg" class="card-img-top rounded" alt="...">
                        <div class="card-body">
                            <p class="card-text fw-bolder mb-1">Adopsi Teknologi AI, Produktivitas Solusi Retur Instan Blibli Naik 50%</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- card 3 -->
            <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center pt-5">
                <a href="#" class="link-dark">
                    <div class="card card-article" data-aos="fade-up" data-aos-duration="0900">
                        <img src="https://asset-2.tstatic.net/tribunnews/foto/bank/images/ilustrasi-belajar-dari-rumah334.jpg" class="card-img-top rounded" alt="...">
                        <div class="card-body">
                          <p class="card-text fw-bolder mb-1">Hadapi Perubahan Tren, Perguruan Tinggi Kembangkan Arsitektur Berbasis Teknologi</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- card 4 -->
            <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center pt-5">
                <a href="#" class="link-dark">
                    <div class="card card-article" data-aos="fade-up" data-aos-duration="0900">
                        <img src="https://asset-a.grid.id/photo/2023/10/23/chatgptjpg-20231023023424.jpg" class="card-img-top rounded" alt="...">
                        <div class="card-body">
                            <p class="card-text fw-bolder mb-1">Apa saja Inovasi Teknologi CES 2024? ChatGPT hingga Robot Pintar</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- card 5 -->
            <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center pt-5">
                <a href="#" class="link-dark">
                    <div class="card card-article" data-aos="fade-up" data-aos-duration="0900">
                        <img src="https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2024/01/25/blibli-ai-development-tim-blib-20240125104715.jpeg" class="card-img-top rounded" alt="...">
                        <div class="card-body">
                            <p class="card-text fw-bolder mb-1">Adopsi Teknologi AI, Produktivitas Solusi Retur Instan Blibli Naik 50%</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- card 6 -->
            <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center pt-5">
                <a href="#" class="link-dark">
                    <div class="card card-article" data-aos="fade-up" data-aos-duration="0900">
                        <img src="https://asset-2.tstatic.net/tribunnews/foto/bank/images/ilustrasi-belajar-dari-rumah334.jpg" class="card-img-top rounded" alt="...">
                        <div class="card-body">
                          <p class="card-text fw-bolder mb-1">Hadapi Perubahan Tren, Perguruan Tinggi Kembangkan Arsitektur Berbasis Teknologi</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>
@endsection