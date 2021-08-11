@extends('layout')
@section('content')
<div class='w-75 mx-auto'>
<table>
<row>
@foreach ($doctors as $doctor)
    <column><h1><a href="/doctors/{{$doctor->id}}">{{$doctor->name}} - {{$doctor->specialization}}</a></h1></column>
    <column><h2>Od czego? {{$doctor->specification}}</h2></column>
    <column><h2>{{$doctor->informations}}</h2></column>
    <column><h2>Ocena: {{$doctor->rating}}</h2></column>
@endforeach
</row>
</table>
</div>
@endsection