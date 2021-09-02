@extends('layout')
@section('content')
<section class="py-5 mb-5">
    <div class="container">
        <div class="recent-work-header row text-center pb-5">
            <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">Recent Works</h2>
        </div>
        <div class="row gy-5 g-lg-5 mb-4">

            <!-- Start Recent Work -->
            <div class="col-md-6 mb-3">
                <a href="/visits/prescryptions" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="{{ asset('assets/img/recent-work-01.jpg') }}"alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            <h3 class="card-title light-300">Wystaw Receptę</h3>
                            <p class="card-text">Wystaw receptę dla odbytej wizyty lub odrzuć prośbę o receptę.</p>
                        </div>
                    </div>
                </a>
            </div><!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-md-6 col-12 mb-3">
                <a href="/visits/sick_leaves" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="{{ asset('assets/img/recent-work-01.jpg') }}" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            <h3 class="card-title light-300">Wystaw zwolnienie</h3>
                            <p class="card-text">Wystaw zwolnienie dla odbytej wizyty lub odrzuć prośbę o zwolnienie.</p>
                        </div>
                    </div>
                </a>
            </div><!-- End Recent Work -->   
        </div>
    </div>
</section>
@endsection