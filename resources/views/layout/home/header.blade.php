<header>
  <nav class="navbar navbar-expand-lg px-lg-5 py-3 shadow navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="{{ route('home') }}">TECHNO-<span>CELEBES</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profile
            </a>
            <ul class="dropdown-menu slide-down" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('about') }}">Tentang</a></li>
              <li><a class="dropdown-item" href="{{ route('visi_misi') }}">Visi & Misi</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{ route('contact') }}">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('profile') }}">Portofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('service') }}">Service</a>
          </li>
        </ul>
        <a class="btn btn-light button-ku" href="{{ route('login') }}" type="button">Login</a>
      </div>
    </div>
  </nav>

  <div class="container-fluid mb-5 p-0 mx-0 car">
    <div class="row">
      <div class="col-lg-12">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner ">
            <div class="carousel-item car-img active">
              <img src="https://images.unsplash.com/photo-1611416457332-946853cc75d6?q=80&w=1942&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
              <div class="carousel-caption d-md-block">
                <h1>Jasa pembuatan website profesional</h1>
                <p>Tingkatkan kehadiran online bisnis Anda dengan layanan pembuatan website profesional kami.</p>
                <button class="btn btn-primary">Contact Us</button>
              </div>
            </div>
            <div class="carousel-item car-img">
              <img src="https://images.unsplash.com/photo-1462007895615-c8c073bebcd8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
              <div class="carousel-caption d-md-block">
                <h1>Web Development Indonesia</h1>
                <p>"Solusi web development terbaik di Indonesia untuk kebutuhan bisnis dan personal Anda.</p>
                <button class="btn btn-primary">Contact Us</button>
              </div>
            </div>
            <div class="carousel-item car-img">
              <img src="https://images.unsplash.com/photo-1542642839-83adadcbe645?q=80&w=1922&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
              <div class="carousel-caption d-md-block">
                <h1>Desain Responsif</h1>
                <p>Some representative placeholder content for the third slide.</p>
                <button class="btn btn-primary">Contact Us</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>