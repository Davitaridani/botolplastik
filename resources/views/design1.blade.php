@extends('template')
@section('content')
@include('includes._header')
<main id="main" class="container-fluid p-0">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators d-flex justify-content-start">
      <div class="indicator-item d-none d-xl-block">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
      </div>
    </div>

    <div class="carousel-inner text-white">
      @for ($i = 0; $i < 4; $i++)
       <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
        <img src="{{ url('images/gbr-atas.jpg') }}" class="d-block w-100" alt="...">
        <div class="container card-img-overlay d-flex align-items-center px-0 ms-crs mt-5 pt-5">
          <div class="row d-none d-lg-block mt-5 pt-2 mx-0">
            <div class="col-6 pe-5">
              <h2 class="card-title fw-bold pe-5">Beli Botol Plastik Langsung Dari Pabriknya!</h2>
              <p class="card-text mb-0 pe-5 me-4">Kami hadirkan aneka botol plastik dengan mutu dan kualitas grade
                medis, diproduksi dengan teknologi dan kualitas tinggi serta bersertifikat ISO!</p>
              <p class="card-text fw-bold mb-0 px-0">Langsung dari pabrik untuk harga terbaik!</p>
              <button class="btn btn-info bg-botol border-0 mt-50 rounded-pill fw-bold px-4 text-white">Lihat Koleksi <i
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
    <div class="container-fluid">
      <h1 class="h1 text-center text-botol fw-bold font-merri mb-40">Unggul dalam harga, kualitas dan design</h1>
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
      <h6 class="text-center fs-18 text-botol fw-bold">Lihat Produk Sesuai Aplikasi:</h6>
    </div>

    <div class="container-fluid pb-5">
      <div class="row mx-0 row-cols-2 row-cols-lg-6 g-2 g-lg-5">
        <div class="col text-center border-end fw-bold text-biru-tua pt-5 fs-15">
          <img src="{{ url('images/icon1.png') }}" class="mb-35" alt="">
          <p>Beverage</p>
        </div>
        <div class="col text-center border-end fw-bold text-biru-tua pt-5 fs-15">
          <img src="{{ url('images/icon2.png') }}" class="mb-35" alt="">
          <p>Food</p>
        </div>
        <div class="col text-center border-end fw-bold text-biru-tua pt-5 fs-15">
          <img src="{{ url('images/icon3.png') }}" class="mb-35" alt="">
          <p>Personal Care</p>
        </div>
        <div class="col text-center border-end fw-bold text-biru-tua pt-5 fs-15">
          <img src="{{ url('images/icon4.png') }}" class="mb-35" alt="">
          <p>Cosmetics</p>
        </div>
        <div class="col text-center border-end fw-bold text-biru-tua pt-5 fs-15">
          <img src="{{ url('images/icon5.png') }}" class="mb-35" alt="">
          <p>Pharmaceutial</p>
        </div>
        <div class="col text-center fw-bold text-biru-tua pt-5 fs-15">
          <img src="{{ url('images/icon6.png') }}" class="mb-35" alt="">
          <p>Chemical</p>
        </div>
      </div>
    </div>

    <div class="container-fluid px-0">
      <h6 class="text-center fw-bold fs-25 py-3 text-botol border-top border-bottom">Best Sellers</h6>
    </div>
    <div class="container-fluid my-5">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner px-5">
          @foreach ($produk as $key => $value)
          <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            <div class="row mx-0 row-cols-1 row-cols-md-2 row-cols-lg-4 g-2 g-lg-5">
              @foreach ($value as $items)
              <div class="col">
                <div class="card bg-white border-0">
                  <img src="{{ url($items['image']) }}" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <h6 class="card-title text-botol fw-bold py-24 fs-18">{{ $items["nama"] }}</h6>
                    <a href="#" class="btn btn-primary bg-botol-tua fw-bold fs-15">Lihat Produk</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev ms-2 mb-5 pb-5 justify-content-start" type="button"
          data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <div class="mb-5 icon-crs rounded-circle d-flex align-items-center p-1 justify-content-center">
            <i class="fas fa-chevron-left"></i>
          </div>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next me-2 mb-5 pb-5 justify-content-end" type="button"
          data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <div class=" mb-5 icon-crs rounded-circle d-flex align-items-center text-center justify-content-center p-1">
            <i class="fas fa-chevron-right"></i>
          </div>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <div class="container-fluid px-0">
      <h6 class="text-center fw-bold fs-25 py-3 text-botol border-top border-bottom">New Items</h6>
    </div>
    <div class="container-fluid my-5">
      <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner px-5">
          @foreach ($produk as $key => $value)
          <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            <div class="row mx-0 row-cols-1 row-cols-md-2 row-cols-lg-4 g-2 g-lg-5">
              @foreach ($value as $items)
              <div class="col">
                <div class="card bg-white border-0">
                  <img src="{{ url($items['image']) }}" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <h6 class="card-title text-botol fw-bold py-24 fs-18">{{ $items["nama"] }}</h6>
                    <a href="#" class="btn btn-primary bg-botol-tua fw-bold fs-15">Lihat Produk</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev ms-2 mb-5 pb-5 justify-content-start" type="button"
          data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
          <div class="mb-5 icon-crs rounded-circle d-flex align-items-center p-1 justify-content-center">
            <i class="fas fa-chevron-left"></i>
          </div>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next me-2 mb-5 pb-5 justify-content-end" type="button"
          data-bs-target="#carouselExampleControls2" data-bs-slide="next">
          <div class=" mb-5 icon-crs rounded-circle d-flex align-items-center text-center justify-content-center p-1">
            <i class="fas fa-chevron-right"></i>
          </div>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <div class="container-fluid px-0">
      <h6 class="text-center fw-bold fs-25 py-3 text-botol border-top border-bottom">Lihat Lebih Banyak</h6>
    </div>
    <div class="container-fluid px-md-5 mt-5">
      <div class="row px-md-0 mx-0 row-cols-2 row-cols-lg-4 g-2 g-lg-5">
        @foreach ($produk as $key => $value)
        @foreach ($value as $items)
        <div class="col">
          <div class="card bg-white border-0">
            <img src="{{ url($items['image']) }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h6 class="card-title text-botol fw-bold py-24 fs-18">{{ $items["nama"] }}</h6>
              <a href="#" class="btn btn-primary bg-botol-tua fw-bold fs-15">Lihat Produk</a>
            </div>
          </div>
        </div>
        @endforeach
        @endforeach
      </div>
    </div>
    <div class="container-fluid px-0 py-5">
      <h6 class="text-center pb-4 text-botol px-5 fw-bold">Lihat Lebih Lengkap Sesuai Kategori Koleksi:</h6>
      <div class="border-top border-bottom py-3">
        <div class="d-md-flex justify-content-center fw-bold container px-4 pt-2 mt-1 fs-15">
          @foreach ($kategori as $key => $item)
          <p class="border-4 px-3 {{ $item == end($kategori) ? '' : 'border-end-custom'  }}"><a
              href="{{ url($item['link'], []) }}"
              class="text-decoration-none link-hover-lainnya text-biru-tua">{{ $item['name'] }}</a></p>
          @endforeach
        </div>
      </div>
    </div>

    <div class="container-fluid px-0">
      <div class="card bg-dark text-white">
        <img src="{{ url('images/gbr-bawah.jpg') }}" class="card-img" alt="...">
        <div class="card-img-overlay d-flex bg-gradasi-botol ms-3 ps-5 w-50 align-items-center">
          <div class="font-merri py-5 d-none d-lg-block">
            <h1 class="card-title fs-45 my-0 fw-600">Follow Kami</h1>
            <h1 class="card-title fs-45 mb-3 fw-normal">di Instagram</h1>
            <p class="card-text fs-13 mb-0 pb-0 w-normal w-60">Dapatkan informasi dan update seputar produk Botol
              Plastik serta aneka informasi menarik.</p>
            <div class="d-flex position-relative pt-33">
              <img src="{{ url('images/instagram-putih.png') }}" alt="" class="me-15">
              <div class="d-flex align-items-center">
                <div class="w-75 lh-1">
                  <span class="mb-0 pb-0 text-uppercase fs-11 letter-spacing">Instagram</span>
                  <a href="#" class="stretched-link fw-bold text-decoration-none text-white fs-14">botolplastik.idn</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="pelanggan">
    <div class="container pb-4 mb-1">
      <h6 class="text-botol text-center fw-bold mt-60">Pelanggan Kami :</h6>
    </div>
    <div class="container-fluid py-4 border-top">
      <div class="container-fluid">
        <div class="row g-2 g-lg-3 mx-0 justify-content-between">
          <div class="col-md-1 col-6 p-md-0 p-4 d-flex align-items-center justify-content-center">
            <a href=""><img src="{{ url('images/logo_1.jpg') }}" width="100%" alt=""></a>
          </div>
          <div class="col-md-1 col-6 p-md-0 p-4 d-flex align-items-center justify-content-center">
            <a href=""><img src="{{ url('images/logo_2.jpg') }}" width="100%" alt=""></a>
          </div>
          <div class="col-md-1 col-6 p-md-0 p-4 d-flex align-items-center justify-content-center">
            <a href=""><img src="{{ url('images/logo_3.jpg') }}" width="100%" alt=""></a>
          </div>
          <div class="col-md-1 col-6 p-md-0 p-4 d-flex align-items-center justify-content-center">
            <a href=""><img src="{{ url('images/logo_4.jpg') }}" width="100%" alt=""></a>
          </div>
          <div class="col-md-1 col-6 p-md-0 p-4 d-flex align-items-center justify-content-center">
            <a href=""><img src="{{ url('images/logo_5.jpg') }}" width="100%" alt=""></a>
          </div>
          <div class="col-md-1 col-6 p-md-0 p-4 d-flex align-items-center justify-content-center">
            <a href=""><img src="{{ url('images/logo_6.jpg') }}" width="100%" alt=""></a>
          </div>
          <div class="col-md-1 col-6 p-md-0 p-4 d-flex align-items-center justify-content-center">
            <a href=""><img src="{{ url('images/logo_7.jpg') }}" width="100%" alt=""></a>
          </div>
          <div class="col-md-1 col-6 p-md-0 p-4 d-flex align-items-center justify-content-center">
            <a href=""><img src="{{ url('images/logo_8.jpg') }}" width="100%" alt=""></a>
          </div>
          <div class="col-md-1 col-6 p-md-0 p-4 d-flex align-items-center justify-content-center">
            <a href=""><img src="{{ url('images/logo_9.jpg') }}" width="100%" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@include('includes._footer')
@endsection