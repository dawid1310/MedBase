@extends('layout')
@section('js')
    <script src='https://cdn.plot.ly/plotly-2.4.2.min.js'></script>
@endsection
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
<div class="w-100 mx-auto text-center">
    <div class="w-75 btn btn-success active mx-auto m-3">
        Wykresy
    </div>
    <div class="w-25 mx-auto text-center" style="margin-left:25%;" id='pieChart'></div>
</div>
    <script>
        var data = [{
            type: "pie",
            values: [<?=$stats['noPv']->noPv?>,
            <?=$stats['noSlv']->noSlv?>, 
            <?=$stats['noCv']->noCv?>, 
            <?=$stats['noTv']->noTv?>],
            labels: ["Wizyty dotyczące Recept", "Wizyty dotyczące recept", "Konsultacje", "Wizyty w terapii"],
            textinfo: "label+percent",
            textposition: "outside",
            automargin: true
        }]

        var layout = {
   
            margin: {
                "t": 0,
                "b": 0,
                "l": 0,
                "r": 0
            },
            showlegend: false
        }

        Plotly.newPlot('pieChart', data, layout)
    </script>
@endsection
