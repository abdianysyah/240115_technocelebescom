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
                        <p class="text-end" style="color: gray" data-aos="fade-left" data-aos-duration="1100">Dipost pada 25 Januari 2024</p>
                    </header>

                    <!-- image -->
                    <figure class="mb-4" data-aos="fade-up" data-aos-duration="1100"> 
                        <img src="https://cdn.eraspace.com/pub/media/mageplaza/blog/post/m/e/medium.com_-1024x684.jpg" class="img-fluid rounded" alt="...">
                    </figure>

                    <!-- daftar isi -->
                    <div>
                        <h4 class="fw-bolder">Daftar Isi</h4>
                        <div class="">
                            <ul>
                                <li><a href="#" class="link-dark">Apa itu IDE(Integrated Development Environment)?</a></li>
                                <li>5 Rekomendasi IDE
                                    <ol>
                                        <li><a href="#" class="link-dark">Visual Studio Code</a></li>
                                        <li><a href="#" class="link-dark">Sublime Text</a></li>
                                        <li><a href="#" class="link-dark">IntelliJ IDEA</a></li>
                                        <li><a href="#" class="link-dark">Netbeans</a></li>
                                        <li><a href="#" class="link-dark">Notpad++</a></li>
                                    </ol>
                                </li>
                                <li><a href="#" class="link-dark">Tips dan Trik Memilih IDE</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- isi -->
                    <section class="mb-5 p-2">
                        <p> Seorang programmer atau pengembang website tentunya membutuhkan peralatan yang 
                            bisa digunakan untuk mengembangkan dan membangun websitenya. Apabila untuk melakukan analogi, 
                            maka seorang programmer bisa disebut dengan pekerja bangunan dan alat untuk membangun bangunannya 
                            disebut dengan text editor.
                        </p>
                        <p> Melalui adanya text editor, seorang programmer bisa menyusun baris baris kode saat melakukan 
                            pengodingan, sehingga susunan baris tersebut dapat tersusun menjadi aplikasi yang baik. Sama 
                            halnya seperti pekerja bangunana yang membutuhkan alat yang bagus dan mumpuni dalam melakukan 
                            kerja-kerjanya, maka seorang programmer juga membutuhkan text editor sebagai alat yang baik, 
                            supaya kerja pengodingan dapat dilakukan dengan maksimal untuk mendapatkan hasil yang bagus juga.
                        </p>
                        <p>
                            Lalu, apa saja ya rekomendasi text editor terbaik yang dapat digunakan untuk proses ngoding? Yuk simak ulasan berikut ini!
                        </p>
                    </section>
                </article>

                <div class="row py-3">
                    <h3 data-aos="fade-up" data-aos-duration="1100">Artikel Serupa</h3>
                    <!-- card 1 -->
                    <div class="col-lg-4 col-md-6 col-12 pt-5" data-aos="fade-up" data-aos-duration="900">
                        <div class="card card-article" >
                            <img src="https://images.unsplash.com/photo-1509023464722-18d996393ca8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top rounded" alt="...">
                            <div class="card-body">
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                              <a href="" class="link-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- card 2 -->
                    <div class="col-lg-4 col-md-6 col-12 pt-5" data-aos="fade-up" data-aos-duration="900">
                        <div class="card card-article">
                            <img src="https://images.unsplash.com/photo-1509023464722-18d996393ca8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top rounded" alt="...">
                            <div class="card-body">
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                              <a href="" class="link-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- card 3 -->
                    <div class="col-lg-4 col-md-6 col-12 pt-5" data-aos="fade-up" data-aos-duration="900">
                        <div class="card card-article">
                            <img src="https://images.unsplash.com/photo-1509023464722-18d996393ca8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top rounded" alt="...">
                            <div class="card-body">
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                              <a href="" class="link-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 py-5 my-5">
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
        </div>
    </div>
</main>
@endsection