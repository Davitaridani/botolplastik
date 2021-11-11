@extends('template')

@section('content')
<main class="wrapper">
  @include('includes._header')
  <section class="contact-sec1 bg-blue-banner" id="banner">
    <div class="container">
      <div class="inner d-flex flex-column mb-120">
        <img src="images/contact/banner.jpg" alt="banner" class="mb-75">
        <div class="mb-75 text-center text-white ">
          <h1 class="fs-30 fw-bold">Hubungi Kami</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-sec2" id="contact">
    <div class="container">
      <div class="inner mb-100 text-center">
        <div class="font-merri">
          <h2 class="fs-23 fw-bold text-primary">Hubungi Botolplastik.id melalui hotline WhatsApp kami 24/7</h2>
          <p class="fs-16">Tim marketing kami akan siap membantu Anda mencari botol plastik dan produk plastik lainnya!</p>
          <figure class="mt-50 mb-30">
            <span class="iconify" data-icon="mdi:whatsapp" data-width="79"></span>
          </figure>
          <a href="http://wa.me/628165507887" class="fs-22 fw-bold text-primary text-decoration-none">081 6550 7887</a>
          <p class="fs-16">(Klik untuk mulai chat)</p>
        </div>
      </div>
      <hr class="mb-75">
    </div>
  </section>

  <section class="contact-sec3" id="addres">
    <div class="container">
      <div class="inner mb-100 text-center">
        <div class="font-merri">
          <h2 class="fs-22 fw-bold text-primary mb-4">Alamat Kantor BotolPlastik.id</h2>
          <address class="fs-13 mb-3">
            <p class="mb-1">Jl. Kertajaya No.109, Kertajaya, Kec. Gubeng <br>Surabaya, Jawa Timur 60286, Indonesia</p>
          </address>
          <div class="text-center mb-1">
            <span class="iconify text-primary" data-icon="mdi:map-marker" data-width="18"></span>
          </div>
          <a href="https://goo.gl/maps/yBpSybsNtzEB8rVR9" class="fw-bold fs-13">Klik untuk lihat di Google Maps</a>
        </div>
      </div>
      @include('includes._customers')
    </div>
  </section>
  @include('includes._footer')
</main>
@endsection