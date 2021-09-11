@extends('layout')
@section('content')
<section style="background-color: #03acfa !important;">
    <div class="container py-5">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bx bxs-box bx-lg'></i>
            </div>
            <div class="col-lg-7 col-12 text-light pt-2">
                <h3 class="h4 light-300">Great transformations successful</h3>
                <p class="light-300">Quis ipsum suspendisse ultrices gravida.</p>
            </div>
            <div class="col-lg-3 col-12 pt-4">
                <a href="#" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">View Our Work</a>
            </div>
        </div>
    </div>
</section>
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