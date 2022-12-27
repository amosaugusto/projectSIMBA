<!doctype html>
<html lang="en">
<style>
    div {
        display: block;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1030;
    }

    .navbar {
        position: relative;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 0.5rem 1rem;
        text-transform: uppercase;
        font-weight: 600;
        font-size: .8rem;
        letter-spacing: .1rem;
        background: rgba(0, 0, 0, 0.8) !important;
    }

    .navbar-dark .navbar-brand {
        color: #fff;
    }

    .navbar-brand {
        display: inline-block;
        padding-top: 0.3125rem;
        padding-bottom: 0.3125rem;
        margin-right: 1rem;
        font-size: 1.25rem;
        line-height: inherit;
        white-space: nowrap;
        margin-left: 5px;
        font-family: 'Pacifico', cursive;
        font-weight: 400;
    }

    .navbar-dark .navbar-toggler {
        color: rgba(255, 255, 255, .5);
        border-color: rgba(255, 255, 255, .1);
    }

    .navbar-toggler {
        padding: 0.25rem 0.75rem;
        font-size: 1.25rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: 0.25rem;
    }

    .navbar-collapse {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
        -ms-flex-positive: 1;
        flex-grow: 1;
        -ms-flex-align: center;
        align-items: center;
    }

    .ml-auto,
    .mx-auto {
        margin-left: auto !important;
    }

    .mr-3,
    .mx-3 {
        margin-right: 1rem !important;
    }

    .navbar-nav {
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }

    * {
        margin: 0;
        padding: 0;
    }

    .carousel {
        position: relative;
    }

    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .carousel-item {
        position: relative;
        display: none;
        float: left;
        width: 100%;
        margin-right: -100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;

        height: 100vh;
        background-size: cover;
        background-position: center;
    }

    .carousel-caption {
        font-family: 'Josefin Slab', serif;
        top: 35%;
        text-transform: uppercase;
        position: absolute;
        right: 15%;
        bottom: 20px;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: center;
    }

    .carousel-caption h2 {
        font-size: 1rem;
        margin-top: 20px;
    }

    .btn-outline-light {
        color: #f8f9fa;
        border-color: #f8f9fa;
    }

    .contain h5 {
        color: white;
        font-family: 'Oswald', sans-serif;
        margin-left: 20px;
    }

    .contain-1 h2 {
        color: white;
        font-family: 'Oswald', sans-serif;
        text-align: right;
        padding-top: 50px;
        margin-right: 20px;
    }

    .contain-1 h5 {
        text-align: right;
        color: white;
        font-family: 'Oswald', sans-serif;
        margin-right: 20px;
    }

    a {
        color: #007bff;
        text-decoration: none;
        background-color: transparent;
    }

    .contain h2 {
        color: white;
        font-family: 'Oswald', sans-serif;
        text-align: left;
        padding-top: 50px;
        margin-left: 20px;
    }

    .carousel-control-next,
    .carousel-control-prev {
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: 1;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 15%;
        color: #fff;
        text-align: center;
        opacity: .5;
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1.25rem;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: 0.25rem;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    .card-img,
    .card-img-bottom,
    .card-img-top {
        -ms-flex-negative: 0;
        flex-shrink: 0;
        width: 100%;
    }

    .card-img,
    .card-img-top {
        border-top-left-radius: calc(0.25rem - 1px);
        border-top-right-radius: calc(0.25rem - 1px);
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1.25rem;
        color: black;
        text-align: justify;
        background-color: white;
    }

    .jumbotron-fluid {
        padding-right: 0;
        padding-left: 0;
        border-radius: 0;
    }

    .jumbotron-4 {
        background-size: cover;
        margin-top: 30px !important;
        margin-left: 20px;
        margin-right: 20px;
        padding-bottom: 20px;
    }

    .jumbotron-4 h1 {
        margin-left: 50px;
        padding-top: 50px;
        font-size: 35PX;
        font-family: 'Oswald', sans-serif;
        color: white;
        font-weight: 600;
    }

    .boxt {
        width: 500px;
        height: 220px;
        border-radius: 10px;
        box-shadow: 5px 10px 12px rgb(0 0 0 / 70%);
        flex-direction: column;
        align-items: center;
        box-sizing: border-box;
        justify-content: space-between;
        margin: 20px 10px;
        background-size: cover;
        margin-left: 30px;
        margin-top: 50px;
    }

    .boxe {
        width: 500px;
        height: 220px;
        border-radius: 10px;
        box-shadow: 5px 10px 12px rgb(0 0 0 / 70%);
        flex-direction: column;
        align-items: center;
        box-sizing: border-box;
        justify-content: space-between;
        margin: 20px 10px;
        background-size: cover;
        margin-left: 760px;
    }

    [data-aos].aos-animate {
        pointer-events: auto;
    }
</style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="latihanBootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/59d975929c.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Artisan Tourism</title>
</head>

<body>
    <div class="cover" data-stellar-background-ratio="0.5">
        <!-- INI NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <a class="navbar-brand font-weight-bold" href="#" style="font-size: 18px;">
                <img src="<?= base_url('assets/img/bg/logo.jpg'); ?>" width="50" height="50" alt="logo">
                ARTISAN TOURISM
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="navbar-nav mr-3 ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('auth') ?>"> Login </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('auth/registration'); ?>">Register </a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- INI AKHIR NAVBAR -->

        <!-- INI CAROUSEL -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!--slide 1-->
                <div class="carousel-item active" style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(assets/img/bg/bajo.jpg);">
                </div>
                <!--slide 2-->
                <div class="carousel-item" style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(assets/img/bg/weh-island.jpg);">
                </div>
                <!--slide 3-->
                <div class="carousel-item" style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(assets/img/bg/rajaampat.jpg);">
                </div>
                <!--slide4-->
                <div class="carousel-item" style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(assets/img/bg/gili.jpg);">
                </div>
            </div>
            <!--caption-->
            <div class="carousel-caption text-center">
                <h1>WELCOME TO ARTISAN TOURISM</h1>
                <h2>start your vacation</h2>
                <a class="btn btn-outline-light btn-lg" href="#About-Artisan">Get Started</a>
            </div>
            <!--prev & next button-->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div id="About-Artisan">
            <div class="jumbotron jumbotron-fluid">
                <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true">
                    <h1 class="text_2">Liburan</h1>
                    <p class="lead1">Liburan atau berlibur adalah waktu bagi seseorang atau sekelompok orang untuk melakukan cuti singkat dari pekerjaan dan tugas tertentu atau
                        tidak bersekolah untuk periode tertentu, dengan tujuan relaksasi, melakukan perjalanan rekreatif atau berwisata, atau melakukan hobi.
                        Orang sering melakukan liburan pada waktu perayaan dan hari libur tertentu atau pada akhir pekan. Tergantung niat berlibur dan kesempatan,
                        liburan dapat dihabiskan bersama teman atau keluarga.
                        <br></br>
                        Konsep berlibur merupakan konsep yang ditemukan pada zaman modern, dan baru berkembang selama dua abad terakhir. Menurut catatan sejarah,
                        pemikiran mengenai perjalanan rekreatif sangat berkaitan dengan kemewahan yang hanya mampu dilakukan oleh orang kaya (lihat Tur Agung).
                        Dalam budaya Puritan di Amerika mula-mula, beristirahat dari pekerjaan dengan alasan selain pemeliharaan hari Sabat mingguan merupakan hal yang tidak dapat
                        diterima. Namun, konsep liburan modern kemudian dipimpin oleh gerakan agama baru yang mendorong retret dan rekreasi spiritual. Gagasan untuk berhenti
                        sementara dari pekerjaan secara berkala lalu mengakar pada kalangan kelas menengah dan kelas pekerja.
                    </p>
                </div>
            </div>
        </div>


        <div class="text-center">
            <div class="jumbotron jumbotron-fluid aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-once="true">
                <h2 class="heading" style="margin-bottom: 25px;"><b>TEMPAT POPULER</b></h2>
                <div class="heading-underline"></div>

                <!--first card-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card-1">
                                <img src="assets/img/bg/bajo.jpg" class="card-img-top" alt="ancol">
                                <div class="card-body">
                                    <h5 class="card-title m-1 ">Labuan Bajo</h5>
                                    <p class="card-text m-1 ">Nusa Tenggara Timur</p>
                                    <p class="m-1 mb-3">
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star-half-alt text-warning" aria-hidden="true"></i>
                                    </p>
                                    <p>
                                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            View More
                                        </a>
                                        <a class="btn btn-success" data-toggle="modal" data-target="#book_ticket">Buy Ticket</a>
                                    </p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            Labuan Bajo merupakan sebuah surga tersembunyi yang ada di Indonesia bagian timur. Desa ini terletak di Kecamatan Komodo, Kabupaten Manggarai Barat, Provinsi Nusa Tenggara Timur yang berbatasan langsung dengan Nusa Tenggara Barat dan dipisahkan oleh Selat Sape.
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-1">
                                <img src="assets/img/bg/weh-island.jpg" class="card-img-top" alt="..." style="height: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title m-1 ">Pulau Weh</h5>
                                    <p class="card-text m-1 ">Aceh</p>
                                    <p class="m-1 mb-3">
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                    </p>
                                    <p>
                                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            View More
                                        </a>
                                        <a class="btn btn-success" data-toggle="modal" data-target="#book_ticket">Buy Ticket</a>
                                    </p>
                                    <div class="collapse" id="collapseExample1">
                                        <div class="card card-body">
                                            Pulau Weh adalah pulau vulkanik kecil yang terletak di barat laut Pulau Sumatra. Pulau ini pernah terhubung dengan Pulau Sumatra, namun kemudian terpisah oleh laut setelah meletusnya gunung berapi terakhir kali pada zaman Pleistosen. Pulau ini terletak di Laut Andaman.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-1">
                                <img src="assets/img/bg/rajaampat.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title m-1 ">Raja Ampat</h5>
                                    <p class="card-text m-1 ">Papua Barat</p>
                                    <p class="m-1 mb-3">
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="far fa-star text-warning" aria-hidden="true"></i>
                                    </p>
                                    <p>
                                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            View More
                                        </a>
                                        <a class="btn btn-success" data-toggle="modal" data-target="#book_ticket">Buy Ticket</a>
                                    </p>
                                    <div class="collapse" id="collapseExample2">
                                        <div class="card card-body">
                                            Kepulauan Raja Ampat merupakan rangkaian empat gugusan pulau yang berdekatan dan berlokasi di barat bagian Kepala Burung (Vogelkoop) Pulau Papua. Secara administrasi, gugusan ini berada di bawah Kabupaten Raja Ampat, Provinsi Papua Barat.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end of first card-->

                <!--second card-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card-2">
                                <img src="assets/img/bg/gili.jpg" class="card-img-top" alt="..." style="height: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title">Pulau Gili</h5>
                                    <p class="card-text">Nusa Tenggara Barat</p>
                                    <p class="mb-3 mb-1">
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star-half-alt text-warning" aria-hidden="true"></i>
                                    </p>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        View More
                                    </a>
                                    <a class="btn btn-success" data-toggle="modal" data-target="#book_ticket">Buy Ticket</a>
                                    <p>

                                    </p>
                                    <div class="collapse" id="collapseExample3">
                                        <div class="card card-body">
                                            Kepulauan Gili atau Tiga Gili adalah kepulauan yang terdiri dari tiga pulau kecil atau pulau Gili kembar tiga — Gili Trawangan, Gili Meno, dan Gili Air — tepat di lepas pantai barat laut Lombok, Indonesia. Kepulauan ini merupakan destinasi wisata populer bagi wisatawan.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-2">
                                <img src="assets/img/bg/uluwatu.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Pura Luhur Uluwatu</h5>
                                    <p class="card-text">Bali</p>
                                    <p class="mb-3 mb-1">
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star-half-alt text-warning" aria-hidden="true"></i>
                                        <i class="far fa-star text-warning" aria-hidden="true"></i>
                                    </p>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        View More
                                    </a>
                                    <a class="btn btn-success" data-toggle="modal" data-target="#book_ticket">Buy Ticket</a>
                                    <p>

                                    </p>
                                    <div class="collapse" id="collapseExample4">
                                        <div class="card card-body">
                                            Pura yang terletak di ujung barat daya pulau Bali di atas anjungan batu karang yang terjal dan tinggi serta menjorok ke laut ini merupakan Pura Sad Kayangan yang dipercaya oleh orang Hindu sebagai penyangga dari 9 mata angin.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-2">
                                <img src="assets/img/bg/danautoba.jpg" class="card-img-top" alt="..." style="height: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title">Danau Toba</h5>
                                    <p class="card-text">Sumatera Utara</p>
                                    <p class="mb-3 mb-1">
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fas fa-star text-warning" aria-hidden="true"></i>
                                    </p>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        View More
                                    </a>
                                    <a class="btn btn-success" data-toggle="modal" data-target="#book_ticket">Buy Ticket</a>
                                    <p>

                                    </p>
                                    <div class="collapse" id="collapseExample5">
                                        <div class="card card-body">
                                            Danau Toba adalah lokasi letusan gunung berapi super masif berkekuatan VEI 8 sekitar 69.000 sampai 77.000 tahun yang lalu yang memicu perubahan iklim global. Metode penanggalan terkini menetapkan bahwa 74.000 tahun yang lalu lebih akurat.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end of second card-->
            </div>
        </div>
    </div>


    <!-- INI AKHIR CAROUSEL -->
    <div id="tipsexp">
        <div class="jumbotron-4 jumbotron-fluid" style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)), url(assets/img/bg/backpack.jpg);
    ">
            <div class="text2-justify">
                <h1>EXPERIENCE &amp; TIPS<br></h1>
                <div class="container_te">
                    <div class="boxt aos-init aos-animate" data-aos="fade-right" data-aos-offset="300" data-aos-duration="1000" data-aos-once="true" data-aos-easing="ease-in-sine">
                        <a class="link_te" href="<?= base_url('home/tips'); ?>">
                            <div class="contain">
                                <h2>TIPS</h2>
                                <h5>
                                    Even though you feel safe and healthy to explore the beauty of tourist attractions in Indonesia, it never hurts to see some info &amp; tips when you visit certain places. Here, we have a lot of useful information that you can use. </h5>
                            </div>
                        </a>
                    </div>
                    <div class="boxe aos-init aos-animate" data-aos="fade-left" data-aos-offset="150" data-aos-duration="1000" data-aos-once="true" data-aos-easing="ease-in-sine">
                        <a class="link_te1" href="<?= base_url('home/tips'); ?>">
                            <div class="contain-1">
                                <h2>EXPERIENCE</h2>
                                <h5>Let Artisan walk you through how to have a memorable experience on your trip to Indonesia.</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    <!-- INI AKHIR SIDEBAR -->

    </div>

    <footer class="page-footer font-small" style="margin-top: 30px; background-color: rgb(247, 247, 247);">

        <div style="background-color: rgb(17, 38, 85);">
            <!--button back to top-->
            <div class="btn btn-warning btn-floating" style="margin-left: 47%;">
                <a href="#" class="scroll-top" style="color: white; font-size: 17px; font-family:'Oswald',sans-serif;">Back To Top
                    <i class="fa fa-angle-double-up ml-1" style="color: white;" aria-hidden="true"></i></a>
            </div>
            <div class="container">
                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0" style="color: white;">Get connected with us on social networks!</h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">

                        <!-- Facebook -->
                        <a class="fb-ic" href="#">
                            <i class="fab fa-facebook-f white-text mr-5" aria-hidden="true"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic" href="#">
                            <i class="fab fa-twitter white-text mr-5" aria-hidden="true"> </i>
                        </a>
                        <!-- Youtube -->
                        <a class="yt-ic" href="#">
                            <i class="fab fa-youtube white-text mr-5" aria-hidden="true"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic" href="#">
                            <i class="fab fa-instagram white-text" aria-hidden="true"> </i>
                        </a>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5" style="color: black; margin-bottom: 30px;">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">Artisan Tourism</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: black;">
                    <p>This website provides you information about tourist spots in Indonesia and the ticket for you to buy.</p>

                </div>

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: black;">
                    <p>
                        <i class="fas fa-envelope mr-2" aria-hidden="true"></i> artisantourism@gmail.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-2" aria-hidden="true"></i>: +62 81234567890 / Amos <br>

                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Information</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: black;">
                    <p>
                        <i class="fas fa-question-circle mr-2" aria-hidden="true"></i><a href="#" data-toggle="modal" data-target="#popup" class="link" style="color: black">About us</a>
                    </p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="background-color:  rgb(17, 38, 85); color: white;">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Artisan Tourism <?= date('Y'); ?></span>
            </div>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="book_ticket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Warning!!!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Please Login to buy ticket.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('auth/') ?>"><button type="button" class="btn btn-primary">Login </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>