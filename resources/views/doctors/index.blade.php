@extends('layout')
@section('content')
<section style="background-color: #03acfa !important;">
    <div class="container py-5">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bi bi-bag-plus-fill'></i>
            </div>
            <div class="col-lg-7 col-12 text-light pt-2">
                <h3 class="h4 light-300">Polecani lekarze</h3>
                <p class="light-300">W tej sekcji serwisu możesz wybrać lekarza lub wyszukać lekarza po jego specjalizacji</p>
            </div>
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bi bi-bag-plus-fill'></i>
            </div>
        </div>
    </div>
</section>
    <section class="py-5 mb-5">
        <div class="container">
            <div class="recent-work-header row text-center pb-5">
            </div>
            <div class="row gy-5 g-lg-5 mb-4">
                @foreach ($doctors as $doctor)
                    <div class="col-xl-4 col-md-6 col-sm-10 col-12 mb-3">
                        <a href="/doctors/{{ $doctor->id }}" class="recent-work card border-0 shadow-lg overflow-hidden pt-5">
                            <img class="recent-work-img card-img" src="{{ asset('./assets/img/sky_bg.jpg') }}" alt="Card image">
                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="recent-work-content text-start mb-3 ml-3 text-dark my-auto">
                                    <h3 class="card-title light-300">{{ $doctor->name }} {{ $doctor->surname }}</h3>
                                    <p class="card-text">{{ $doctor->specialization }}:
                                        {{ $doctor->specification }}</p>
                                    <p class="card-text">O lekarzu: {{ $doctor->informations }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
    </section>
    <section class="container overflow-hidden py-5">
        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
            @foreach ($specializations as $specialization)
                <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic branding">
                    <a href="/specialization/{{ $specialization->id }}"
                        class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                        <img class="service card-img" src="./assets/img/blue_bg.jpg" alt="Card image" style="height: 100px">
                        <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="service-work-content text-light my-auto mx-auto">
                                <span
                                    class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">{{ $specialization->specialization }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </section>
@endsection
