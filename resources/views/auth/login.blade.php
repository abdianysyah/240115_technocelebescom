@extends('master.master_inner')
@section('content')
<main>
    <!-- bread-crumb -->
    <div class="bread-crumb d-flex align-items-center w-100" style="height: 20rem">
        <div class="container py-4 text-center" data-aos="fade-up" data-aos-duration="0900">
            <h1 class="display-2 fw-bold">Login</h1>
            <ul class="text-breadcrumb list-unstyled d-flex fs-4 justify-content-center align-items-center">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="mx-2">|</li>
                <li>Login</li>
            </ul>
        </div>
    </div>
    <div class="container-fluid my-5" data-aos="zoom-in" data-aos-duration="1200">
        <div class="row justify-content-center">
            <div class="col-lg-6 p-3">
                <div class="card shadow p-5">
                    <div class="card-body p-1">
                        <h2 class="card-title text-center fw-bolder">Login</h2>
                        <form action="" method="">
                            {{-- <div class="input-group mb-3">
                                <label class="col-sm-2 col-form-label">Email/Username</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Email" class="form-control" placeholder="Email address">
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                            </div> --}}

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="name@example.com">
                                <label>Username</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end p-1">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>

                            <div class="alert alert-danger" role="alert">
                                Maaf username atau password yang anda masukkan salah!
                            </div>

                            {{-- <div class="text-center">
                                <p>login dengan :</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="bi bi-google"></i></button>
                                <button type="button" class="btn btn-link btn-floating mx-1"><i class="bi bi-facebook"></i></button>
                            </div> --}}

                            <div class="text-center">
                                <p>login dengan :</p>
                                <button type="button" class="btn btn-light btn-square rounded-circle"><i class="fab fa-google"></i></button> atau
                                <button type="button" class="btn btn-light btn-square rounded-circle"><i class="fab fa-github"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection