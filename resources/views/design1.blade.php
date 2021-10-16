@extends('template')

@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
@endpush
@section('content')
@include('includes._header')
<main id="main" class="container p-0">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators d-flex justify-content-start">
      <div class="indicator-item d-none d-xl-block">
        @for ($i = 0; $i < 4; $i++)
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : '' }}"
          aria-label="Slide {{ $i }}"></button>
        @endfor
      </div>
    </div>

    <div class="carousel-inner text-white">
      @for ($i = 0; $i < 4; $i++)
      <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
        <img src="{{ url('images/gbr-atas.jpg') }}" class="d-block w-100" alt="...">
        <div class="container card-img-overlay d-flex align-items-center px-0 mx-105 mt-5 pt-2 pt-lg-5">
          <div class="row d-none d-md-block mt-1 mt-sm-3 pt-2 mx-0">
            <div class="col-md-8 col-lg-6 pe-5">
              <h2 class="card-title fw-bold pe-5">Beli Botol Plastik Langsung Dari Pabriknya!</h2>
              <p class="card-text mb-0 pe-5 me-4">Kami hadirkan aneka botol plastik dengan mutu dan kualitas grade
                medis, diproduksi dengan teknologi dan kualitas tinggi serta bersertifikat ISO!</p>
              <p class="card-text fw-bold mb-0 px-0">Langsung dari pabrik untuk harga terbaik!</p>
              <button class="btn bg-blue-light border-0 mt-50 rounded-pill fw-bold px-4 text-white">Lihat Koleksi <i
                  class="fas fa-chevron-right ms-4"></i></button>
            </div>
          </div>
        </div>
      </div>
    @endfor
  </div>

  <button class="carousel-control-prev pe-md-5" type="button" data-bs-target="#carouselExampleIndicators"
    data-bs-slide="prev">
    <span class="carousel-control-prev-icon me-md-5 me-0" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>

  <section id="content">
    <div class="container mb-40 mt-150">
      <h6 class="text-center fw-bold my-0">Tentang BotolPlastik.id</h6>
    </div>
    <div class="container">
      <h1 class="h1 text-center text-primary fw-bold font-merri mb-40">Unggul dalam harga, kualitas dan design</h1>
      <p class="w-75 text-center px-3 mb-40 mx-auto">Botolplastik.id adalah divisi trading yang menjual aneka produk
        botol plastik dan variasi kelengkapannya, dari korporasi pabrik pabrik plastik unggul di Indonesia, yakni
        Suryasukses Group. Botolplastik.id hanya akan mendistribusikan produk botol plastik bermutu tinggi terbaik -
        medical grade, dari bahan baku plastik pilihan berkualitas tinggi. Botolplastik.id didirikan untuk dapat
        menjangkau konsumen pengusaha retail yang bergerak di bidang makanan dan minuman mulai dari konsumen ukm,
        industri rumah tangga, hingga industri besar sekalipun. Dengan pengalaman lebih dari 3 dekade dibidang plastik,
        kami memiliki pengalaman panjang dan luas serta jaringan distribusi produk plastik di seluruh kota besar di
        Indonesia seperti Jakarta, Surabaya, Semarang, Yogyakarta, Bandung, Bali dan masih banyak lagi. Dengan
        pengalaman dan pengetahuan unik dari para pendiri kami, kami adalah mitra terbaik dan paling menguntungkan Anda
        untuk jangka panjang.</p>
    </div>

    <div class="container pt-5 pb-5">
      <h6 class="text-center fs-18 text-primary fw-bold">Lihat Produk Sesuai Aplikasi:</h6>
    </div>

    <div class="container-fluid pb-5">
      <div class="row mx-0 row-cols-2 row-cols-md-3 row-cols-lg-6 g-2 g-lg-5" id="produkAplikasi">
        @foreach ($aplikasi as $item)
        <div class="col text-center {{ $item == end($aplikasi) ? '' : 'border-end' }} fw-bold text-blue-dark pt-5 fs-15">
          <img src="{{ $item['img'] }}" class="mb-35" alt="">
          <a href="{{ $item['link'] }}" class="text-decoration-none text-blue-dark">
            <p>{{ $item['name'] }}</p>
          </a>
        </div>
        @endforeach
      </div>
    </div>

    <div class="container px-0">
      <h6 class="text-center fw-bold fs-25 py-3 text-primary border-top border-bottom">Best Sellers</h6>
    </div>
    <section class="d-flex align-items-center">
      <span class="px-2 mb-120">
        <button class="btn btn-sm btn-secondary rounded-circle px-2 py-2 prev-btn" type="button">
          <span class="carousel-control-prev-icon align-middle" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
      </span>
      <div class="px-md-2 my-5">
        <div class="product-carousel row mx-0 row-cols-2 row-cols-md-4 g-2 g-lg-5">
          @foreach ($produk as $key => $items)
          <div class="col">
            <div class="card bg-white border-0">
              <img src="{{ url($items['image']) }}" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h6 class="card-title text-primary fw-bold py-24 fs-18">{{ $items["name"] }}</h6>
                <a href="#" class="btn btn-primary  fw-bold fs-15">Lihat Produk</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <span class="px-2 mb-120">
        <button class="btn btn-sm btn-secondary rounded-circle px-2 py-2 next-btn" type="button">
          <span class="carousel-control-next-icon align-middle" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </span>
    </section>
    </div>

    <div class="container px-0">
      <h6 class="text-center fw-bold fs-25 py-3 text-primary border-top border-bottom">New Items</h6>
    </div>
    <section class="d-flex align-items-center">
      <span class="px-2 mb-120">
        <button class="btn btn-sm btn-secondary rounded-circle px-2 py-2 prev-btn" type="button">
          <span class="carousel-control-prev-icon align-middle" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
      </span>
      <div class="px-md-2 my-5">
        <div class="product-carousel row mx-0 row-cols-2 row-cols-md-4 g-2 g-lg-5">
          @foreach ($produk as $key => $items)
          <div class="col">
            <div class="card bg-white border-0">
              <img src="{{ url($items['image']) }}" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h6 class="card-title text-primary fw-bold py-24 fs-18">{{ $items["name"] }}</h6>
                <a href="#" class="btn btn-primary  fw-bold fs-15">Lihat Produk</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <span class="px-2 mb-120">
        <button class="btn btn-sm btn-secondary rounded-circle px-2 py-2 next-btn" type="button">
          <span class="carousel-control-next-icon align-middle" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </span>
    </section>

    <div class="container px-0">
      <h6 class="text-center fw-bold fs-25 py-3 text-primary border-top border-bottom">Lihat Lebih Banyak</h6>
    </div>
    <div class="px-md-5 mt-5">
      <div class="row px-md-3 mx-1 row-cols-2 row-cols-lg-4 g-2 g-lg-5 ">
        @foreach ($produk as $key => $items)
        <div class="col">
          <div class="card bg-white border-0 mb-4 mb-md-0">
            <img src="{{ url($items['image']) }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h6 class="card-title text-primary fw-bold py-24 fs-18">{{ $items["name"] }}</h6>
              <a href="#" class="btn btn-primary  fw-bold fs-15">Lihat Produk</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="container px-0 py-5">
      <h6 class="text-center pb-4 text-primary px-5 fw-bold">Lihat Lebih Lengkap Sesuai Kategori Koleksi:</h6>
      <div class="border-top border-bottom py-3">
        <div class="d-md-flex justify-content-center text-center fw-bold container px-4 pt-2 mt-1 fs-15">
          @foreach ($kategori as $key => $item)
          <p class="border-4 px-3 {{ $item == end($kategori) ? '' : 'border-end-blue-dark'  }}"><a
              href="{{ $item['link'] }}"
              class="text-decoration-none link-hover-lainnya text-blue-dark">{{ $item['name'] }}</a></p>
          @endforeach
        </div>
      </div>
    </div>

    @include('includes._customers')
</main>
@include('includes._footer')
@endsection

@push('script')
<script src="js/tiny-slider.js"></script>
<script src="js/product-carousel.min.js"></script>
<!-- NOTE: prior to v2.2.1 tiny-slider.js need to be in <body> -->
@endpush