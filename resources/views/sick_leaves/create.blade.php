@extends('layout')

@section('content')
<section class=" mb-3" style="background-color: #03acfa !important;">
    <div class="container py-5">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bi bi-file-earmark'></i>
            </div>
            <div class="col-lg-7 col-12 text-light pt-2">
                <h3 class="h4 light-300">Zapoznaj się z podaniami o zwolnień lekarskich</h3>
                <p class="light-300">Poniżej wyświetlono dostępne podania</p>
            </div>
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bi bi-file-earmark'></i>
            </div>
        </div>
    </div>
</section>
    <div class="w-75 mx-auto table-responsive">




    </div>





    @foreach ($visits as $visit)
    <div class="w-75 row mx-auto border border-primary mb-2 pb-2">

        <form action="/sickLeave/store/{{ $visit->id }}" method="POST">
            @csrf
            <input type="mail" value={{ $visit->email }} name="email" hidden>
            <div class="col">
                <h4>Pacjent: {{ $visit->name }} {{ $visit->surname }}</h4>
            </div>
            <div class="col">
                <h5>Data wizyty: {{ $visit->day }} Godzina wizyty: {{ $visit->time }}</h5>
            </div>

            <div class="col">
                <h5>Opis pacjenta: {{ $visit->patient_desc }}</h5>
            </div>
            
        
  

                <div class="col-xl-8 p-2">
                    <div class="form-group row">
                        <input type="number" class="form-control" name="days" max="30" minlength="1"
                        placeholder="Ilość dni">
                    </div>
                </div>
   
                <div class="col-xl-8 p-2">
                    <div class="form-group row">
                        <input type="text" class="form-control" name="code" maxlength="6" minlength="6"
                        placeholder="Numer zwolnienia, np.: AB1234">
                    </div>
                </div>
          
        
                <div class="col-xl-8 p-2">
                    <div class="form-group row">
                        <textarea name="doctor_desc" id="" cols="60" rows="2"
                        placeholder="Powód wystawienia lub odrzucenia"></textarea>
                    </div>
                </div>

                <div class="col form-check">
                    <h5><input type="checkbox" name="discarded" id="discarded">
                        <label for="discarded" class="form-check-label">Odrzucenie podania o zwolnienie lekarskie</label>
                    </h5>
                </div>



            <div class="col">
                <div>
                    <button type="submit" class="btn btn-success text-light" title="Wyślij receptę">
                        <i class="bi bi-briefcase"></i> Wyślij zwolnienie</button>
                </div>
            </div>

        </form>

    </div>        
    @endforeach
@endsection
