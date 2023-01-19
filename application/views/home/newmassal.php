<!doctype html>
<html lang="en">
<style>
    .form-req {
        border: 1px solid black;
        box-shadow: 3px;

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

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    .icon {
        top: 0px;
        position: absolute;
        float: right;
        right: 10px;
        padding: 0px;
        top: 5px;
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
                                <a class="dropdown-item" href="<?= base_url('home/indexdosen'); ?>">Home</a>
                                <a class="dropdown-item" href="<?= base_url('auth'); ?>">Profile</a>
                                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>

        <!-- INI AKHIR NAVBAR -->
        <div class="bootstrap-iso ">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center" style="margin-top:100px; border:1px;">
                    <div class="form-req col-md-6 col-sm-6 col-xs-12">
                        <h3 style="text-align: center;">Buat Jadwal Bimbingan Massal</h3>
                        <form action="<?= base_url('home/tambahindividu'); ?>" method="post">
                            <div class="form-group row" style="margin-top: 20px;">
                                <label class="col-sm-2 col-form-label">Jenis Bimbingan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="jenis">
                                        <option value="online">Online</option>
                                        <option value="offline">Offline</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Lokasi (Apabila Onsite)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="lokasi" placeholder="Lokasi">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Link Bimbingan (Apabila Online)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="link" placeholder="Link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <!-- Date input -->
                                <label class="col-sm-2 col-form-label">Tanggal Bimbingan</label>
                                <input class="form-control col-sm-10" name="tgl_bimbingan" placeholder="DD/MM/YYY" type="date" />
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Dosen Pembimbing</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="dospem" placeholder="Dosen">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Angkatan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="angkatan">
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mahasiswa Bimbingan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="mahasiswa" placeholder="isi dengan ' - '">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <a href="<?= base_url('home/new'); ?>">Back</a>
                                </div>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary">Send Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
        <!--  jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

        <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
        <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

        <!-- Bootstrap Date-Picker Plugin -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
        <script>
            $(document).ready(function() {
                var date_input = $('input[name="date"]'); //our date input has the name "date"
                var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
                var options = {
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                };
                date_input.datepicker(options);
            })
        </script>
</body>

</html>