@extends('layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('./assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('./assets/css/theme2.css') }}" />

@endsection
@section('content')
    <section style="background-color: #03c0fa !important;">
        <div class="container py-5">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-2 col-12 text-light align-items-center">
                    <i class='display-1 bi bi-calendar-date'></i>
                </div>
                <div class="col-lg-7 col-12 text-light pt-2">
                    <h3 class="h4 light-300">Kalendarz nadchodzących wizyt</h3>
                    <p class="light-300">Sprawdź szczegóły ndchodzących wizyt</p>
                </div>
                <div class="col-lg-2 col-12 text-light align-items-center">
                    <i class='display-1 bi bi-calendar-date'></i>
                </div>
            </div>
        </div>
    </section>
    <div class="col-xl-10 mx-auto py-3">
        <div id="caleandar" class="w-100 mx-auto">
        </div>
    </div>


    <script src="{{ asset('./assets/js/caleandar.js') }}"></script>

    <script>
        var date = {!! json_encode($visits, JSON_HEX_TAG) !!};
        console.log(date);

        var events = [{
                'Date': new Date(2021, 8, 3),
                'Title': 'Konsultacja - Pediatra, Jan Kowalski: 16:15'
            },
            {
                'Date': new Date(2021, 8, 9),
                'Title': 'Jan Kowalski - Kardiologia: 08:00 '
            },
            {
                'Date': new Date(2016, 6, 27),
                'Title': '25 year anniversary',
                'Link': 'https://www.google.com.au/#q=anniversary+gifts'
            },
        ];
        var settings = {};
        var element = document.getElementById('caleandar');
        caleandar(element, events, settings);
    </script>
@endsection
