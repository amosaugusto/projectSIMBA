<!doctype html>
<html lang="en">
<style>
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

    .icon {
        top: 0px;
        position: absolute;
        float: right;
        right: 10px;
        padding: 0px;
        top: 5px;
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

    <title>SIMBA</title>
</head>

<body>
    <div class="cover" data-stellar-background-ratio="0.5">
        <!-- INI NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <a class="navbar-brand font-weight-bold" href="#" style="font-size: 18px;">
                <img src="<?= base_url('assets/img/bg/simbalogo.png'); ?>" width="100" height="50" alt="logo">
                <img src="<?= base_url('assets/img/bg/prodisi.png'); ?>" width="200" height="50" alt="logo" style="margin-left: 20px">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <div class="icon">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class=" mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" width="50" height="50" class="rounded-circle ">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="<?= base_url('home/indexlogged'); ?>">Home</a>
                                <a class="dropdown-item" href="<?= base_url('auth'); ?>">Profile</a>
                                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>

        <!-- INI AKHIR NAVBAR -->

        <!-- INI CAROUSEL -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
            <div class="carousel-inner" role="listbox">
                <!--slide 1-->
                <div class="carousel-item active" style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(../assets/img/bg/umn.png);">
                </div>
            </div>
            <!--caption-->
            <div class="carousel-caption text-center">
                <h1>WELCOME TO SIMBA</h1>
                <a class="btn btn-outline-light btn-lg" href="#Menu">Get Started</a>
            </div>

        </div>

        <div id="Menu" class="text-center">
            <div class="jumbotron jumbotron-fluid aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-once="true">
                <h2 class="heading" style="margin-bottom: 75px;"><b>MENU</b></h2>
                <div class="heading-underline"></div>

                <!--first card-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="<?= base_url('home/request'); ?>">
                                <div class="card-1">
                                    <img src="../assets/img/bg/req.png" class="card-img-top" alt="..." style="height: 100px; width: 100px;">
                                    <h5 class="card-title m-1">Request Bimbingan</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="<?= base_url('home/history'); ?>">
                                <div class="card-1">
                                    <img src="../assets/img/bg/his.png" class="card-img-top" alt="..." style="height: 100px; width: 100px;">
                                    <h5 class=" card-title m-1 ">History Bimbingan</h5>
                                </div>
                            </a>
                        </div>
                        <div class=" col-md-4">
                            <a href="<?= base_url('home/info'); ?>">
                                <div class="card-1">
                                    <img src="../assets/img/bg/info.png" class="card-img-top" alt="..." style="height: 100px; width: 100px;">
                                    <h5 class=" card-title m-1 ">Info Kurikulum</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end of first card-->
            </div>
        </div>
    </div>

    <div class=" modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>