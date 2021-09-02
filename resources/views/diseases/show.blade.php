@extends('layout')
@section('css')
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 50%;
            border-radius: 5px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        img {
            border-radius: 5px 5px 0 0;
        }

        .container {
            padding: 2px 16px;
        }

    </style>
@endsection
@section('content')
<div class="mx-auto w-75">
    <div >
        <div class="card w-100">
            <img src="{{ asset('/assets/img/stethoscope.jpg') }}" alt="Avatar" style="width:30%" class="mx-auto">
            <div class="container">
                <h3><b>{{ $disease->name }}</b></h3>
                <p>{{ $disease->description }}</p>
            </div>
        </div>
        
    </div>
<section class="container overflow-hidden py-5">

    <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">

            @foreach ($doctors as $doctor)
            <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic branding">
                <div>
                    <a href="/doctors/{{ $doctor->id }}">
                        <div class="card w-100">
                            <img src="{{ asset('/assets/img/doctor.jpg') }}" alt="Avatar" style="width:100%">
                            <div class="container">
                                <h3><b>{{ $doctor->name }} {{ $doctor->surname }}</b>
                                </h3>
                                <p>{{ $doctor->informations }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
