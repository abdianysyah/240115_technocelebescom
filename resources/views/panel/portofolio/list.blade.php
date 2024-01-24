@extends('master.master_admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Portofolio List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Portofolio List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-10">
                    <table class="table table-bordered border-dark">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" class="col-1 text-center">No</th>
                                <th scope="col" class="col-2 text-center">Judul</th>
                                <th scope="col" class="col-2 text-center">Gambar</th>
                                <th scope="col" class="col-5 text-center">Isi</th>
                                <th scope="col" class="col-2 text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody class="table-body table-info" style="color: black;background-color:antiquewhite;">
                            <tr>
                                <td>1</td>
                                <td>ini judul</td>
                                <td>Gambar</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem eveniet voluptate quasi, quos aliquam ipsum modi voluptatem doloremque, itaque error dignissimos maiores amet, odio at adipisci dolores? Saepe, quia temporibus.</td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-square">
                                        <i class="fas fa-times fa-1x"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-square">
                                        <i class="fas fa-pencil-alt fa-1x"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    @foreach($porto as $p)
    <tr>
        <td>{{ $p->title }}</td>
        <td>{{ $p->picture }}</td>
        <td>{{ $p->content }}</td>
        <td>{{ $p->caategory }}</td>
    </tr>
    @endforeach
</div>
<!-- /.content-wrapper -->
@endsection