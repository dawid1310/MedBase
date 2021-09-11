@extends('layout')

@section('content')
<section class=" mb-3" style="background-color: #03acfa !important;">
    <div class="container py-5">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bi bi-file-earmark'></i>
            </div>
            <div class="col-lg-7 col-12 text-light pt-2">
                <h3 class="h4 light-300">Zapoznaj się z podaniami o wystawienie recepty</h3>
                <p class="light-300">Poniżej wyświetlono dostępne podania</p>
            </div>
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bi bi-file-earmark'></i>
            </div>
        </div>
    </div>
</section>
    <div class="w-75 mx-auto ">
        @foreach ($visits as $visit)
            <div class="row border border-primary mb-2 pb-2">

                <form action="/prescription/store/{{ $visit->id }}" method="POST">
                    @csrf
                    <input type="mail" value={{ $visit->email }} name="email" hidden>
                    <div class="col">
                        <h4>Pacjent: {{ $visit->name }} {{ $visit->surname }}</h4>
                    </div>
                    <div class="col">
                        <h5>Data wizyty: {{ $visit->day }} Godzina wizyty: {{ $visit->time }}</h5>
                    </div>

                    <div class="col">
                        <h5>Komentarz pacjenta: {{ $visit->patient_desc }}</h5>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group row ">
                            <h5>Numer Recepty <input type="number" class="form-control mx-auto text-center" name="code"
                                    max="9999" min="1000" placeholder="AB1234"></h5>
                        </div>
                    </div>
                    <div class="col-xl-8 ">
                        <div class="form-group row">
                            <h5>Komentarz lekarza: <textarea name="doctor_desc" class="form-control mx-auto text-center"
                                    cols="60" rows="2" placeholder="Uwagi lekarza"></textarea></h5>
                        </div>
                    </div>
                    <div class="col form-check">
                        <h5><input type="checkbox" name="discarded" id="discarded">
                            <label for="discarded" class="form-check-label">Odrzucenie podania o receptę</label>
                        </h5>
                    </div>



                    <div class="col">
                        <div>
                            <button type="submit" class="btn btn-success text-light" title="Wyślij receptę">
                                <i class="bi bi-briefcase"></i> Zatwierdź decyzję</button>
                        </div>
                    </div>

                </form>

            </div>
        @endforeach
    </div>
@endsection
