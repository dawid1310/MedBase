@extends('layout')
@section('content')
<div class="container">

      <div class="col-8 mx-auto">
        <div class="container-fluid pb-3">
            <form action="/add-registration-request" method="POST">
              @csrf  
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
  </div>


@endsection