@extends('master.master_admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Article Create</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Article Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid forum">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <form action="submit" action="{{ route('create-article') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating my-3">
                                <label for="floatingInput">Judul Article</label>
                                <input type="name" class="form-control" id="floatingInput" placeholder="Judul">

                        <form action="">
                            @csrf
                        <form method="post" action = "{{route('create-article-post')}}"  enctype="multipart/form-data">
                            {{ @csrf_field()}}
                            <div class="form-floating my-3">
                                <label for="floatingInput">Judul Article</label>
                                <input type="text" class="form-control" id="floatingInput" placeholder="Judul" name ="title">


                            </div>
                            <div class="drop-area text-center my-3 rounded-5" ondrop="dropHandler(event)" ondragover="dragOverHandler(event)">
                                <p class="mb-3">Drag & drop an image here</p>
                                <input type="file" id="file-input" accept="image/*" onchange="handleFileSelect(event)" class="d-none" name ="image">
                                <label for="file-input" class="btn btn-warning btn-1">Choose File</label>
                                <img id="preview-image" src="#" alt="Preview" style="display:none; max-width: 100%; margin-top: 20px;">
                            </div>
                            <div class="areas">
                                <textarea name="editor1" id="editor1" rows="10" cols="80"></textarea>
                            </div>
                            <button type="submit" class="btn btn-warning my-3 btn-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection