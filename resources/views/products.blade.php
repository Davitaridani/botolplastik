@extends('template')
@section('content')

<main class="wrapper" id="main">
  @include('includes._header')
  <section class="product-sec-1 bg-blue-banner" id="banner">
    <div class="container">
      <div class="inner mb-40 d-flex flex-column">
        <div class="carousel slide mb-75" id="productSlider" data-bs-ride="carousel">
          <div class="carousel-indicators d-flex justify-content-start">
            <div class="indicator-item d-none d-xl-block">
              @for ($i = 0; $i < 4; $i++) <button type="button" data-bs-target="#productSlider" data-bs-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : '' }}" aria-label="Slide {{ $i }}"></button>
                @endfor
            </div>
          </div>
          <div class="carousel-inner text-white h-100">
            @for ($i = 0; $i < 4; $i++) <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
              <img src="https://via.placeholder.com/1440x793/f4efe6/909090?text=Slide+Image+Cover" class="d-block w-100" alt="...">
          </div>
          @endfor
        </div>
      </div>
      <div class="mb-75 text-center text-white ">
        <h1 class="fs-30 fw-bold">Koleksi Botol Plastik</h1>
      </div>
    </div>
    </div>
  </section>

  <!-- Section Sec-Products-2 -->
  <section class="product-sec-2 sticky-below-nav" id="kategori">
    <div class="container">
      <div class="inner">
        <div class="d-flex justify-content-center text-center fw-bold px-4 fs-15 mb-30 bg-white">
          <p class="border-3 px-3 border-end-blue-dark"><a href="#" class="text-decoration-none link-hover-lainnya text-blue-dark">All Products</a></p>
          @foreach ($kategori as $key => $item)
          <p class="border-3 px-3 {{ $item == end($kategori) ? '' : 'border-end-blue-dark'  }}">
            <a href="{{ $item['link'] }}" class="text-decoration-none link-hover text-blue-dark">{{ $item['name'] }}</a>
          </p>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <!-- Section Sec-Products-3 -->
  <section class="product-sec-3" id="fillter">
    <div class="container">
      <div class="inner border-top border-bottom mb-75 py-2">
        <div class="row align-items-center">
          <span class="col-auto">
            <p class="fs-13 fw-medium mb-0 text-blue-dark">Filter berdasar:</p>
          </span>
          <span class="col-auto">
            <p class="fs-13 fw-medium mb-0 text-blue-dark">Aplikasi</p>
          </span>
          <span class="col-auto">
            <select name="filter-application" id="filter-select" class="form-select">
              @foreach ($aplikasi as $item)
              <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
              @endforeach
            </select>
          </span>
          <span class="col-auto fs-13 fw-medium hstack">
            <div class="border-2 border-end-blue-dark px-3">
              <a href="#" class="text-decoration-none text-blue-dark link-hover">Terbaru</a>
            </div>
            <div class="border-2 border-end-blue-dark px-3">
              <a href="#" class="text-decoration-none text-blue-dark link-hover">Terlama</a>
            </div>
            <div class="px-3">
              <a href="#" class="text-decoration-none text-blue-dark link-hover">Paling Laris</a>
            </div>
          </span>
          <span class="col fs-13 fw-medium d-flex justify-content-end">
            <p class="mb-0 float-right">Menampilkan {{ count($produk) }} produk</p>
          </span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Sec-Products-4 -->
  <section class="product-sec-4" id="content">
    <div class="container">
      <div class="inner px-md-5 mb-120">
        <div class="row px-md-3 mx-1 row-cols-2 row-cols-lg-4 g-2 g-lg-5 ">
          @foreach ($produk as $key => $items)
          <div class="col">
            <div class="card bg-white border-0 mb-4 mb-md-0">
              <img src="{{ url($items['image']) }}" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h6 class="card-title text-primary fw-bold py-24 fs-18">{{ $items["name"] }}</h6>
                <a href="products/details/{{ $key }}" class="btn btn-primary  fw-bold fs-15">Lihat Produk</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  @include('includes._customers')
  @include('includes._footer')
</main>
@endsection
© 2021 GitHub, Inc.
Terms
Privacy