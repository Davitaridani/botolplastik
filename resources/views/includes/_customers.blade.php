<section class="container-fluid px-0">
  <div class="card bg-dark text-white border-0 rounded-0">
    <img src="{{ url('images/gbr-bawah.jpg') }}" class="card-img card-bg-follow-ig" alt="...">
    <div class="card-img-overlay d-flex bg-blue-gradient ps-5 w-50 align-items-center">
      <div class="font-merri mx-1 mx-md-5 py-5 ">
        <h1 class="card-title fs-45 my-0 fw-bold">Follow Kami</h1>
        <h1 class="card-title fs-45 mb-3 fw-normal">di Instagram</h1>
        <p class="card-text fs-13 mb-0 pb-0 fw-normal">Dapatkan informasi dan update seputar produk Botol
          Plastik serta aneka informasi menarik.</p>
        <div class="d-flex position-relative pt-33">
          <img src="{{ url('images/instagram-putih.png') }}" alt="" class="me-15">
          <div class="d-flex align-items-center">
            <div class="w-75 lh-1">
              <span class="mb-0 pb-0 text-uppercase fs-11 letter-spacing-2">Instagram</span>
              <a href="https://www.instagram.com/botolplastik.idn/"
                class="stretched-link fw-bold text-decoration-none text-white fs-14">botolplastik.idn</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="pelanggan">
  <div class="container pb-4 mb-1">
    <h6 class="text-primary text-center fw-bold mt-60">Pelanggan Kami :</h6>
  </div>
  <div class="container py-4 border-top">
    <div class="container">
      <div class="row g-2 g-lg-3 mx-0 justify-content-between">
        @foreach ($customer as $item)
        <div class="col-md-1 col-6 p-md-0 p-4 d-flex align-items-center justify-content-center">
          <a href="{{ $item['link'] }}"><img src="{{ url($item['img']) }}" alt="customer" class="img-fluid"></a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>