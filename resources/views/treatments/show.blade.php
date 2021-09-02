@extends('layout')
@section('content')
    <section class="bg-secondary">
        <div class="container py-5">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-2 col-12 text-light align-items-center">
                    <i class='display-1 bx bxs-box bx-lg'></i>
                </div>
                <div class="col-lg-7 col-12 text-light pt-2">
                    <h3 class="h4 light-300">Przypadek pacjenta: {{ $user->name }} {{ $user->surname }}</h3>
                    <p class="light-300">Quis ipsum suspendisse ultrices gravida.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-5">
        <div class="container">
            <div class="row">
                @foreach ($treatment as $visit)
                    <div class="col-xl-4 col-md-6 mb-3 " style="background-image: url({{ asset('./assets/img/sky_bg.jpg') }}); border: solid white 5px;">
                    
                        <div class="recent-work-vertical  d-flex ">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300"><h3>Dane wizyty</h3>
                                <p class="card-text">Data: {{ $visit->day }}</p>
                                <p class="card-text">Godzina: {{ $visit->time }} </p>
                                <p class="card-text">{{ $visit->patient_desc }}</p>
                                <p class="card-text">{{ $visit->doctor_desc }}</p>
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
    </section>
@endsection
