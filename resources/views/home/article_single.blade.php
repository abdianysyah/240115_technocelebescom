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
                <li>Judul Article</li>
            </ul>
        </div>
    </div>

    <div class="container p-5">
        <div class="row">
            <div class="col-lg-8">
                <article>
                    <!-- title -->
                    <header class="mb-4">
                        <h2 class="fw-bolder mb-1" data-aos="fade-up" data-aos-duration="1100">5 IDE Terbaik untuk Coding</h2>
                        <p class="text-end" style="color: gray" data-aos="fade-up" data-aos-duration="1100">Dipost pada 25 Januari 2024</p>
                    </header>

                    <!-- image -->
                    <figure class="mb-4" data-aos="fade-up" data-aos-duration="1100"> <img src="https://images.unsplash.com/photo-1509023464722-18d996393ca8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid rounded" alt="..."></figure>
                    
                    <!-- isi -->
                    <section class="mb-5 p-2">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque voluptates inventore repellendus culpa, voluptatum doloribus perferendis incidunt. Vero dolor quos distinctio minima, iure blanditiis? Expedita error dolores quis consequatur! Inventore? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum delectus et, minima inventore explicabo, aliquid ab ex non reiciendis quam distinctio qui minus dolore maxime consectetur beatae assumenda laboriosam debitis.</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo voluptatum fuga porro, ullam qui temporibus mollitia repellendus dolore consequuntur vero dicta laudantium, quo incidunt cupiditate possimus inventore laborum, sed aliquid! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut aspernatur nobis non reprehenderit reiciendis perferendis, illum autem iusto ratione. Adipisci id provident vel sint. Quae modi amet odio? Tempore, necessitatibus.</p>
                    </section>
                </article>

                <div class="row py-3">
                    <h3 data-aos="fade-up" data-aos-duration="1100">Artikel Serupa</h3>
                    <!-- card 1 -->
                    <div class="col-lg-4 col-md-6 col-12 pt-5" data-aos="fade-up" data-aos-duration="800">
                        <div class="card card-article" >
                            <img src="https://images.unsplash.com/photo-1509023464722-18d996393ca8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top rounded" alt="...">
                            <div class="card-body">
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                              <a href="" style="color: black">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- card 2 -->
                    <div class="col-lg-4 col-md-6 col-12 pt-5" data-aos="fade-up" data-aos-duration="800">
                        <div class="card card-article">
                            <img src="https://images.unsplash.com/photo-1509023464722-18d996393ca8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top rounded" alt="...">
                            <div class="card-body">
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                              <a href="" style="color: black">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- card 3 -->
                    <div class="col-lg-4 col-md-6 col-12 pt-5" data-aos="fade-up" data-aos-duration="800">
                        <div class="card card-article">
                            <img src="https://images.unsplash.com/photo-1509023464722-18d996393ca8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top rounded" alt="...">
                            <div class="card-body">
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                              <a href="" style="color: black">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mt-5">
                <h4 data-aos="fade-up" data-aos-duration="1100">Artikel Terpopuler</h4>
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
        </div>
    </div>
</main>
@endsection