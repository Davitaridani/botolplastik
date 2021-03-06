<footer id="footer">
  <div class="container">
    <div class="inner font-merri fw-light">
      <div class="border-top border-bottom">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 justify-content-between mx-0">
      <div class="col border-end border-footer-end pb-2">
        <div class="ps-1 ps-md-4 fs-13">
          <h6 class="fw-bold text-primary pt-30 fs-15 mb-30">Produk Botolplastik.id</h6>
          @foreach ($kategori as $item)
          <a href="{{ $item['link'] }}" class="text-decoration-none text-dark link-hover">
            <p>{{ $item['name'] }}</p>
          </a>
          @endforeach
        </div>
      </div>
      <div class="col border-end">
        <div class="ps-1 ps-md-4 fs-13">
          <h6 class="fw-bold text-primary pt-30 fs-15 mb-30">Browse Botolplastik.id</h6>
          <a href="{{ url('about') }}" class="text-decoration-none text-dark link-hover">
            <p>Tentang Kami</p>
          </a>
          <a href="{{ url('contact') }}" class="text-decoration-none text-dark link-hover">
            <p>Hubungi Kami</p>
          </a>
        </div>
      </div>
      <div class="col border-end">
        <div class="ps-1 ps-md-4 fs-13">
          <h6 class="fw-bold text-primary pt-30 fs-15 mb-30">Pemesanan Produk</h6>
          <div class="row">
            <div class="col-auto me-1 fs-13">
              <span class="iconify" data-icon="mdi:whatsapp" data-width="18"></span>
            </div>
            <div class="col-10 fs-13">
              <a href="http://wa.me/6282817040048" class="text-decoration-none text-dark link-hover">
                <p>Whatsapp +62 828 1704 0048</p>
              </a>
            </div>

          </div>
          <div class="row">
            <div class="col-auto fs-13  me-1">
              <span class="iconify" data-icon="mdi:home" data-width="18"></span>
            </div>
            <div class="col-10 fs-13">
              <p><strong>Marketing Office</strong></p>
              <p>Jl. Kertajaya</p>
              <p>Surabaya, Jawa Timur - Indonesia</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="ps-1 ps-md-4 fs-13">
          <h6 class="fw-bold text-primary pt-30 fs-15 mb-30">Produk Botolplastik.id</h6>
          <div class="row">
            <div class="col-auto me-1">
              <span class="iconify" data-icon="mdi:instagram" data-width="18"></span>
            </div>
            <div class="col-10">
              <a href="https://www.instagram.com/botolplastik.idn/" class="text-decoration-none text-dark link-hover">
                <p>botolplastik.id</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-2 px-md-1 px-3  pt-2 border-bottom">
    <div class="row justify-content-between g-lg-0 g-3 mx-0 fs-11">
      <div class="col-md-8 d-md-flex justify-content-start-center">
        <a href="{{ url('home') }}" class="text-decoration-none text-dark">
          <img class="ukuran-logo-bawah me-30 mb-md-0 mb-3" src="{{ url('images/logo-botolplastik-bawah.png') }}"
            alt="botolplastik.id">
        </a>
        <p>Botolplastik.id adalah agen distribusi produk botol plastik dengan grade medis berkualitas, <br> melayani
          pelanggan di Surabaya, Jakarta, Semarang, Bali, Bandung, Yogyakarta, hingga ke seluruh wilayah di Indonesia.
        </p>
      </div>
      <div class="col-md-4 text-md-end">
        <p>Copyright &copy; 2021 Botolplastik.id. <br> All rights reserved.</p>
      </div>
    </div>
  </div>
  <div class="mt-3 px-md-1 px-3 pb-5 border-bottom">
    <div class="row justify-content-between g-lg-0 g-3 mx-0">
      <div class="col-md-12 text-md-end fs-11">
        <p>Website design by <a href="https://markdesign.net/" class="text-decoration-none text-dark link-hover "> Mark
            Design </a>.</p>
      </div>
    </div>
  </div>
    </div>
  </div>
</footer>

@push('script')
<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
@endpush