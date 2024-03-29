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
    <form method="post" action="{{ route('update-portofolio-post')}}" enctype="multipart/form-data" >
  {{ @csrf_field()}}
    <input type="hidden" name="portofolio_id" value="{{ $port->portofolio_id }}">
    <label>Title</label>
    <input type="text" name="title" value="{{ $port->title }}">

    <label>Image</label>
    <input type="file" name="picture" value="{{ $port->picture }}">

    <label>Isi</label>
    <input type="text" name="content" value="{{ $port->content }}">

    <button type="submit">Update</button>
 </form>
</div>
<!-- /.content-wrapper -->
@endsection