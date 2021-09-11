@extends('layout')
@section('content')



    <div class="banner-wrapper bg-light">
        <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">


            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1
                                    class="banner-heading h1 text-dark display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                    Wizyty lekarskie online
                                </h1>
                                <p class="banner-body text-dark py-3 mx-0 px-0">
                                    Suscipit tellus mauris a diam maecenas. Montes nascetur ridiculus mus mauris vitae ultricies. Rhoncus urna neque viverra justo. Turpis in eu mi bibendum neque egestas congue quisque. Lectus urna duis convallis convallis tellus id interdum velit laoreet. In cursus turpis massa tincidunt dui ut ornare lectus sit. Vel pharetra vel turpis nunc eget lorem. Sit amet consectetur adipiscing elit ut. Pharetra magna ac placerat vestibulum lectus mauris ultrices eros in. Sagittis vitae et leo duis ut diam quam nulla porttitor. Egestas quis ipsum suspendisse ultrices gravida. A pellentesque sit amet porttitor eget dolor morbi.
                                </p>
                                <a class="banner-button btn rounded-pill btn-outline-dark btn-lg px-4" href="/visits"
                                    role="button">Umów wizytę</a>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-dark display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                    Wypisywanie recept i zwolnień
                                </h1>
                                <p class="banner-body text-dark py-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <a class="banner-button btn rounded-pill btn-outline-dark btn-lg px-4" href="/visits"
                                    role="button">Umów wizytę</a>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-dark display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                    Terapie
                                </h1>
                                <p class="banner-body text-dark py-3">
                                    Diam volutpat commodo sed egestas egestas fringilla phasellus. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Platea dictumst quisque sagittis purus sit amet volutpat consequat mauris. Elit sed vulputate mi sit amet mauris commodo quis. Augue ut lectus arcu bibendum at varius vel. Maecenas sed enim ut sem. Euismod quis viverra nibh cras pulvinar mattis nunc. Dui ut ornare lectus sit. Euismod in pellentesque massa placerat duis ultricies lacus. Nullam ac tortor vitae purus faucibus ornare suspendisse sed. Id diam maecenas ultricies mi eget mauris pharetra et ultrices. Erat velit scelerisque in dictum non consectetur a.
                                </p>
                                <a class="banner-button btn rounded-pill btn-outline-dark btn-lg px-4" href="/visits"
                                    role="button">Umów wizytę</a>
                            </div>
                        </div>

                    </div>
                </div>
                <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button"
                    data-bs-slide="prev">
                    <i class='bx bx-chevron-left'></i>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button"
                    data-bs-slide="next">
                    <i class='bx bx-chevron-right'></i>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>


        </div>
    </div>

    <section class="service-wrapper py-3 mx-auto">
        <div class="container-fluid pb-3 mx-auto">
            <div class="row mx-auto">
                <h2 class="h2 text-center col-12 py-5 semi-bold-600">Znajdź lekarza</h2>
                <div class="row service-heading col-10 col-lg-9 text-start light-300 mx-auto">
                    <form method="GET" action="search" class="form-inline my-2 my-lg-0 mx-auto">
                        <input name="doctor" class="form-control mr-sm-2 mx-auto w-50" type="search" placeholder="Search"
                            aria-label="Search">
                        
                            <button class="btn nav-link btn-outline-primary active shadow rounded-pill text-light px-4 light-300 mx-auto mt-3 mb-2"
                                type="submit">Wyszukaj</button>

                    </form>
                </div>
                <div class="service-heading col-10 col-lg-9 text-start light-300 mx-auto">
                    <h2 class="h3 pb-4  text-center">Wyszukiwanie lekarzy naszego serwisu</h2>
                </div>
            </div>
            <p class="service-footer col-10 offset-2 col-lg-9 offset-lg-3 text-start pb-3 text-muted px-2 mx-auto">
                Dzięki wysukiwarce możesz znaleźć lekarza wyszukując go po imieniu i nazwisku lub znaleźć lekarza danej
                specjalizacji.
            </p>
        </div>
    </section>
@endsection
