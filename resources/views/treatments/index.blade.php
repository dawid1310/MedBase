@extends('layout')
@section('content')

    @if (Auth::user()->account_type == 'User')

        @foreach ($treatments as $treatment)
            Imie i nazwisko lekarza: {{ $treatment->name }} {{ $treatment->surname }}<br>
            Choroba: {{ $treatment->disease }}<br>
            Status: {{ $treatment->status }}<br>

            @foreach ($files as $file)
                @if ($file->id == $treatment->id)
                    Plik: <a download href="{{ asset($file->file_path) }}">{{ $file->name }}</a><br>
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
        <section class="py-5 mb-5">
            <div class="container">
                <div class="recent-work-header row text-center pb-5">
                    <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">Recent Works</h2>
                </div>
                <div class="row gy-5 g-lg-5 mb-4">
                    @foreach ($treatments as $treatment)
                        <div class="col-md-4 mb-3">
                            <a href="/treatment/{{ $treatment->id }}"
                                class="recent-work card border-0 shadow-lg overflow-hidden">
                                <img class="recent-work-img card-img" src="{{ asset('./assets/img/sky_bg.jpg') }}"
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
