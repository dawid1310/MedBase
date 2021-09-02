@extends('layout')
@section('content')
    <section class="py-5 mb-5">
        <div class="container">
            <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                <a href="treatment/create"
                    class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="./assets/img/services-02.jpg" alt="Card image">
                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="service-work-content text-left text-light">
                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Rozpocznij nowy
                                przypadek</span>
                            <p class="card-text">Dodaj nowy przypadek, jeśli przeprowadzona wizyta dała powody do
                                dłuższego
                                leczenia</p>
                        </div>
                    </div>
                </a>
            </div><!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-xl-3 col-md-4 col-sm-6 project branding">
                <a href="treatment/doctor/current"
                    class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="./assets/img/services-03.jpg" alt="Card image">
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
            <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                <a href="treatment/doctor/history"
                    class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="./assets/img/services-04.jpg" alt="Card image">
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
    </section>
@endsection
