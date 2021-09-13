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

    <script type = "text/javascript">
        var date = <?= $data?>;
        var events1=[];
        date.forEach(fun);
        var events = [{
                'Date': new Date(2021, 8, 3),
                'Title': 'Konsultacja - Pediatra, Jan Kowalski: 16:15'
            },
            {
                'Date': new Date(2021, 8, 22),
                'Title': 'Konsultacja - Pediatra, Jan Kowalski: 20:15'
            }
        ];
        console.log(events);
        console.log(events1);
        var settings = {};
        var element = document.getElementById('caleandar');
        caleandar(element, events1, settings);

        function fun(day){
            var val ={
                'Date': new Date(day["Date"][0], day["Date"][1], day["Date"][2]),
                'Title': day["Title"]
            };
            events1.push(val);
        }
    </script>
@endsection
