@extends('layout')
@section('content')
    <section class="py-5 mb-5">
        <div class="container">
            <section class="bg-secondary">
                <div class="container py-5">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-2 col-12 text-light align-items-center">
                            <i class='display-1 bi bi-plus-circle-fill'></i>
                        </div>
                        <div class="col-lg-7 col-12 text-light pt-2">
                            <h3 class="h4 light-300">Lekarz: {{ $doctor->name }} {{ $doctor->surname }} -
                                Specjalizacja:
                                {{ $doctor->specialization }}</h3>
                            <p class="light-300">Wizyta: {{ $visit['day'] }}, o godzinie: {{ $visit['time'] }}</p>
                        </div>
                        <div class="col-lg-3 col-12 pt-4">
                            <a href="/doctors/" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">Sprawdź
                                innych lekarzy</a>
                        </div>
                    </div>
                </div>
            </section>
<br>
            <form action="/visit/store" method="post">
                @csrf
                <input type="number" name="doctor_id" value={{ $visit['doctor_id'] }} hidden>
                <input type="date" name="day" value={{ $visit['day'] }} hidden>
                <input type="time" name="time" value={{ $visit['time'] }} hidden>
                <div class="col-xl-7 col-md-10 col-sm-12 mx-auto">
                    <div class="row">

                        <label for="visit_type_id" class="form-label">Typ wizyty:</label>
                        <select name="visit_type_id" id="visit_type_id" class="form-control">
                            <option value=''>Pozostaw wybór lekarzowi</option>
                            <option value="1">Recepta</option>
                            <option value="2">Zwolnienie</option>
                            <option value="3">Konsultacja</option>
                        </select><br>
                    </div><br>
                    <div class="row">
                        <label for="patient_desc" class="form-label">Opis problemu:</label><br>
                        <textarea name="patient_desc" id="patient_desc"  rows="5"
                            placeholder="Opis mający pomóc podczas wizyty" class="form-control"></textarea><br>
                    </div><br>
                    <div class="row">
                        <button type="submit" class=" btn btn-primary">Zatwierdź wizytę</button>
                    </div>
                </div>
        </div>
        </form>

        </div>
    </section>
@endsection
