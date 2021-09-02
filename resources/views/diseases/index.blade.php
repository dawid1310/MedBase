@extends('layout')
@section('content')
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
