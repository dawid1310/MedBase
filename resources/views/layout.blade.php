<!DOCTYPE html>
<html lang="en">

<head>
    <title>Medbase</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{asset("assets/img/apple-icon.png")}}">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="{{asset('./assets/css/boxicon.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="/assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/custom.css">
    <link rel="stylesheet" href="css/mdb.min.css" />
    @yield('css')
</head>
<body>
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow ">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="/">
                <i class='bx bx-buildings bx-sm text-dark'></i>
                <span class="text-primary h4">MedBase</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="/about">Informacje</a>
                        </li>
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="/doctors">Lekarze</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="/visits">Wizyty</a>
                        </li>
                        {{$role}}
                        @auth
                        @if ($role=="Admin")
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="/manage">Recepcja</a>
                        </li>
                        @endif
                        
                        @endauth 
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <a class="nav-link" href="#"><i class='bx bx-bell bx-sm bx-tada-hover text-primary'></i></a>

                <div class="dropdown">
                    <a class="bx bx-user-circle bx-sm text-primary" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="dropdownMenu2">
                        @guest 
                        <li>
                            <a class="dropdown-item btn-outline-primary rounded-pill px-3" href="/login">Logowanie/Rejestracja</a>
                        </li>
                        @else
                        <li> 
                           <div class="dropdown-item  btn-outline-primary rounded-pill" > Witaj {{auth()->user()->name}} {{auth()->user()->surname}}! </div>
                        </li>
                        <li>
                            <a class="dropdown-item btn-outline-primary rounded-pill px-3" href="/account">Konto</a>
                        </li>
                        <li>
                            <a class="dropdown-item  btn-outline-primary rounded-pill" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Wyloguj się') }}</a><form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                        </li>

                        @endauth

                        <li><a class="dropdown-item btn-outline-primary rounded-pill px-3" href="/login">coś innego</a></li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="/manage">Recepcja</a>
                        </li>    
                    @endauth
                    </ul>
                </div>
    <!-- Links -->
  

  <!-- Navbar -->
                </div>
            </div>
        </div>
    </nav> 
    @yield('content')

    <!-- Start Footer -->
<footer class="bg-secondary pt-4">
    <div class="container">
        <div class="row py-4">

            <div class="col-lg-3 col-12 align-left">
                <a class="navbar-brand" href="index.html">
                    <i class='bx bx-buildings bx-sm text-light'></i>
                    <span class="text-light h5">Purple</span> <span class="text-light h5 semi-bold-600">Buzz</span>
                </a>
                <p class="text-light my-lg-4 my-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut.
                </p>
                <ul class="list-inline footer-icons light-300">
                    <li class="list-inline-item m-0">
                        <a class="text-light" target="_blank" href="http://facebook.com/">
                            <i class='bx bxl-facebook-square bx-md'></i>
                        </a>
                    </li>
                    <li class="list-inline-item m-0">
                        <a class="text-light" target="_blank" href="https://www.linkedin.com/">
                            <i class='bx bxl-linkedin-square bx-md'></i>
                        </a>
                    </li>
                    <li class="list-inline-item m-0">
                        <a class="text-light" target="_blank" href="https://www.whatsapp.com/">
                            <i class='bx bxl-whatsapp-square bx-md'></i>
                        </a>
                    </li>
                    <li class="list-inline-item m-0">
                        <a class="text-light" target="_blank" href="https://www.flickr.com/">
                            <i class='bx bxl-flickr-square bx-md'></i>
                        </a>
                    </li>
                    <li class="list-inline-item m-0">
                        <a class="text-light" target="_blank" href="https://www.medium.com/">
                            <i class='bx bxl-medium-square bx-md' ></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                <h3 class="h4 pb-lg-3 text-light light-300">Our Company</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="index.html">Home</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="about.html">About Us</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="work.html">Work</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i></i><a class="text-decoration-none text-light py-1" href="pricing.html">Price</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="contact.html">Contact</a>
                        </li>
                    </ul>
            </div>

            <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                <h2 class="h4 pb-lg-3 text-light light-300">Our Works</h2>
                <ul class="list-unstyled text-light light-300">
                    <li class="pb-2">
                        <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Branding</a>
                    </li>
                    <li class="pb-2">
                        <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Business</a>
                    </li>
                    <li class="pb-2">
                        <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Marketing</a>
                    </li>
                    <li class="pb-2">
                        <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Social Media</a>
                    </li>
                    <li class="pb-2">
                        <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Digital Solution</a>
                    </li>
                    <li class="pb-2">
                        <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Graphic</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                <h2 class="h4 pb-lg-3 text-light light-300">For Client</h2>
                <ul class="list-unstyled text-light light-300">
                    <li class="pb-2">
                        <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="tel:010-020-0340">010-020-0340</a>
                    </li>
                    <li class="pb-2">
                        <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:info@company.com">info@company.com</a>
                    </li>

                    <li class="pb-2">
                        <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="/doctors-registration">Zostań lekarzem naszego serwisu</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="w-100 bg-primary py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-lg-6 col-sm-12">
                    <p class="text-lg-start text-center text-light light-300">
                        © Copyright 2021 Purple Buzz Company. All Rights Reserved.
                    </p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <p class="text-lg-end text-center text-light light-300">
                        Designed by <a rel="sponsored" class="text-decoration-none text-light" href="https://templatemo.com/" target="_blank"><strong>TemplateMo</strong></a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->
<!-- Templatemo -->
<script src="assets/js/templatemo.js"></script>
<!-- Custom -->
<script src="assets/js/custom.js"></script>
<!-- Bootstrap -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Load jQuery require for isotope -->
<script src="assets/js/jquery.min.js"></script>
<!-- Isotope -->
<script src="assets/js/isotope.pkgd.js"></script>
<!-- Page Script -->
<script>
    $(window).load(function() {
        // init Isotope
        var $projects = $('.projects').isotope({
            itemSelector: '.project',
            layoutMode: 'fitRows'
        });
        $(".filter-btn").click(function() {
            var data_filter = $(this).attr("data-filter");
            $projects.isotope({
                filter: data_filter
            });
            $(".filter-btn").removeClass("active");
            $(".filter-btn").removeClass("shadow");
            $(this).addClass("active");
            $(this).addClass("shadow");
            return false;
        });
    });
</script>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>
    
</html>