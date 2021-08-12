@extends('layout')
@section('content')
    @foreach ($requests as $case)
    <form action="/request-email" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$case->id}}"/>
        <column><h1>Imie: {{$case->name}}</h1></column>
        <column><h1>Nazwisko: {{$case->surname}}</h1></column>
        <column><h1>PWZ: {{$case->pwz_number}}</h1></column>
        <column><h1>PESEL: {{$case->pesel}}</h1></column>
        <button type="submit" class="btn btn-primary" name="submit" value="accept">Akceptuj</button>
        <button type="submit" class="btn btn-primary" name="submit" value="denial">Odrzuć</button>
    </form>
    @endforeach
@endsection