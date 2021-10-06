@extends('template')
@section('content')
@include('includes._header')
<main id="main" class="container-fluid p-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <div class="indicator-item d-none d-xl-block">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
        </div>

        <div class="carousel-inner text-white">
            <div class="carousel-item active">
                <img src="https://marshalledc.org/sites/default/files/banner/mountains.jpg" class="d-block w-100" alt="...">
                <div class="container card-img-overlay d-flex align-items-center">
                    <div class="row d-none d-lg-block">
                        <div class="col-6 pe-5">
                            <h2 class="card-title fw-bold pe-5">Beli Botol Plastik Langsung Dari Pabriknya!</h2>
                            <p class="card-text mb-0 pe-5 me-4">Kami hadirkan aneka botol plastik dengan mutu dan kualitas grade medis, diproduksi dengan teknologi dan kualitas tinggi serta bersertifikat ISO!</p>
                            <p class="card-text fw-bold">Langsung dari pabrik untuk harga terbaik!</p>
                            <button class="btn btn-info bg-botol border-0 rounded-pill fw-bold px-4 my-4 text-white">Lihat Koleksi <i class="fas fa-chevron-right ms-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://marshalledc.org/sites/default/files/banner/mountains.jpg" class="d-block w-100" alt="...">
                <div class="container card-img-overlay d-flex align-items-center">
                    <div class="row d-none d-lg-block">
                        <div class="col-6 pe-5">
                            <h2 class="card-title fw-bold pe-5">Beli Botol Plastik Langsung Dari Pabriknya!</h2>
                            <p class="card-text mb-0 pe-5 me-4">Kami hadirkan aneka botol plastik dengan mutu dan kualitas grade medis, diproduksi dengan teknologi dan kualitas tinggi serta bersertifikat ISO!</p>
                            <p class="card-text fw-bold">Langsung dari pabrik untuk harga terbaik!</p>
                            <button class="btn btn-info bg-botol border-0 rounded-pill fw-bold px-4 my-4 text-white">Lihat Koleksi <i class="fas fa-chevron-right ms-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://marshalledc.org/sites/default/files/banner/mountains.jpg" class="d-block w-100" alt="...">
                <div class="container card-img-overlay d-flex align-items-center">
                    <div class="row d-none d-lg-block">
                        <div class="col-6 pe-5">
                            <h2 class="card-title fw-bold pe-5">Beli Botol Plastik Langsung Dari Pabriknya!</h2>
                            <p class="card-text mb-0 pe-5 me-4">Kami hadirkan aneka botol plastik dengan mutu dan kualitas grade medis, diproduksi dengan teknologi dan kualitas tinggi serta bersertifikat ISO!</p>
                            <p class="card-text fw-bold">Langsung dari pabrik untuk harga terbaik!</p>
                            <button class="btn btn-info bg-botol border-0 rounded-pill fw-bold px-4 my-4 text-white">Lihat Koleksi <i class="fas fa-chevron-right ms-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://marshalledc.org/sites/default/files/banner/mountains.jpg" class="d-block w-100" alt="...">
                <div class="container card-img-overlay d-flex align-items-center">
                    <div class="row d-none d-lg-block">
                        <div class="col-6 pe-5">
                            <h2 class="card-title fw-bold pe-5">Beli Botol Plastik Langsung Dari Pabriknya!</h2>
                            <p class="card-text mb-0 pe-5 me-4">Kami hadirkan aneka botol plastik dengan mutu dan kualitas grade medis, diproduksi dengan teknologi dan kualitas tinggi serta bersertifikat ISO!</p>
                            <p class="card-text fw-bold">Langsung dari pabrik untuk harga terbaik!</p>
                            <button class="btn btn-info bg-botol border-0 rounded-pill fw-bold px-4 my-4 text-white">Lihat Koleksi <i class="fas fa-chevron-right ms-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev pe-md-5" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon me-md-5 me-0" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section id="content">
        <div class="container py-3 pt-5 mt-5">
            <h6 class="text-center fw-bold">Tentang BotolPlastik.id</h6>
        </div>
        <div class="container-fluid">
            <h1 class="h1 mb-4 text-center text-botol fw-bold font-merri">Unggul dalam harga, kualitas dan design</h1>
            <p class="w-75 text-center mx-auto mb-5">Botolplastik.id adalah divisi trading yang menjual aneka produk botol plastik dan variasi kelengkapannya, dari korporasi pabrik pabrik plastik unggul di Indonesia, yakni Suryasukses Group. Botolplastik.id hanya akan mendistribusikan produk botol plastik bermutu tinggi terbaik - medical grade, dari bahan baku plastik pilihan berkualitas tinggi. Botolplastik.id didirikan untuk dapat menjangkau konsumen pengusaha retail yang bergerak di bidang makanan dan minuman mulai dari konsumen ukm, industri rumah tangga, hingga industri besar sekalipun. Dengan pengalaman lebih dari 3 dekade dibidang plastik, kami memiliki pengalaman panjang dan luas serta jaringan distribusi produk plastik di seluruh kota besar di Indonesia seperti Jakarta, Surabaya, Semarang, Yogyakarta, Bandung, Bali dan masih banyak lagi. Dengan pengalaman dan pengetahuan unik dari para pendiri kami, kami adalah mitra terbaik dan paling menguntungkan Anda untuk jangka panjang.</p>
        </div>
        <div class="container py-5">
            <h6 class="text-center text-botol fw-bold">Koleksi Produk Botol Plastik Unggulan Kami:</h6>
        </div>

        <div class="container-fluid mb-5">
            <div class="row mx-0 row-cols-2 row-cols-lg-4 g-2 g-lg-5">
                @foreach ($produk as $items)
                <div class="col">
                    <div class="card bg-white border-0">
                        <img src="{{ url($items['image']) }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h6 class="card-title text-botol fw-bold py-2">{{ $items["nama"] }}</h6>
                            <a href="#" class="btn btn-primary bg-botol-tua fw-bold">Lihat Produk</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach ($produk as $items)
                <div class="col">
                    <div class="card bg-white border-0">
                        <img src="{{ url($items['image']) }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h6 class="card-title text-botol fw-bold py-2">{{ $items["nama"] }}</h6>
                            <a href="#" class="btn btn-primary bg-botol-tua fw-bold">Lihat Produk</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="container-fluid py-5">
            <h6 class="text-center pb-4 text-botol fw-bold">Lihat Lebih Lengkap Sesuai Kategori Koleksi:</h6>
            <div class="border-top border-bottom py-3">
                <div class="d-md-flex justify-content-center fw-bold pt-2 mt-1">
                    <p class="border-4 border-dark px-3 border-end"><a href="" class="text-decoration-none link-hover-lainnya text-dark">PET Performs</a></p>
                    <p class="border-4 border-dark px-3 border-end"><a href="" class="text-decoration-none link-hover-lainnya text-dark">PET Bottles</a></p>
                    <p class="border-4 border-dark px-3 border-end"><a href="" class="text-decoration-none link-hover-lainnya text-dark">Dringking Cup</a></p>
                    <p class="border-4 border-dark px-3 border-end"><a href="" class="text-decoration-none link-hover-lainnya text-dark">Lids</a></p>
                    <p class="border-4 border-dark px-3"><a href="" class="text-decoration-none text-dark link-hover-lainnya">PP Jars</a></p>
                </div>
            </div>
        </div>

        <div class="container-fluid px-0">
            <div class="card bg-dark text-white">
                <img src="{{ url('image/banner-bawah.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay d-flex bg-gradasi-botol ps-5 w-50 align-items-center">
                    <div class="font-merri">
                        <h1 class="card-title display-4 my-0 fw-bold">Follow Kami</h1>
                        <h1 class="card-title display-4 mb-3">di Instagram</h1>
                        <p class="card-text f w-normal w-75">Dapatkan informasi dan update seputar produk Botol Plastik serta aneka informasi menarik.</p>
                        <div class="d-flex position-relative">
                            <i class="fab fa-instagram flex-shrink-0 display-3 me-4"></i>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h6 class="my-0 text-uppercase fs-12 letter-spacing">Instagram</h6>
                                    <a href="#" class="stretched-link fw-bold text-decoration-none text-white">botolplastik.idn</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="pelanggan">
        <div class="container py-5">
            <h6 class="text-botol text-center fw-bold">Pelanggan Kami :</h6>
        </div>
        <div class="container-fluid py-4 border-top">
            <div class="container-fluid">
                <div class="row g-2 g-lg-3 justify-content-between">
                    <div class="col-md-1 col-6 p-md-0 p-4 d-flex align-items-center justify-content-center">
                        <a href=""><img src="{{ url('image/mip.png') }}" width="100%" alt=""></a>
                    </div>
                    <div class="col-md-1 col-6 p-md-0 p-4 d-flex align-items-center justify-content-center">
                        <a href=""><img src="{{ url('image/pms.png') }}" width="100%" alt=""></a>
                    </div>
                    <div class="col-md-1 col-6 p-md-0 p-4 d-flex align-items-center justify-content-center">
                        <a href=""><img src="{{ url('image/wilco.png') }}" width="100%" alt=""></a>
                    </div>
                    <div class="col-md-1 col-6 p-md-0 p-4 d-flex align-items-center justify-content-center">
                        <a href=""><img src="{{ url('image/donat.png') }}" width="100%" alt=""></a>
                    </div>
                    <div class="col-md-1 col-6 p-md-0 p-4 d-flex align-items-center justify-content-center">
                        <a href=""><img src="{{ url('image/nitigura.png') }}" width="100%" alt=""></a>
                    </div>
                    <div class="col-md-1 col-6 p-md-0 p-4 d-flex align-items-center justify-content-center">
                        <a href=""><img src="{{ url('image/cirebon.png') }}" width="100%" alt=""></a>
                    </div>
                    <div class="col-md-1 col-6 p-md-0 p-4 d-flex align-items-center justify-content-center">
                        <a href=""><img src="{{ url('image/dream_wear.png') }}" width="100%" alt=""></a>
                    </div>
                    <div class="col-md-1 col-6 p-md-0 p-4 d-flex align-items-center justify-content-center">
                        <a href=""><img src="{{ url('image/ciptakan.png') }}" width="100%" alt=""></a>
                    </div>
                    <div class="col-md-1 col-6 p-md-0 p-4 d-flex align-items-center justify-content-center">
                        <a href=""><img src="{{ url('image/pick.png') }}" width="100%" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('includes._footer')
@endsection