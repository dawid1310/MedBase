@extends('layout')
@section('content')
<div class="mx-auto col-xl-6">
    <form action="/updateUser" method="POST">

        @csrf

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
