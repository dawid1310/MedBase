@extends('layout')
@section('content')
<section style="background-color: #03c0fa !important;">
    <div class="container py-5">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bx bxs-box bx-lg'></i>
            </div>
            <div class="col-lg-7 col-12 text-light pt-2">
                <h3 class="h4 light-300">Przypadek pacjenta: {{ $user->name }} {{ $user->surname }}</h3>
                <p class="light-300">Quis ipsum suspendisse ultrices gravida.</p>
            </div>
        </div>
    </div>
</section>
<div class="mx-auto col-xl-6 py-5">
    <form action="/updateUser" method="POST">

        @csrf
<h4> Aktualizuj swoje dane </h4>
        <input type="number" class="form-control" name="id" value="{{ $user->id }}" hidden>
        <div class="form-group row">
            <label for="name" class="col-md-3 col-form-label text-md-left">{{ __('Imię') }}</label>
            <div class="col-md-7">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="surname" class="col-md-3 col-form-label text-md-right">{{ __('Nazwisko') }}</label>
            <div class="col-md-7">
                <input id="surname" type="text" class="form-control" name="surname"
                    value="{{ old('surname', $user->surname) }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-mail') }}</label>
            <div class="col-md-7">
                <input id="email" type="text" class="form-control" name="email"
                    value="{{ old('email', $user->email) }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="pesel"
                class="col-md-3 col-form-label text-md-right">{{ __('Pesel') }}</label>
            <div class="col-md-7">
                <input id="pesel" type="text" class="form-control" name="pesel"
                    value="{{ old('pesel', $user->pesel) }}">
            </div>

        </div>

        <div class="form-group row">
            <label for="phone" class="col-md-3 col-form-label text-md-right">{{ __('Numer telefonu') }}</label>
            <div class="col-md-7">
                <input id="phone" type="text" class="form-control" name="phone"
                    value="{{ old('phone', $user->phone) }}">
            </div>
        </div>
<div class="text-center mt-2">
        <button type="submit" class="btn btn-primary">Zapisz zmiany</button><br>
        <a href="/changepassword">Zmień hasło</a>
</div>


    </form>

    
</div>
@endsection
