<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Han Market</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="includes/custom.css">
</head>

<body class="bg-light">
    <!-- Navbar Start -->
    <?php include "includes/header.php"; ?>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <!-- Hero Section -->
    <section class="hero d-flex align-items-center text-white">
        <div class="container">
            <h1 class="hero-title">HanMarket</h1>
            <p class="hero-subtitle">Nikmati pengalaman belanja online yang mudah, cepat, dan aman <br>di HanMarket. Temukan berbagai produk pilihan dengan <br>harga terjangkau serta kualitas yang selalu terjamin.</p>
            <a href="#" class="mt-3 btn btn-primary">Shop Now</a>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- jumbotrol 1 Start -->
    <div class="container-fluid py-3 bg-light mt-3">
        <!-- judul start -->
        <div class="container text-center mt-2">
            <h1>Kategori</h1>
            <p>Pilih kategori favoritmu dan temukan produk terbaik sesuai kebutuhan sehari-hari.</p>
        </div>

        <div class="container d-flex justify-content-around mt-5">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card">
                        <img style="height: 235px" src="assets/kategori-elektronik.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Elektronik</h5>
                            <p class="card-text">Produk elektronik terbaru dengan teknologi terkini dan garansi resmi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img style="height: 235px" src="assets/kategori-fashion.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Fashion</h5>
                            <p class="card-text">Koleksi pakaian dan aksesoris stylish untuk semua gaya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img style="height: 235px" src="assets/kategori-rumah.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Rumah Tangga</h5>
                            <p class="card-text">Peralatan rumah tangga berkualitas untuk mempermudah aktivitas harian.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jumbotron 1 end -->

    <!-- jumbotron 2 Start -->
    <div class="container-fluid py-3 bg-primary text-white mt-3">
        <!-- judul start -->
        <div class="container text-center mt-5">
            <h1>Penawaran Sepesial</h1>
            <p>Dapatkan promo menarik setiap harinya dengan harga terbaik hanya di HanMarket.</p>
        </div>
        <!-- judul end -->
        <!-- Card Start -->
        <div class="container d-flex justify-content-around mt-5">
            <div class="row g-4 text-center">
                <div class="col-md-6">
                    <div class="card" >
                        <img src="assets/sale.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Nikmati diskon luar biasa hingga 50% untuk produk pilihan terbaik. Segera belanja sebelum stok habis! </p>
                            <button type="button" class="btn btn-primary fs-5"><i class="bi bi-tag-fill"></i> Lihat Penawaran</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card" >
                        <img src="assets/free-ongkir.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Belanja lebih hemat dengan promo gratis ongkir ke seluruh Indonesia. Berlaku untuk produk tertentu, jangan lewatkan kesempatan ini!</p>
                            <button type="button" class="btn btn-primary fs-5"><i class="bi bi-tag-fill"></i> Lihat Penawaran</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- jumbotron 2 End -->

    <!-- jumbotron 3 -->
    <div class="container-fluid bg-light py-3 mt-3">
        <!-- judul start -->
        <div class="container text-center mt-5">
            <h1>Produk Terbaru</h1>
            <p>Koleksi produk terbaru yang sedang tren dan banyak dicari pelanggan.</p>
        </div>
        <!-- judul end -->
        <!-- Card Start -->
        <div class="container d-flex justify-content-around mt-5">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card" style="width: 16rem;">
                        <img src="assets/produk-iphone.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Iphone</h5>
                            <p class="card-subtitle">Smartphone elegan dengan performa cepat dan kamera canggih.</p>
                            <p class="card-text mt-2 text-success fs-5">Rp. 16.999.000</p>
                            <a href="#" class="btn btn-primary">Masukkan Ke &nbsp;<i style="font-size: 15px;" class="bi bi-cart"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 16rem;">
                        <img src="assets/produk-jaket.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Jaket</h5>
                            <p class="card-subtitle">Jaket trendi dengan bahan nyaman, cocok untuk gaya sehari-hari.</p>
                            <p class="card-text mt-2 text-success fs-5">Rp. 1.449.000</p>
                            <a href="#" class="btn btn-primary">Masukkan Ke &nbsp;<i style="font-size: 15px;" class="bi bi-cart"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 16rem;">
                        <img src="assets/produk-kamera.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kamera</h5>
                            <p class="card-subtitle">Kamera profesional dengan hasil jernih untuk momen berharga.</p>
                            <p class="card-text mt-2 text-success fs-5">Rp. 10.400.000</p>
                            <a href="#" class="btn btn-primary">Masukkan Ke &nbsp;<i style="font-size: 15px;" class="bi bi-cart"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 16rem;">
                        <img src="assets/produk-panci.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Panci</h5>
                            <p class="card-subtitle">Panci anti lengket dengan desain modern, ideal untuk memasak sehari-hari.</p>
                            <p class="card-text mt-2 text-success fs-5">Rp. 499.000</p>
                            <a href="#" class="btn btn-primary">Masukkan Ke &nbsp;<i style="font-size: 15px;" class="bi bi-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jumbotron 3 end -->

    <!-- jumbotron 4 Start -->
    <div class="container-fluid py-3 bg-light mt-3">
        <!-- judul start -->
        <div class="container text-center mt-5">
            <h1>Testimoni Pelanggan</h1>
            <p>Kepercayaan pelanggan adalah prioritas kami. Inilah pengalaman mereka bersama HanMarket.</p>
        </div>
        <!-- judul end -->
        <!-- Card Start -->
        <div class="container d-flex justify-content-around mt-5">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" style="width: 85px;" class="rounded-circle mx-auto mt-3" alt="...">
                        <div class="card-body text-center">
                            <p class="card-text">Pelayanan cepat dan produk berkualitas </p>
                            <h5 class="card-title">Mba Sri</h5>
                            <p class="card-text">Jakarta</p>
                            <div class="rating text-warning mt-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card" style="width: 20rem;">
                        <img src="https://randomuser.me/api/portraits/men/30.jpg" style="width: 85px;" class="rounded-circle mx-auto mt-3" alt="...">
                        <div class="card-body text-center">
                            <p class="card-text">Pelayanan cepat dan produk berkualitas </p>
                            <h5 class="card-title">Mas Uya</h5>
                            <p class="card-text">Tangerang</p>
                            <div class="rating text-warning mt-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card" style="width: 20rem;">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" style="width: 85px;" class="rounded-circle mx-auto mt-3" alt="...">
                        <div class="card-body text-center">
                            <p class="card-text">Pelayanan cepat dan produk berkualitas </p>
                            <h5 class="card-title">Mas Roni</h5>
                            <p class="card-text">Tangerang Selatan</p>
                            <div class="rating text-warning mt-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include "includes/footer.php"; ?>
    <!-- Footer End -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>