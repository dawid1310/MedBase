    @extends('layout')
    @section('content')
        @auth

            @if ($role == 'User')
                <section style="background-color: #03acfa !important;">
                    <div class="container py-5">
                        <div class="row d-flex justify-content-center text-center">
                            <div class="col-lg-2 col-12 text-light align-items-center">
                                <i class='display-1 bi bi-droplet-fill'></i>
                            </div>
                            <div class="col-lg-7 col-12 text-light pt-2">
                                <h3 class="h4 light-300">Konto pacjenta</h3>
                                <p class="light-300">Quis ipsum suspendisse ultrices gravida.</p>
                            </div>
                            <div class="col-lg-2 col-12 text-light align-items-center">
                                <i class='display-1 bi bi-droplet-fill'></i>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="container overflow-hidden py-5">
                    <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
                        <!-- Start Recent Work -->
                        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                            <a href="account/{{ Auth::user()->id }}"
                                class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                                <img class="card-img" src="./assets/img/stethoscope.jpg" alt="Card image">
                                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                    <div class="service-work-content text-left text-light">
                                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Dane
                                            pacjenta</span>
                                        <p class="card-text">Aktualizacja i modyfikacja danych pacjenta</p>
                                    </div>
                                </div>
                            </a>
                        </div><!-- End Recent Work -->

                        <!-- Start Recent Work -->
                        <div class="col-xl-3 col-md-4 col-sm-6 project branding">
                            <a href="/treatment/user"
                                class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                                <img class="card-img" src="./assets/img/stethoscope.jpg" alt="Card image">
                                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                    <div class="service-work-content text-left text-light">
                                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Moje
                                            terapie</span>
                                        <p class="card-text">Historia wizyt oraz dokonanych transakcji</p>
                                    </div>
                                </div>
                            </a>
                        </div><!-- End Recent Work -->

                        <!-- Start Recent Work -->
                        <div class="col-xl-3 col-md-4 col-sm-6 project branding">
                            <a href="setSchedule"
                                class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                                <img class="card-img" src="./assets/img/stethoscope.jpg" alt="Card image">
                                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                    <div class="service-work-content text-left text-light">
                                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Historia
                                            użytkowania</span>
                                        <p class="card-text">Historia wizyt oraz dokonanych transakcji</p>
                                    </div>
                                </div>
                            </a>
                        </div><!-- End Recent Work -->

                        <!-- Start Recent Work -->
                        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                            <a href="/visits/show?operator=>="
                                class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                                <img class="card-img" src="./assets/img/stethoscope.jpg" alt="Card image">
                                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                    <div class="service-work-content text-left text-light">
                                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Planowane
                                            wizyty</span>
                                        <p class="card-text">Kalendarz umożliwiający sprawdzenie nadchodzących wizyt</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
            @elseif($role=="Doctor")
                <section style="background-color: #03acfa !important;">
                    <div class="container py-5">
                        <div class="row d-flex justify-content-center text-center">
                            <div class="col-lg-2 col-12 text-light align-items-center">
                                <i class='display-1 bi bi-droplet-fill'></i>
                            </div>
                            <div class="col-lg-7 col-12 text-light pt-2">
                                <h3 class="h4 light-300">Konto lekarza</h3>
                                <p class="light-300">Quis ipsum suspendisse ultrices gravida.</p>
                            </div>
                            <div class="col-lg-2 col-12 text-light align-items-center">
                                <i class='display-1 bi bi-droplet-fill'></i>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Start Recent Work -->
                <section class="container overflow-hidden py-5">
                    <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
                        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                            <a href="/visits/menu"
                                class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                                <img class="card-img" src="./assets/img/md.jpg" alt="Card image">
                                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                    <div class="service-work-content text-left text-light">
                                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Recepty i
                                            zwolnienia</span>
                                        <p class="card-text">Wystawianie recept oraz zwolnień dla odbytych wizyt</p>
                                    </div>
                                </div>
                            </a>
                        </div><!-- End Recent Work -->

                        <!-- Start Recent Work -->
                        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                            <a href="/treatment"
                                class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                                <img class="card-img" src="./assets/img/md.jpg" alt="Card image">
                                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                    <div class="service-work-content text-left text-light">
                                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Zarządzanie wizytami</span>
                                        <p class="card-text">Obsługa przeprowadzonych wizyt</p>
                                    </div>
                                </div>
                            </a>
                        </div><!-- End Recent Work -->

                        <!-- Start Recent Work -->
                        <div class="col-xl-3 col-md-4 col-sm-6 project branding">
                            <a href="doctors/history"
                                class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                                <img class="card-img" src="./assets/img/md.jpg" alt="Card image">
                                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                    <div class="service-work-content text-left text-light">
                                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Historia
                                            użytkowania</span>
                                        <p class="card-text">Historia wizyt oraz wystawionych recept i zwolnień</p>
                                    </div>
                                </div>
                            </a>
                        </div><!-- End Recent Work -->

                        <!-- Start Recent Work -->
                        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                            <a href="visits/{{ Cookie::get('docid') }}/show?operator=>="
                                class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                                <img class="card-img" src="./assets/img/md.jpg" alt="Card image">
                                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                    <div class="service-work-content text-left text-light">
                                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Planowane
                                            wizyty</span>
                                        <p class="card-text">Kalendarz umożliwiający sprawdzenie nadchodzących wizyt</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                            <a href="/schedule/create"
                                class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                                <img class="card-img" src="./assets/img/md.jpg" alt="Card image">
                                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                                    <div class="service-work-content text-left text-light">
                                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Ustal
                                            grafik</span>
                                        <p class="card-text">Ustal i modyfikuj swój grafik</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>

            @else
                <section style="background-color: #03acfa !important;">
                    <div class="container py-5">
                        <div class="row d-flex justify-content-center text-center">
                            <div class="col-lg-2 col-12 text-light align-items-center">
                                <i class='display-1 bx bxs-box bx-lg'></i>
                            </div>
                            <div class="col-lg-7 col-12 text-light pt-2">
                                <h3 class="h4 light-300">Great transformations successful</h3>
                                <p class="light-300">Quis ipsum suspendisse ultrices gravida.</p>
                            </div>
                            <div class="col-lg-3 col-12 pt-4">
                                <a href="#" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">View Our Work</a>
                            </div>
                        </div>
                    </div>
                </section>
            @endif

        @endauth
    @endsection
