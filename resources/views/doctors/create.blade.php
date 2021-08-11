@extends('./layout')

@section('content')
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