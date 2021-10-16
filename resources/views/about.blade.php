@extends('template')

@section('content')
@include('includes._header')

<section class="bg-blue-banner mb-120">
  <div class="container d-flex flex-column">
    <img src="images/tentang/banner.jpg" alt="banner" class="mb-75">
    <div class="mb-75 text-center text-white ">
      <h1 class="fs-30 fw-bold">Tentang Kami</h1>
    </div>
  </div>
</section>
<main class="container">
  <section class="text-center mb-120">
    <header class="mb-5">
      <h2 class="fs-23 fw-bold text-primary">Profil Botolplastik.id</h2>
    </header>
    <p class="fs-20">Botolplastik.id adalah divisi distribusi dan penjualan retail dari korporasi industri plastik
      terkemuka di Indonesia, yakni Suryasukses group.</p>
    <p class="fs-16">Dengan hadirnya Botolplastik.id maka pelanggan retail dari berbagai industri dan UMKM seperti
      industri restaurant, cafe, pabrik minuman dan makanan, farmasi dan suplemen dapat menemukan aneka ragam koleksi
      produk dari Suryasukses group dan membelinya mulai dari kuantiti retail hingga kuantiti pasokan industri.</p>
    <p class="fs-16">Seluruh produk yang dijual oleh Botolplastik.id adalah produk-produk terbaik yang lulus berbagai
      macam skrining kualitas dan uji coba. Dengan rancangan desain yang terbukti efisiensinya dan bahan baku grade
      terbaik, maka pelanggan dapat menjual produknya nilai lebih tinggi, serta dapat memberikan pengalaman lebih pada
      konsumen marketnya.</p>
  </section>
  <section class="text-center mb-60">
    <header class="mb-5">
      <h2 class="fs-23 fw-bold text-primary">Keunggulan Botolplastik.id</h2>
    </header>
    <p class="fs-16">
      Botolplastik.id berkomitmen untuk menyediakan hanya produk-produk yang terbaik yang akan mendukung kinerja usaha
      para pelanggan kami, memancing inovasi dan kreasi untuk mendatangkan kesuksesan pada usaha. Hal ini dapat terjadi
      akibat sinergi keunggulan kami berikut:
    </p>
  </section>
  <section class="mb-170">
    <div class="row row-cols-1 row-cols-md-3">
      @foreach ($keunggulan as $key => $value)
      <div class="col mb-3 mb-md-0">
        <div class="card shadow border-0 h-100 card-keunggulan">
          <figure class="card-img-top text-center mt-5 mb-0">
            <img src="{{ $value['img'] }}" alt="icon" class="ic-keunggulan">
          </figure>
          <div class="card-body m-4 text-center">
            <h3 class="fs-23 fw-bold text-primary">{{ $value['title'] }}</h3>
            <p class="fs-15">{{ $value['desc'] }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
  @include('includes._customers')
</main>
@include('includes._footer')
@endsection