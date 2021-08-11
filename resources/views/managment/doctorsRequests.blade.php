@extends('layout')
@section('content')
@foreach ($requests as $case)
    <column><h1>Imie: {{$case->name}}</h1></column>
    <column><h1>Nazwisko: {{$case->surname}}</h1></column>
    <column><h1>PWZ: {{$case->pwz_number}}</h1></column>
@endforeach
@endsection