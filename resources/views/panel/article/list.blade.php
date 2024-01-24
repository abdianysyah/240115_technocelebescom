@extends('master.master_admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Article List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Article List</li>
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
                        <tbody class="table-body" style="color: black;background-color:antiquewhite;">
                            <!-- data here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection


@section('helperfooter')
<script type="text/javascript">
    $(document).ready(function() {
        $.get("http://127.0.0.1:8000/admin/article/list-a", function(kambing) {
            var g = kambing['data']
            var teks = "";
            for (var i = 0; i < g.length; i++) {
                teks += `<tr>
                            <td>${i+1}</td>
                            <td class='pongko'>${g[i]['title']}</td>
                            <td><img src="${g[i]['image']}" class="img-fluid" alt="${g[i]['image']}" style="width:20rem;"></td>
                            <td>${g[i]['isi']}</td>
                            <td>
                                <button type="button" class="btn btn-danger btn-square">
                                    <i class="fas fa-times fa-1x"></i>
                                </button>
                                <button type="button" class="btn btn-primary btn-square">
                                    <i class="fas fa-pencil-alt fa-1x"></i>
                                </button>
                            </td>
                        </tr>`;
            }
            $(".table-body").append(teks);
        }, 'json');
    });
</script>

@endsection