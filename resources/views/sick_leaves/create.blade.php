@extends('layout')

@section('content')
    <div class="w-75 mx-auto table-responsive">
        <h5>Zwolnienia</h5>
    
        <table class="table table-hover ">
            <thead>

                <tr>
                    <th scope="col">#</th>
                    <th scope="col" class="col-sm-1">Imie</th>
                    <th scope="col" class="col-sm-1">Nazwisko</th>
                    <th scope="col" class="col-sm-1">Data</th>
                    <th scope="col" class="col-sm-1">Godzina</th>
                    <th scope="col" class="col-sm-3">Opis pacjenta</th>
                    <th scope="col">Ilość dni</th>
                    <th scope="col">Numer zwolnienia</th>
                    <th scope="col" class="col-sm-3">Uwagi lekarza</th>
                    <th scope="col" class="col-sm-1">Odrzucenie</th>
                    <th class="col-sm-1"></th>

                </tr>

            </thead>
            <tbody>
                @foreach ($visits as $visit)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>

                        <form action="/sickLeave/store/{{ $visit->id }}" method="POST">
                            @csrf
                            <input type="mail" value={{$visit->email}} name="email" hidden>
                            <td>
                                {{ $visit->name }}
                            </td>
                            <td>
                                {{ $visit->surname }}
                            </td>
                            <td>
                                {{ $visit->day }}
                            </td>
                            <td>
                                {{ $visit->time }}
                            </td>

                            <td>
                                {{ $visit->patient_desc }}
                            </td>
                            <td>
                                <div class="form-group row">
                                    <input type="number" class="form-control" name="days" max="30" minlength="1" placeholder="7">
                                </div>
                            </td>
                            <td>
                                <div class="form-group row">
                                    <input type="text" class="form-control" name="code" maxlength="6" minlength="6" placeholder="AB1234">
                                </div>
                            </td>
                            <td>
                                <div class="form-group row">
                                    <textarea name="doctor_desc" id="" cols="60" rows="2" placeholder="Powód wystawienia lub odrzucenia"></textarea>
                                </div>
                            </td>
                            <td>
                                <div class="form-group row">

                                    <input type="checkbox" name="discarded">
                                </div>
                            </td>



                            <td>
                                <div>
                                    <button type="submit" class="btn btn-success" title="Wyślij receptę">
                                        <i class="bi bi-briefcase"></i></button>

                        </form>
                        <!-- tu jest drugi forumlarz  jakbys chciał <form action="/deleteDish/{ { $visit->id }}" method="POST">
    @ csrf
    @ method('DELETE')
    <button type="submit" class="btn btn-danger" title="Usuń danie">
    <i class="bi bi-briefcase"></i></button>
    </form>-->
    </div>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
@endsection
