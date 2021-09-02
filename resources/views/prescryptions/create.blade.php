@extends('layout')

@section('content')
    <div class="w-75 mx-auto">
        <h5>jakis tytuł</h5>

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
                            <h5>Komenta lekarza: <textarea name="doctor_desc" class="form-control mx-auto text-center"
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
