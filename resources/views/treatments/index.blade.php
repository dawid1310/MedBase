@extends('layout')
@section('content')

    @if (Auth::user()->account_type == 'User')
        <section style="background-color: #03c0fa !important;">
            <div class="container py-5 mb-5">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-2 col-12 text-light align-items-center">
                        <i class='display-1 bi bi-view-list'></i>
                    </div>
                    <div class="col-lg-7 col-12 text-light pt-2">
                        <h3 class="h4 light-300">Twoje aktywne terapie</h3>
                    </div>
                    <div class="col-lg-2 col-12 text-light align-items-center">
                        <i class='display-1 bi bi-view-list'></i>
                    </div>
                </div>
            </div>
        </section>
        @foreach ($treatments as $treatment)

            <div class="w-75 row mx-auto border border-primary mb-2 pb-2">

                <div class="row">
                    <h4>Imie i nazwisko lekarza: {{ $treatment->name }} {{ $treatment->surname }}</h4>
                </div>
                <div class="row">
                    <h5>Choroba: {{ $treatment->disease }}</h5>
                </div>

                <div class="row">
                    <h5>Status: {{ $treatment->status }}</h5>
                </div>


                <form action="/file/store" method="post" enctype="multipart/form-data">
                    <h4 class="text-center mb-5">Dodaj plik</h4>
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
                    <div class="row">
                        <input type="file" name="file" class="custom-file-input" id="chooseFile"><br><br>
                    </div>
                    <div class="row w-75 m-1">
                        <textarea name="description" cols="100" rows="3" placeholder="Opis pliku"></textarea>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary btn-block mt-4 mx-right">
                        Prześlij plik
                    </button>
                </form>

            </div>

            <br>

            @foreach ($files as $file)
                @if ($file->id == $treatment->id)
                    Plik: <a download href="{{ asset($file->file_path) }}">{{ $file->name }}</a><br>
                    Opis: {{ $file->description }} <br>

                @endif
            @endforeach

        @endforeach


    @elseif(Auth::user()->account_type == "Doctor")
        <section style="background-color: #03acfa !important;">
            <div class="container py-5 mb-5">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-2 col-12 text-light align-items-center">
                        <i class='display-1 bi bi-info-circle'></i>
                    </div>
                    <div class="col-lg-7 col-12 text-light pt-2">
                        <h3 class="h4 light-300">Informacje dotyczące terpaii</h3>
                        <p class="light-300">Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                    <div class="col-lg-2 col-12 text-light align-items-center">
                        <i class='display-1 bi bi-info-circle'></i>
                    </div>
                </div>
            </div>
        </section>
        <div class="row gy-5 g-lg-5 mb-4 w-75 mx-auto">
            @foreach ($treatments as $treatment)
                <div class="col-xl-4 col-lg-6 col-sm-10 col-12 mb-3">
                    <a href="/treatment/{{ $treatment->id }}"
                        class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="{{ asset('./assets/img/visit.jpg') }}"
                            alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">{{ $treatment->name }}
                                    {{ $treatment->surname }}</h3>
                                <p class="card-text">{{ $treatment->disease }}: {{ $status }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        </section>
    @endif
@endsection
