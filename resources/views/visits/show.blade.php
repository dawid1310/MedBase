@extends('layout')
@section('content')
    @foreach ($visits as $visit)
        <p>{{$visit->day}} - {{$visit->time}}</p>
    @endforeach
@endsection