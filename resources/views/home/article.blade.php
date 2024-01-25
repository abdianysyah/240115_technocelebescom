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
            <div class="col-lg-8">
                <h2 class="fw-bolder mb-1" data-aos="fade-up" data-aos-duration="900">Artikel Terbaru</h2>
                <div class="card" data-aos="fade-up" data-aos-duration="900">
                    <img src="https://images.unsplash.com/photo-1509023464722-18d996393ca8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-100 h-100" alt="...">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-5">
                <h4 data-aos="fade-up" data-aos-duration="900">Artikel Terpopuler</h4>
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
                <div class="card card-article" data-aos="fade-up" data-aos-duration="800">
                    <img src="https://images.unsplash.com/photo-1509023464722-18d996393ca8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>

            <!-- card 2 -->
            <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center pt-5">
                <div class="card card-article" data-aos="fade-up" data-aos-duration="800">
                    <img src="https://images.unsplash.com/photo-1509023464722-18d996393ca8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>

            <!-- card 3 -->
            <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center pt-5">
                <div class="card card-article" data-aos="fade-up" data-aos-duration="800">
                    <img src="https://images.unsplash.com/photo-1509023464722-18d996393ca8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>

            <!-- card 4 -->
            <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center pt-5">
                <div class="card card-article" data-aos="fade-up" data-aos-duration="800">
                    <img src="https://images.unsplash.com/photo-1509023464722-18d996393ca8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>

            <!-- card 5 -->
            <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center pt-5">
                <div class="card card-article" data-aos="fade-up" data-aos-duration="800">
                    <img src="https://images.unsplash.com/photo-1509023464722-18d996393ca8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            
            <!-- card 6 -->
            <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center pt-5">
                <div class="card card-article" data-aos="fade-up" data-aos-duration="800">
                    <img src="https://images.unsplash.com/photo-1509023464722-18d996393ca8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</main>
@endsection