@extends('layout')
@section('content')
<section style="background-color: #03c9fa !important;">
  <div class="container py-5">
      <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-2 col-12 text-light align-items-center">
              <i class='display-1 bi bi-union'></i>
          </div>
          <div class="col-lg-7 col-12 text-light pt-2">
              <h3 class="h4 light-300">Formularz wstępnej rejestracji lekarza</h3>
              <p class="light-300">Podaj dane dzieki którym aministrator systemu będzi mógł potwierdzdić twoją tożsamość</p>
          </div>
          <div class="col-lg-2 col-12 text-light align-items-center">
            <i class='display-1 bi bi-union'></i>
        </div>
      </div>
  </div>
<div class="container">

</section>
      <div class="col-6 mx-auto">
        <div class="container-fluid pb-3">
            <form action="/add-registration-request" method="POST">
              @csrf  
              <h4 class="py-4">Zostań lekarzem naszego serwisu</h4>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Addres e-mail</label>
                  <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label">Imię</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Nazwisko</label>
                    <input type="text" class="form-control" name="surname">
                  </div>
                <div class="mb-3">
                    <label for="pwz_number" class="form-label">Numer PWZ</label>
                    <input type="number" class="form-control" name="pwz_number" max="9999999">
                </div>
                <div class="mb-3">
                    <label for="pesel" class="form-label">Numer PESEL</label>
                    <input type="number" class="form-control" name="pesel"  max="99999999999" >
                </div>
                <button type="submit" class="btn btn-primary">Potwierdź dane</button>
            </form>
        </div>
    </div>
  </div>


@endsection