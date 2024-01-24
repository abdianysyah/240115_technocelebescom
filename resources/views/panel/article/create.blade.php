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
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-floating my-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Judul">
                            <label for="floatingInput">Judul Article</label>
                        </div>
                        <div class="drop-area text-center" ondrop="dropHandler(event)" ondragover="dragOverHandler(event)" style="background-color: #fff;border:2px solid #000;">
                            <p class="mb-3">Drag & drop an image here</p>
                            <input type="file" id="file-input" accept="image/*" onchange="handleFileSelect(event)" class="d-none">
                            <label for="file-input" class="btn btn-primary">Choose
                                File</label>
                            <img id="preview-image" src="#" alt="Preview" style="display:none; max-width: 100%; margin-top: 20px;">
                        </div>
                    </div>

                    <!-- text area di sini -->
                </div>
            </div>
        </div>
</div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection

@section('drag-img')
<script type="text/javascript">
    function dropHandler(event) {
        event.preventDefault();

        if (event.dataTransfer.items) {
            for (let i = 0; i < event.dataTransfer.items.length; i++) {
                if (event.dataTransfer.items[i].kind === 'file') {
                    const file = event.dataTransfer.items[i].getAsFile();
                    displayImage(file);
                }
            }
        } else {
            for (let i = 0; i < event.dataTransfer.files.length; i++) {
                displayImage(event.dataTransfer.files[i]);
            }
        }
    }

    function dragOverHandler(event) {
        event.preventDefault();
    }

    function handleFileSelect(event) {
        const file = event.target.files[0];
        displayImage(file);
    }

    function displayImage(file) {
        const previewImage = document.getElementById('preview-image');
        const dropArea = document.querySelector('.drop-area');

        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();

            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewImage.style.display = 'block';
                dropArea.classList.add('border-success');
            };

            reader.readAsDataURL(file);
        } else {
            alert('Invalid file format. Please choose an image.');
        }
    }
</script>
@endsection