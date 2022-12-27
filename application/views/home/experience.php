<!doctype html>
<html lang="en">
<style>
    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    * {
        margin: 0;
        padding: 0;
    }

    head {
        display: none;
    }

    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fff;
        overflow-x: hidden;

        background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(../assets/img/bg/sky.jfif);
        background-repeat: no-repeat;
        background-size: cover;

    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1030;
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

    a {
        color: #007bff;
        text-decoration: none;
        background-color: transparent;
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

    button,
    select {
        text-transform: none;
    }

    button,
    input {
        overflow: visible;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    .navbar-toggler-icon {
        display: inline-block;
        width: 1.5em;
        height: 1.5em;
        vertical-align: middle;
        content: "";
        background: no-repeat center center;
        background-size: 100% 100%;
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
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }

    ul {
        display: block;
        list-style-type: disc;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        padding-inline-start: 40px;
    }

    .navbar {
        text-transform: uppercase;
        font-weight: 600;
        font-size: .8rem;
        letter-spacing: .1rem;
        background: rgba(0, 0, 0, 0.8) !important;
        align-items: center;
    }

    .back {
        height: 100vh;
        width: 100%;
        background-size: cover;
    }

    div {
        display: block;
    }

    .button1 {
        height: 70px;
        width: 600px;
        background: #ecf0f1;
        margin: auto auto;
        position: relative;
        top: 50%;
        transform: translate(0%, -50%);
        color: #333;
        text-align: center;
        line-height: 70px;
        font-size: 30px;
        font-family: 'Courier Prime', monospace;
        cursor: pointer;
        transition: all .3s ease-in 1.2s;
    }

    .top-bar {
        height: 2px;
        width: 0%;
        position: absolute;
        top: 0px;
        right: 0px;
        background: #fff;
        transition: all .4s ease .2s;
    }

    .bot-bar {
        position: absolute;
        bottom: 0px;
        height: 2px;
        width: 0%;
        left: 0px;
        background: #fff;
        transition: all .4s ease .8s;
    }

    .left-bar {
        height: 0%;
        width: 2px;
        background: #fff;
        position: absolute;
        left: 0px;
        top: 0px;
        transition: all .2s ease;
    }

    .right-bar {
        height: 0%;
        width: 2px;
        background: #fff;
        position: absolute;
        right: 0px;
        bottom: 0px;
        transition: all .2s ease .6s;
    }

    .display-4 {
        font-size: 3.5rem;
        font-weight: 300;
        line-height: 1.2;
    }

    .jj {
        color: rgb(241, 223, 117);
        text-align: center;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
        display: block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
    }

    .mb-4,
    .my-4 {
        margin-bottom: 1.5rem !important;
    }

    .mt-4,
    .my-4 {
        margin-top: 1.5rem !important;
    }

    .lead {
        font-size: 1.25rem;
        font-weight: 300;
    }

    hr {
        box-sizing: content-box;
        height: 0;
        overflow: visible;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, .1);
    }

    .padding-40 {
        padding: 0px 40px;
    }

    .vertical-center {
        display: flex !important;
        justify-content: center;
        align-items: center;
    }

    .margin-right-2percent {
        margin-right: 2%;
    }

    .height-400 {
        height: 400px;
    }

    .half-width {
        width: 50%;
        display: inline-block;
    }

    .padding-40 h2 {
        color: black;
        font-family: 'Josefin Slab', serif;
        font-weight: bold !important;
        border-bottom: double black;
    }

    .text-white {
        color: #fff !important;
    }

    .icon {
        top: 0px;
        position: absolute;
        float: right;
        right: 10px;
        padding: 0px;
        top: 5px;
    }

    .display-4 {
        text-align: center;
    }

    .h1,
    h1 {
        font-size: 2.5rem;
    }

    .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: 0.25rem;
        border: 1px solid black !important;
    }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
    }

    .bg-name {
        background-color: white !important;
    }

    .p-20 {
        padding: 15px;
    }

    .mb-3 {
        color: gold;
    }

    .no-gutters {
        margin-right: 0;
        margin-left: 0;
    }

    .vertical-center0 {
        display: flex !important;
        justify-content: center;
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1.25rem;
        color: black;
        text-align: justify;

    }

    .name-line0 {
        width: 100%;
        background-color: white !important;
    }

    textarea {
        overflow: auto;
        resize: vertical;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    .btn {
        display: inline-block;
        font-weight: 400;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
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
                Artisan Tourism
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
                                <a class="dropdown-item" href="<?= base_url('home/tips'); ?>">Tips</a>
                                <a class="dropdown-item" href="<?= base_url('home/experience'); ?>">Experience</a>
                                <a class="dropdown-item" href="<?= base_url('auth'); ?>">Member</a>
                                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        <div class="back" style=" background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.3)),url(../assets/img/bg/backpack.jpg);">
            <div class="button1">
                <div class="top-bar"></div>
                <div class="bot-bar"></div>
                <div class="left-bar"></div>
                <div class="right-bar"></div>
                SHARE YOUR EXPERIENCE WITH US
            </div>
        </div>
        <div class="form-exp aos-init aos-animate" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true">
            <h1 style="margin-top: 30px; margin-bottom: 30px; text-align: center;">FORM</h1>
        </div>

        <form>
            <div>
                <div class="write-name container aos-init aos-animate" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true">
                    <div class="card mb-3 bg-name p-20">
                        <div class="row no-gutters">
                            <div class="vertical-center0" style="width: 100%;">
                                <div class="col-md-2" style="margin-top: 2%;">
                                    <img src="<?= base_url('assets/img/bg/123.jpg'); ?>" class="card-img" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body bg-name">
                                        <textarea class="name-line0" id="review" type="text" placeholder="Write Your Review Here..." rows="8" required="" name="un"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body bg-name style=" style="text-align: right;">
                                <button type="button" class="btn btn-outline-light btn-lg" style="color: black; border: 2px;" onclick="submitReview()">SUBMIT HERE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>



        <div class="container width-exp background-jumbo">
            <div class="jumbotron jumbo-exp">
                <div class="review-exp aos-init aos-animate" data-aos="fade-left" data-aos-duration="2000" data-aos-once="true">
                    <h1 style="margin-top: 20px; margin-bottom: 30px; border-bottom: double white; color: black; text-align: center;">OTHERS REVIEW</h1>
                </div>
                <div>
                    <div id="Review">
                        <div class="write-name aos-init aos-animate" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true">
                            <div class="card mb-3 bg-name p-20" style="max-width: 49%; display: inline-block;">
                                <div class="row no-gutters">
                                    <div class="vertical-center">
                                        <div class="col-md-2">
                                            <img src="<?= base_url('assets/img/bg/321.jpg'); ?>" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="card-body bg-name">
                                                <input class="name-line" type="text" placeholder="Josie" disabled=""><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vertical-center0">
                                        <div class="col-md-2" style="margin-top: 2%;">
                                            <img src="<?= base_url('assets/img/bg/123.jpg'); ?>" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="card-body bg-name">
                                                <textarea class="name-line0" type="text" placeholder="For our visit to Labuan Bajo, we hired a private boat from Great Komodo Tour. It was a really fun experience with the Great Komodo Tour team. They are really polite and knowledgeable about the must visit spots in the komodo island area. We originally booked a one day trip with them, and when our flight back got cancelled, we book another day trip. We visited a number of spots but for sure the highlights are: padar island, pink beach, and manta point. Swimming w the manta fish is an amazing experience. Thank you to the team and I recommend anyone who is visiting Labuan Bajo to have a trip with Great Komodo Tour." rows="8" disabled=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3 bg-name p-20" style="margin-left: 1.5%; max-width: 49%; display: inline-block;">
                                <div class="row no-gutters">
                                    <div class="vertical-center">
                                        <div class="col-md-2">
                                            <img src="<?= base_url('assets/img/bg/321.jpg'); ?>" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="card-body bg-name">
                                                <input class="name-line" type="text" placeholder="Alfath" disabled=""><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vertical-center0">
                                        <div class="col-md-2" style="margin-top: 2%;">
                                            <img src="<?= base_url('assets/img/bg/123.jpg'); ?>" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="card-body bg-name">
                                                <textarea class="name-line0" type="text" placeholder="I loved my experience with Barefoot Conservation in Arborek. I learnt to identify different fish and coral species, had some incredible dives, including with mantas, got to visit local communities and made some lifelong friends. The snorkelling right off the jetty is some of the best I've ever done - with mantas breaching in the distance and schools of bumphead parrotfish so close you can almost touch them. The accommodation was extremely basic, but it was clean and I was there for an adventure - not to indulge in modern conveniences so it all added to the experience for me. If you're a bit of a princess then it's probably not for you, but if you're up for an adventure I highly recommend this expedition and I have just signed up to return!" rows="8" disabled=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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