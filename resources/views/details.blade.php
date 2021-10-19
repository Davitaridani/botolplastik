@extends('template')

@section('content')
@include('includes._header')

<main class="container d-flex flex-column">
  <nav class="border-top border-bottom py-3 d-flex justify-content-between text-blue-dark fs-13 fw-medium mb-60">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="#" class="text-reset text-decoration-none">Home</a></li>
      <li class="breadcrumb-item"><a href="#" class="text-reset text-decoration-none">Koleksi Botol Plastik</a></li>
      <li class="breadcrumb-item"><a href="#" class="text-reset text-decoration-none">PET Bottles</a></li>
      <li class="breadcrumb-item active fw-bold" aria-current="page">{{ $detail['name'] }}</li>
    </ol>
    <a href="{{ url('products') }}" class="text-reset text-decoration-none"><span class="me-3">&#10094;</span>Kembali Ke
      Halaman Sebelumnya</a>
  </nav>
  <section class="text-center mb-100 d-flex flex-column align-items-center">
    <div class="mb-40">
      <p class="text-blue-dark fw-bold">Koleksi Botol Plastik</p>
      <h1 class="fw-bold">{{ $detail['name'] }}</h1>
    </div>
    <div class="w-784">
      <img src="{{ url($detail['image']) }}" alt="Foto produk" class="mb-40 w-100">
      <ul class="list-group list-group-flush mb-30">
        <li class="list-group-item py-4">
          <span class="fs-13 fw-bold">Product Category</span>
          <p class="fs-19 mb-0">PET Bottles</p>
        </li>
        <li class="list-group-item py-4">
          <span class="fs-13 fw-bold">Product Application</span>
          <p class="fs-19 mb-0">PET Bottles</p>
        </li>
        <li class="list-group-item py-4">
          <span class="fs-13 fw-bold">Product Description</span>
          <p class="fs-19 mb-0">Praesent tincidunt, orci sed mattis malesuada, neque turpis sagittis orci, nec maximus
            diam arcu quis libero. Duis molestie consequat urna, eget varius leo fringilla eget. Praesent pellentesque
            metus sed posuere aliquet. Nullam scelerisque erat a metus viverra commodo.</p>
        </li>
        <li class="list-group-item py-4">
          <span class="fs-13 fw-bold">Product Dimension</span>
          <p class="fs-19 mb-0">800x120x240 mm</p>
        </li>
        <li class="list-group-item py-4 border-bottom">
          <span class="fs-13 fw-bold">Packing Details</span>
          <span class="fs-19">
            <p class="mb-0">Packing size: 800x1250x250mm</p>
            <p class="mb-0">1 carton: 10 items</p>
            <p class="mb-0">Weight: 8 kg</p>
          </span>
        </li>
      </ul>
      <a class="btn btn-success text-white fw-bold px-4">
        <span class="iconify" data-icon="mdi:whatsapp" data-width="25"></span>
        Inkuiri Via WhatsApp
      </a>
    </div>

  </section>
  <section class="mb-100">
    <div class="py-3 border-top border-bottom d-flex justify-content-between mb-60">
      <h2 class="fs-25 text-primary fw-bold mb-0">Produk Lainnya</h2>
      <a href="{{ url('products') }}" class="fw-medium text-decoration-none"><span class="me-3">&#10094;</span>Kembali
        Ke Halaman Sebelumnya</a>
    </div>
    <div class="px-md-5">
      <div class="row px-md-3 mx-1 row-cols-2 row-cols-lg-4 g-2 g-lg-5 ">
        @for ($i = 4, $total = count($produk); $i < $total; $i++) <div class="col">
          <div class="card bg-white border-0 mb-4 mb-md-0">
            <img src="{{ url($produk[$i]['image']) }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h6 class="card-title text-primary fw-bold py-24 fs-18">{{ $produk[$i]["name"] }}</h6>
              <a href="#" class="btn btn-primary  fw-bold fs-15">Lihat Produk</a>
            </div>
          </div>
      </div>
      @endfor
    </div>
    </div>
  </section>
  @include('includes._customers')
</main>
@include('includes._footer')
@endsection