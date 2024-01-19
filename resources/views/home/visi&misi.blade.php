@extends('master.master_inner')
@section('content')
<main class="vh-100">
    <!-- bread-crumb -->
    <div class="bread-crumb d-flex align-items-center w-100" style="height: 20rem">
        <div class="container py-4 text-center">
            <h1 class="display-2 fw-bold">Visi & Misi</h1>
            <ul class="text-breadcrumb list-unstyled d-flex fs-4 justify-content-center align-items-center">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="mx-2">|</li>
                <li>About</li>
            </ul>
        </div>
    </div>
</main>
@endsection