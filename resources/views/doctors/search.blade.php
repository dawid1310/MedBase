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
<div class="col-xl-10 col-md-10 col-sm-12 mx-auto">
    <h1 class="text-center">dodaj jakis napis</h1>
<div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 pt-4 ">
    @foreach ($doctors as $doctor)
    <div class="col-xl-4 col-md-4 col-sm-6 project ui graphic branding">
        
            <a href="/doctors/{{ $doctor->id }}">
                <div class="card w-100">
                    <img src="./assets/img/doctor.jpg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h3><b>{{ $doctor->name }} {{ $doctor->surname }} - {{ $doctor->specialization }}</b></h3>
                        <p>{{ $doctor->informations }}</p>
                    </div>
                </div>
            </a>
       
    </div>
    @endforeach
    </div>
</div>
@endsection
