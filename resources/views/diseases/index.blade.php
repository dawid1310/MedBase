@extends('layout')
@section('content')
<section style="background-color: #03acfa !important;">
    <div class="container py-5">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bx bxs-box bx-lg'></i>
            </div>
            <div class="col-lg-7 col-12 text-light pt-2">
                <h3 class="h4 light-300">Great transformations successful </h3>
                <p class="light-300">Quis ipsum suspendisse ultrices gravida.</p>
            </div>
            <div class="col-lg-3 col-12 pt-4">
                <a href="#" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">View Our Work</a>
            </div>
        </div>
    </div>
</section>
    <section class="container overflow-hidden py-5">
        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
            @foreach ($diseases as $disease)
                <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic branding">
                    <a href="/disease/{{$disease->id}}" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                        <img class="service card-img" src="./assets/img/blue_bg.jpg" alt="Card image" style="height: 100px">
                        <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="service-work-content text-light my-auto mx-auto">
                                <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300" >{{$disease->name}}</span>
                            </div>
                        </div>
                    </a>
                </div>

            @endforeach
        </div>
    </section>
@endsection
