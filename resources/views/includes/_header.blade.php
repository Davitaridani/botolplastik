<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top py-0 d-none d-lg-flex h-120" id="navbar-lg">
      <div class="container">
        <a href="{{ url('home') }}" class="navbar-brand p-0"><img src="{{ url('images/logo-botolplastik.png') }}"
            class="brand-md-cs" alt=""></a>
        <button class="navbar-toggler border-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end align-self-end" id="navbarNav">
          <ul class="navbar-nav fw-bold text-center fs-15 align-items-end">
            <li class="nav-item ms-12 me-12">
              <a class="nav-link p-0 active" href="{{ url('home') }}">Home</a>
            </li>
            <li class="nav-item ms-12 me-12">
              <a class="nav-link p-0" href="{{ url('about') }}">Tentang Kami</a>
            </li>
            <li class="nav-item ms-12 me-12">
              <a class="nav-link p-0" href="{{ url('products') }}">Koleksi Botol Plastik</a>
            </li>
            <li class="nav-item ms-12">
              <a class="nav-link p-0" href="{{ url('contact') }}">Hubungi Kami</a>
            </li>
            <li class="nav-item ms-104 ms-lg-5 ms-0">
              <a class="nav-link p-0" href="http://wa.me/6282817040048">Whatsapp</a>
            </li>
            <li class="nav-item ms-12">
              <a class="nav-link p-0" href="http://wa.me/6282817040048"><i
                  class="fab fa-whatsapp ms-1 fw-bold fs-4"></i></a>
            </li>
          </ul>
        </div>
      </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top py-0 d-flex d-lg-none" id="navbar-md">
    <div class="container mt-27 mb-27">
      <a href="{{ url('home') }}" class="navbar-brand p-0"><img src="{{ url('images/logo-botolplastik.png') }}"
          class="brand-md-cs" alt=""></a>
      <button class="navbar-toggler border-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mt-48" id="navbarNav">
        <ul class="navbar-nav fw-bold fs-15">
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('about') }}">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('products') }}">Koleksi Botol Plastik</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('contact') }}">Hubungi Kami</a>
          </li>
          <li class="nav-item ms-0">
            <a class="nav-link" href="http://wa.me/6282817040048">Whatsapp</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://wa.me/6282817040048"><i
                class="fab fa-whatsapp ms-1 fw-bold fs-4"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>