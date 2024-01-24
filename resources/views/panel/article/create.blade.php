@extends('master.master_admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard v2</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v2</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-floating my-3">
                          <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                          <label for="floatingInput">Judul Article</label>
                        </div>
                        <div class="input-group mb-3">
                          <label class="input-group-text" for="inputGroupFile01">Upload</label>
                          <input type="file" class="form-control" id="inputGroupFile01" placeholder="masukkan foto">
                        </div>
                        <div class="form-floating my-3">
                          <textarea name="content" id="editor1" rows="5" cols="80" ></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>

            <!-- Textarea yang akan digantikan oleh CKEditor -->
            <textarea name="content"></textarea>
            <!-- Tombol untuk memanggil fungsi getValueFromCKEditor() -->
            <button onclick="getValueFromCKEditor()">Dapatkan Nilai CKEditor</button>

        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection