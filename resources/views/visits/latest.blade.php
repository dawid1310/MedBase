@extends('layout')
@section('content')
<section class=" mb-3" style="background-color: #03acfa !important;">
    <div class="container py-4">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bi bi-file-earmark'></i>
            </div>
            <div class="col-lg-7 col-12 text-light pt-2">
                <h3 class="h4 light-300">Najbliższa wizyta</h3>
                <p class="light-300">Poniżej dane dotyczące najbliższej wizyty</p>
            </div>
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bi bi-file-earmark'></i>
            </div>
        </div>
    </div>
</section>

<div class="w-75 mx-auto ">
    <div class="row border border-primary mb-2 pb-2">
            <div class="row mt-4 mb-4">
                <h2>Pacjent: {{ $visit->name }} {{ $visit->surname }}</h4>
            </div>
            <div class="row mt-4 mb-4">
                <h2>Data wizyty: {{ $visit->day }} Godzina wizyty: {{ $visit->time }}</h5>
            </div>
            <div class="row mt-4 mb-4">
                <h3>Numer telefonu pacjenta: {{ $visit->phone }}</h5>
            </div>
            <div class="row mt-4 mb-4">
                <h3>Komentarz pacjenta: {{ $visit->patient_desc }}</h5>
            </div>

        </form>

    </div>
</div>
@endsection