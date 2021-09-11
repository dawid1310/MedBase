@extends('./layout')

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
<br><br>
<div style="width: 50%; margin: 0 auto;">
    <div id="wraper">
    <form>


  <div class="form-group">
    <label for="exampleFormControlInput1">Podaj adres email</label><br>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="jankowalski@gmail.com">
    <br><label for="exampleFormControlInput1">Podaj telefon kontaktowy</label><br>
    <input type="tel">
</div><br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Cel wizyty</label><br>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Recepta</option>
      <option>Zwolnienie</option>
      <option>Konsultacja</option>
      <option>Wizyta złożona</option>
    </select>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Objawy</label><br>
    <input type="Checkbox" name="blue" value="yes" Checked>Gorączka<br>
    <input type="Checkbox" name="red" value="yes">Bóle mięśniowe<br>
    <input type="Checkbox" name="green" value="yes">Bóle stawowe<br>
    <input type="Checkbox" name="blue" value="yes" Checked>Ból gardła<br>
    <input type="Checkbox" name="blue" value="yes" Checked>Ból głowy<br>
    <input type="Checkbox" name="blue" value="yes" Checked>Dreszcze<br>
    <input type="Checkbox" name="blue" value="yes" Checked>Kaszel<br>
    <input type="Checkbox" name="blue" value="yes" Checked>Gorączka<br>

    </select>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Uwagi dotyczące wizyty</label><br>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div><br>
  <div>
  <label for="start">Data wizyty:</label><br>

    <input type="date" id="start" name="trip-start"
       value="2021-05-12"
       min="2021-05-12" max="2021-12-31"><br>
       <br><div class="form-group">
    </div><br>
    <div>
    <label for="exampleFormControlFile1">Dodaj pliki mogące pomóc w diagnozie</label><br>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div><br>
</form>
    </div>
</div>
</div>
@endsection