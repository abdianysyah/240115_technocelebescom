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
</header>

<div class="container-fluid mb-5 p-0 car mx-0">
  <div class="row">
    <div class="col-12">
      <div id="carouselExampleAutoplaying" class="carousel slide">
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
                    <img src="theme/home/asets/carousel-1.jpg" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-md-block">
                      <h1>Jasa pembuatan website profesional</h1>
                      <p>"Tingkatkan kehadiran online bisnis Anda dengan layanan pembuatan website profesional kami."</p>
                      <button href="{{ route('contact') }}" class="btn btn-light text-dark p-2" style="border-radius:20px;">Contact Us</button>
                    </div>
                  </div>
                  <div class="carousel-item car-img">
                    <img src="theme/home/asets/carousel-2.jpg" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-md-block">
                      <h1>Web Development Indonesia</h1>
                      <p>"Solusi web development terbaik di Indonesia untuk kebutuhan bisnis dan personal Anda."</p>
                      <button href="{{ route('contact') }}" class="btn btn-light text-dark p-2" style="border-radius:20px;">Contact Us</button>
                    </div>
                  </div>
                  <div class="carousel-item car-img">
                    <img src="theme/home/asets/carousel-3.jpg" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-md-block">
                      <h1>Desain Responsif</h1>
                      <p>"Desain responsif untuk memastikan tampilan optimal di semua perangkat, dari desktop hingga mobile."</p>
                      <button href="{{ route('contact') }}" class="btn btn-light text-dark p-2" style="border-radius:20px;">Contact Us</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>