@extends('layout')
@section('content')

    @foreach ($visits as $visit)
        <form action="/treatment/store" method="post">
            @csrf
            Imie i nazwisko pacjęta: {{ $visit->name }}
            {{ $visit->surname }}<br>
            Opis przypadłości: {{ $visit->patient_desc }}<br>
            Data wizyty: {{ $visit->day }}<br>
            Godzina wizyty: {{ $visit->time }}<br>
            <input type="number" name="id" hidden value={{ $visit->id }}>
            Typ wizyty: <select name="visit_type" id="visit_type{{ $loop->iteration }}"
                onchange="treatment({{ $loop->iteration }})">
                <option></option>
                <option value="r">Recepta</option>
                <option value="z">Zwolnienie</option>
                <option value="k">Konsultacja</option>
                <option value="t">Terapia</option>
            </select><br>
            <div style="display: none" id={{ $loop->iteration }}>
                Utwórz nową terapię <input type="checkbox" name="isNew" id="isNew"><br>
                @if ($treatments->contains('user_id', $visit->user_id))
                    Choroba: <select name="treatment_id" )">
                        <option></option>
                        @foreach ($treatments as $treatment)
                            @if ($treatment->user_id == $visit->user_id)
                                <option value={{$treatment->id}}>{{ $treatment->name }}</option>
                            @endif
                        @endforeach
                    </select><br>
                @endif
            </div>

            Komentarz lekarza: <input type="text" name="doctor_desc">
            <button type="submit">Zatwierdź</button>
        </form>
    @endforeach
    <script>
        function treatment(iter) {

            if (document.getElementById("visit_type" + iter).value == "t") {
                document.getElementById(iter).style.display = 'block';
                console.log(document.getElementById("visit_type" + iter).id);
            }
            if (document.getElementById("visit_type" + iter).value != "t") {
                document.getElementById(iter).style.display = 'none';
            }
        }
    </script>
@endsection
