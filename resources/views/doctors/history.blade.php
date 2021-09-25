@extends('layout')
@section('js')
    <script src='https://cdn.plot.ly/plotly-2.4.2.min.js'></script>
@endsection
@section('content')
    <section style="background-color: #03acfa !important;">
        <div class="container py-5">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-2 col-12 text-light align-items-center">
                    <i class='display-1 bi bi-file-bar-graph-fill'></i>
                </div>
                <div class="col-lg-7 col-12 text-light pt-2">
                    <h3 class="h4 light-300">Statystyki przeprowadzonych wizyt</h3>
                    <p class="light-300">Quis ipsum suspendisse ultrices gravida.</p>
                </div>
                <div class="col-lg-2 col-12 text-light align-items-center">
                    <i class='display-1 bi bi-file-bar-graph-fill'></i>
                </div>
            </div>
        </div>
    </section>
    <div class="w-100 mx-auto text-center mt-5 mb-5">
        <div class="w-75 mx-auto text-center" style="margin-left:25%;" id='pieChart'></div>
    </div>
    <script>
        var data = [{
            type: "pie",
            values: [<?= $stats['noPv']->noPv ?>,
                <?= $stats['noSlv']->noSlv ?>,
                <?= $stats['noCv']->noCv ?>,
                <?= $stats['noTv']->noTv ?>
            ],
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
