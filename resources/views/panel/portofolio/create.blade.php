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
        </div>
    </section>
    <form method="post" action = "{{route('create-portofolio-post')}}" enctype="multipart/form-data">
    {{ @csrf_field()}}
    <label>title</label>
    <input type="text" name ="title">

    <label>image</label>
    <input type="file" name ="picture">
    
    <label>isi</label>
    <input type="text" name ="content">

    <label>category</label>
    <input type="choice" name ="category">
    <button type="submit">tambah</button>
</form>
</div>
<!-- /.content-wrapper -->
@endsection