@extends('layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('./assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('./assets/css/theme2.css') }}" />

@endsection
@section('content')
    @foreach ($visits as $visit)
        <p>{{ $visit->day }} - {{ $visit->time }}</p>
    @endforeach
    <div  class="col-xl-10 mx-auto">
    <div id="caleandar" class="w-100 mx-auto">

    </div>
</div>


    <script src="{{ asset('./assets/js/caleandar.js') }}"></script>

    <script>
        var date = {!! json_encode($visits, JSON_HEX_TAG) !!};
        console.log(date);

        var events = [
        {'Date': new Date(2021, 8, 3), 'Title': 'Konsultacja - Pediatra, Jan Kowalski: 16:15'},
        {'Date': new Date(2016, 6, 18), 'Title': 'New Garfield movie comes out!', 'Link': 'https://garfield.com'},
        {'Date': new Date(2016, 6, 27), 'Title': '25 year anniversary', 'Link': 'https://www.google.com.au/#q=anniversary+gifts'},
        ];
        var settings = {};
        var element = document.getElementById('caleandar');
        caleandar(element, events, settings);
    </script>
@endsection
