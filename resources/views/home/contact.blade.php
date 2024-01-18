@extends('master.master_inner')
@section('content')
<main>
    <!-- bread-crumb -->
    <div class="bread-crumb d-flex align-items-center w-100" style="height: 20rem">
        <div class="container py-4 text-center" data-aos="fade-up" data-aos-duration="0900">
            <h1 class="display-2 fw-bold">Contact</h1>
            <ul class="text-breadcrumb list-unstyled d-flex fs-4 justify-content-center align-items-center">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="mx-2">|</li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
    <div class="my-5">
        <div class="container-fluid" data-aos="zoom-in" data-aos-duration="1200">
            <div class="row justify-content-center">
                <div class="col-lg-6 p-3">
                    <div class="card shadow p-5">
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

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection