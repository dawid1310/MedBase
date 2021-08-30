@extends('layout')
@section('content')
    <section class="container  py-5">
        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
            @if (Auth::user()->account_type == 'User')

                @foreach ($treatments as $treatment)
                    Imie i nazwisko lekarza: {{ $treatment->name }} {{ $treatment->surname }}<br>
                    Choroba: {{ $treatment->disease }}<br>
                    Status: {{ $treatment->status }}<br>

                    @foreach ($files as $file)
                        @if ($file->id == $treatment->id)
                            Plik: <a download href="{{asset($file->file_path)}}">{{ $file->name }}</a><br>
                            Opis: {{ $file->description }} <br>
                            
                        @endif
                    @endforeach


                    <form action="/file/store" method="post" enctype="multipart/form-data">
                        <h5 class="text-center mb-5">Dodaj plik</h5>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf

                        <input type="number" name="treatment_id" value={{ $treatment->id }} hidden>
                        <input type="file" name="file" class="custom-file-input" id="chooseFile"><br><br>
                        <textarea name="description" cols="100" rows="3" placeholder="Opis pliku"></textarea>
        </div>

        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Prześlij plik
        </button>
        </form>

        <br><br>
        @endforeach


    @elseif(Auth::user()->account_type == "Doctor")
        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
            <a href="treatment/create" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="card-img" src="./assets/img/services-02.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Rozpocznij nowy
                            przypadek</span>
                        <p class="card-text">Dodaj nowy przypadek, jeśli przeprowadzona wizyta dała powody do dłuższego
                            leczenia</p>
                    </div>
                </div>
            </a>
        </div><!-- End Recent Work -->

        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project branding">
            <a href="treatment/current" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="card-img" src="./assets/img/services-03.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Aktualne przypadki</span>
                        <p class="card-text">Możliwość podglądu i zarządzania aktualnie prowadzonymi przypadkami</p>
                    </div>
                </div>
            </a>
        </div><!-- End Recent Work -->

        <!-- Start Recent Work -->
        <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
            <a href="treatment/history" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="card-img" src="./assets/img/services-04.jpg" alt="Card image">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Historia
                            przypadków</span>
                        <p class="card-text">Przeglądaj wszystkie zakończone przypadki</p>
                    </div>
                </div>
            </a>
        </div>
        @endif
        </div>
    </section>
@endsection
