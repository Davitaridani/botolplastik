@extends('template')
@section('content')
<main class="wrapper" id="main">
  {{-- Include About --}}

  @include('includes._header')

  {{-- Section Banner --}}
  <section class="about-sec-1 bg-blue-banner" id="banner">
    <div class="container">
      <div class="inner mb-120 d-flex flex-column">
        <img src="images/tentang/banner.jpg" alt="banner" class="mb-75">
        <div class="mb-75 text-center text-white ">
          <h1 class="fs-30 fw-bold">Tentang Kami</h1>
        </div>
      </div>
    </div>
  </section>
  {{-- End Sec Banner --}}

  {{-- Section prodfil --}}
  <section class="about-sec-2" id="profil">
    <div class="container">
      <div class="inner mb-120">
        <div class="text-center maw1021 d-block mx-auto">
          <div class="mb-4 pb-2">
            <h2 class="fs-23 fw-bold text-primary">Profil Botolplastik.id</h2>
          </div>
          <p class="fs-20 fw-bold">Botolplastik.id adalah divisi distribusi dan penjualan retail dari korporasi
            industri
            plastik terkemuka di Indonesia, yakni Suryasukses group.</p>
          <p class="fs-16">Dengan hadirnya Botolplastik.id maka pelanggan retail dari berbagai industri dan UMKM
            seperti
            industri restaurant, cafe, pabrik minuman dan makanan, farmasi dan suplemen dapat menemukan aneka ragam
            koleksi
            produk dari Suryasukses group dan membelinya mulai dari kuantiti retail hingga kuantiti pasokan industri.
          </p>
          <p class="fs-16">Seluruh produk yang dijual oleh Botolplastik.id adalah produk-produk terbaik yang lulus
            berbagai
            macam skrining kualitas dan uji coba. Dengan rancangan desain yang terbukti efisiensinya dan bahan baku
            grade
            terbaik, maka pelanggan dapat menjual produknya nilai lebih tinggi, serta dapat memberikan pengalaman
            lebih pada
            konsumen marketnya.</p>
        </div>
      </div>
    </div>
  </section>
  {{-- End Section Profil --}}

  {{-- Section Keunggulan --}}
  <section class="about-sec-3" id="keunggulan">
    <div class="container">
      <div class="inner mb-60">
        <div class="text-center maw1021 d-block mx-auto">
          <div class="mb-4 pb-2">
            <h2 class="fs-23 fw-bold text-primary">Keunggulan Botolplastik.id</h2>
          </div>
          <p class="fs-16">
            Botolplastik.id berkomitmen untuk menyediakan hanya produk-produk yang terbaik yang akan mendukung kinerja
            usaha
            para pelanggan kami, memancing inovasi dan kreasi untuk mendatangkan kesuksesan pada usaha. Hal ini dapat
            terjadi
            akibat sinergi keunggulan kami berikut:
          </p>
        </div>
      </div>
    </div>
  </section>
  {{-- End Section Keunggulan --}}

  {{-- Section Keunggulan Card --}}
  <section class="about-sec-4" id="keunggulan_card">
    <div class="container">
      <div class="inner mb-170">
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
      </div>
    </div>
  </section>
  {{-- End Section Keunggulan Card --}}

  @include('includes._customers')
  @include('includes._footer')
</main>
@endsection