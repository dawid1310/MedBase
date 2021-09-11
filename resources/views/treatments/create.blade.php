@extends('layout')
@section('content')
<section style="background-color: #03acfa !important;">
    <div class="container py-5 mb-5">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bx bxs-box bx-lg'></i>
            </div>
            <div class="col-lg-7 col-12 text-light pt-2">
                <h3 class="h4 light-300">W tym miejscu możesz zarządzać przeprowadzonymi wizytami</h3>
                <p class="light-300">Nadaj wizycie odpowiedni status lub dodaj ją do terapii</p>
            </div>
            <div class="col-lg-3 col-12 pt-4">
            </div>
        </div>
    </div>
</section>
    @foreach ($visits as $visit)
    <div class="w-75 row mx-auto border border-primary mb-3 pb-2">

        <form action="/treatment/store" method="POST">
            @csrf
           
            <div class="col">
                <h4>Pacjent: {{ $visit->name }} {{ $visit->surname }}</h4>
            </div>
            <div class="col">
                <h5>Data wizyty: {{ $visit->day }} Godzina wizyty: {{ $visit->time }}</h5>
            </div>

            <div class="col">
                <h5>Opis przypadłości: {{ $visit->patient_desc }}</h5>
            </div>
            <input type="number" name="id" hidden value={{ $visit->id }}>
            <div class="col-xl-6">
                Typ wizyty: <select name="visit_type" class="form-control" id="visit_type{{ $loop->iteration }}"
                onchange="treatment({{ $loop->iteration }})">
                <option></option>
                <option value="r">Recepta</option>
                <option value="z">Zwolnienie</option>
                <option value="k">Konsultacja</option>
                <option value="t">Terapia</option>
            </select>
        </div>
            <div style="display: none" id={{ $loop->iteration }}>
                Utwórz nową terapię <input type="checkbox" name="isNew" id="isNew"><br>
                @if ($treatments->contains('user_id', $visit->user_id))
                    Choroba: <select name="treatment_id" )">
                        <option></option>
                        @foreach ($treatments as $treatment)
                            @if ($treatment->user_id == $visit->user_id)
                                <option value={{$treatment->id}}>{{ $treatment->name }}</option>
                            @endif
                        @endforeach
                    </select><br>
                @endif
            </div>
            <div class="col-xl-6">
                Komentarz lekarza:
            <textarea  name="doctor_desc" class="form-control mb-1" rows="4" cols="50"></textarea>
           
            </div>
  


            <div class="col">
                <div>
                    <button type="submit" class="btn btn-success text-light" title="Zatwierdź">
                        <i class="bi bi-briefcase"></i> Zatwierdź</button>
                </div>
            </div>

        </form>

    </div>
@endforeach




    <script>
        function treatment(iter) {

            if (document.getElementById("visit_type" + iter).value == "t") {
                document.getElementById(iter).style.display = 'block';
                console.log(document.getElementById("visit_type" + iter).id);
            }
            if (document.getElementById("visit_type" + iter).value != "t") {
                document.getElementById(iter).style.display = 'none';
            }
        }
    </script>
@endsection
