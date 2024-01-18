@extends('master.master_inner')
@section('content')
<main class="vh-100">
    <div class="container-fluid">
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
                                        <input type="text" class="form-control" placeholder="email address" >
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
</main>
@endsection