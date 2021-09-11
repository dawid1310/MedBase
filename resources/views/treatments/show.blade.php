@extends('layout')
@section('content')
<section style="background-color: #03acfa !important;">
    <div class="container py-5 mb-5">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bi bi-info-circle'></i>
            </div>
            <div class="col-lg-7 col-12 text-light pt-2">
                <h3 class="h4 light-300">Informacje dotyczące terapii</h3>
                <p class="light-300">Pacjent {{$user->name}} {{$user->surname}}</p>
            </div>
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bi bi-info-circle'></i>
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
    @if (!$files->isEmpty())
    <section style="background-color: #03acfa !important;">
        <div class="container py-2 mb-5">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-2 col-12 text-light align-items-center">
                    <i class='display-1 bi bi-file-earmark-font'></i>
                </div>
                <div class="col-lg-7 col-12 text-light pt-2 my-auto">
                    <h3 class="h4 light-300">Dostępne pliki</h3>
                </div>
                <div class="col-lg-2 col-12 text-light align-items-center">
                    <i class='display-1 bi bi-file-earmark-font'></i>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 mb-5">
        <div class="container">
            <div class="row">
                @foreach ($files as $file)
                <div class="col-xl-4 col-lg-6 col-sm-10 col-12 mb-3">
                    <a href="{{ $file->file_path }}"download
                        class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="{{ asset('./assets/img/file.jpg') }}"
                            alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">{{ $file->name }}</h3>
                                <p class="card-text">{{ $file->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
    </section>
    @endif
@endsection
