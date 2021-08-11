@extends('layout')

@section('content')
<div class='w-75 mx-auto'>
<table>
<row>

    <column><h1>Doktor: {{$doctor->name}}</h1></column>
    <column><h2>Specjalizacja: {{$doctor->specialization}}, {{$doctor->specification}}</h2></column>
    <column><h2>Informacje: {{$doctor->informations}}</h2></column>
    <column><h2>Ocena: {{$doctor->rating}}</h2></column>
    <form action="/doctors/{{$doctor->id}}/edit" method="get">
    <input type="submit" value="Modyfikuj">
    </form>

</row>
</table>
</div>
@endsection