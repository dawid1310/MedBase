@extends('layout')
@section('content')
<section style="background-color: #03acfa !important;">
    <div class="container py-5">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bi bi-pen'></i>
            </div>
            <div class="col-lg-7 col-12 text-light pt-2">
                <h3 class="h4 light-300">Zarządzanie wizytami</h3>
                <p class="light-300">Tu możesz zarządzać przeprowadzonymi wizytami oraz terapiami</p>
            </div>
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bi bi-pen'></i>
            </div>
        </div>
    </div>
</section>
    <section class="py-5 mb-5">
        <div class="container">
            <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-10 col-12project ui graphic">
                <a href="treatment/create"
                    class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="./assets/img/visit.jpg" alt="Card image">
                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="service-work-content text-left text-light">
                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Zarządzanie wizytami</span>
                            <p class="card-text">Dodaj nowy przypadek, jeśli przeprowadzona wizyta dała powody do
                                dłuższego
                                leczenia</p>
                        </div>
                    </div>
                </a>
            </div><!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-10 col-12 ">
                <a href="treatment/doctor/current"
                    class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="./assets/img/visit.jpg" alt="Card image">
                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="service-work-content text-left text-light">
                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Aktualne
                                przypadki</span>
                            <p class="card-text">Możliwość podglądu i zarządzania aktualnie prowadzonymi przypadkami
                            </p>
                        </div>
                    </div>
                </a>
            </div><!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-10 col-12">
                <a href="treatment/doctor/history"
                    class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="./assets/img/visit.jpg" alt="Card image">
                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="service-work-content text-left text-light">
                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Historia
                                przypadków</span>
                            <p class="card-text">Przeglądaj wszystkie zakończone przypadki</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </section>
@endsection
