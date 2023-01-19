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
                                <a class="dropdown-item" href="<?= base_url('home/indexprodi'); ?>">Home</a>
                                <a class="dropdown-item" href="<?= base_url('auth'); ?>">Profile</a>
                                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>

        <!-- INI AKHIR NAVBAR -->
        <div class="row" style="margin-top: 100px;">
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Ririn Ikana Desanti, S.Kom., M.Kom.</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Suryasari, S.Kom., M.T.</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Melissa Indah Fianty, S.Kom., M.MSI.</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Wella, S.Kom., M.MSI.</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="bootstrap-iso ">
                            <div class="container-fluid">
                                <div class="row justify-content-center align-items-center" style="margin-top:100px; border:1px;">
                                    <div class="form-req col-md-6 col-sm-6 col-xs-12">
                                        <h3 style="text-align: center;">Report Rekap Bimbingan Dosen</h3>
                                        <form>
                                            <div class="form-group row" style="margin-top: 20px;">
                                                <label for="inputNamaDos" class="col-sm-2 col-form-label">Nama Dosen</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputNamaDos" placeholder="Nama Dosen">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputNIK" class="col-sm-2 col-form-label">NIK</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputNIK" placeholder="NIK">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputJumlah" class="col-sm-2 col-form-label">Jumlah Bimbingan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputJumlah" placeholder="Jumlah Bimbingan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputNamaMhs" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputNamaMhs" placeholder="Nama Mahasiswa">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputNIM" class="col-sm-2 col-form-label">NIM</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputNIM" placeholder="NIM">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputTahun" class="col-sm-2 col-form-label">Tahun Angkatan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputTahun" placeholder="Tahun Angkatan">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="bootstrap-iso ">
                            <div class="container-fluid">
                                <div class="row justify-content-center align-items-center" style="margin-top:100px; border:1px;">
                                    <div class="form-req col-md-6 col-sm-6 col-xs-12">
                                        <h3 style="text-align: center;">Report Rekap Bimbingan Dosen</h3>
                                        <form>
                                            <div class="form-group row" style="margin-top: 20px;">
                                                <label for="inputNamaDos" class="col-sm-2 col-form-label">Nama Dosen</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputNamaDos" placeholder="Nama Dosen">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputNIK" class="col-sm-2 col-form-label">NIK</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputNIK" placeholder="NIK">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputJumlah" class="col-sm-2 col-form-label">Jumlah Bimbingan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputJumlah" placeholder="Jumlah Bimbingan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputNamaMhs" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputNamaMhs" placeholder="Nama Mahasiswa">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputNIM" class="col-sm-2 col-form-label">NIM</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputNIM" placeholder="NIM">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputTahun" class="col-sm-2 col-form-label">Tahun Angkatan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputTahun" placeholder="Tahun Angkatan">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <div class="bootstrap-iso ">
                            <div class="container-fluid">
                                <div class="row justify-content-center align-items-center" style="margin-top:100px; border:1px;">
                                    <div class="form-req col-md-6 col-sm-6 col-xs-12">
                                        <h3 style="text-align: center;">Report Rekap Bimbingan Dosen</h3>
                                        <form>
                                            <div class="form-group row" style="margin-top: 20px;">
                                                <label for="inputNamaDos" class="col-sm-2 col-form-label">Nama Dosen</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputNamaDos" placeholder="Nama Dosen">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputNIK" class="col-sm-2 col-form-label">NIK</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputNIK" placeholder="NIK">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputJumlah" class="col-sm-2 col-form-label">Jumlah Bimbingan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputJumlah" placeholder="Jumlah Bimbingan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputNamaMhs" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputNamaMhs" placeholder="Nama Mahasiswa">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputNIM" class="col-sm-2 col-form-label">NIM</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputNIM" placeholder="NIM">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputTahun" class="col-sm-2 col-form-label">Tahun Angkatan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputTahun" placeholder="Tahun Angkatan">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                        <div class="bootstrap-iso ">
                            <div class="container-fluid">
                                <div class="row justify-content-center align-items-center" style="margin-top:100px; border:1px;">
                                    <div class="form-req col-md-6 col-sm-6 col-xs-12">
                                        <h3 style="text-align: center;">Report Rekap Bimbingan Dosen</h3>
                                        <form>
                                            <div class="form-group row" style="margin-top: 20px;">
                                                <label for="inputNamaDos" class="col-sm-2 col-form-label">Nama Dosen</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputNamaDos" placeholder="Nama Dosen">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputNIK" class="col-sm-2 col-form-label">NIK</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputNIK" placeholder="NIK">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputJumlah" class="col-sm-2 col-form-label">Jumlah Bimbingan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputJumlah" placeholder="Jumlah Bimbingan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputNamaMhs" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputNamaMhs" placeholder="Nama Mahasiswa">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputNIM" class="col-sm-2 col-form-label">NIM</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputNIM" placeholder="NIM">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputTahun" class="col-sm-2 col-form-label">Tahun Angkatan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputTahun" placeholder="Tahun Angkatan">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div>
            <div>
                <a href="<?= base_url('home/indexprodi'); ?>">Back</a>
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
</body>

</html>