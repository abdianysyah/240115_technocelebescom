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

                {{-- <a class="btn btn-light" href="{{ route('login') }}" type="button">Login</a> --}}

                <a class="btn btn-light button-ku" href="{{ route('login') }}" type="button">Login</a>

            </div>
        </div>
    </nav>
</header>