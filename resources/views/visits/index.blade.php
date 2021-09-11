@extends('layout');
@section('content')
    <!-- Start View Work -->
    <section style="background-color: #03acfa !important;">
        <div class="container py-5">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-2 col-12 text-light align-items-center">
                    <i class="display-1 bi bi-calendar-date"></i>
                </div>
                <div class="col-lg-7 col-12 text-light pt-2">
                    <h3 class="h4 light-300">Wybierz interesującą Cię opcję dotyczącą wizyt</h3>
                </div>
                <div class="col-lg-2 col-12 text-light align-items-center">
                    <i class="display-1 bi bi-calendar-date"></i>
                </div>
            </div>
        </div>
    </section>
<!-- End View Work -->


<section class="py-5 mb-5">
    <div class="container">

        <div class="row gy-5 g-lg-5 mb-4">

            
            <div class="col-md-4 mb-3">
                <a href="/disease" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="./assets/img/visit.jpg" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            <h3 class="card-title light-300">Wybierz lekarza dla danej choroby</h3>
                            <p class="card-text">Psum officia anim id est laborum.</p>
                        </div>
                    </div>
                </a>
            </div>


            
            <div class="col-md-4 mb-3">
                <a href="visits/show?operator=>=" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="./assets/img/visit.jpg" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            <h3 class="card-title light-300">Sprawdż kalendarz nadchodzących wizyt</h3>
                            <p class="card-text">Sum dolor sit consencutur</p>
                        </div>
                    </div>
                </a>
            </div>

            
            <div class="col-md-4 mb-3">
                <a href="visits/show?operator=<" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="./assets/img/visit.jpg" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            <h3 class="card-title light-300">Sprawdź swoją historię wizyt</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </a>
            </div>

            
            <div class="col-md-4 mb-3">
                <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="./assets/img/visit.jpg" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            <h3 class="card-title light-300">Status aktualnych terapii</h3>
                            <p class="card-text">Sprawdź status aktualnych terapii</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>



<!-- Bootstrap -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Load jQuery require for isotope -->
<script src="assets/js/jquery.min.js"></script>
<!-- Isotope -->
<script src="assets/js/isotope.pkgd.js"></script>
<!-- Page Script -->
<script>
    $(window).load(function() {
        // init Isotope
        var $projects = $('.projects').isotope({
            itemSelector: '.project',
            layoutMode: 'fitRows'
        });
        $(".filter-btn").click(function() {
            var data_filter = $(this).attr("data-filter");
            $projects.isotope({
                filter: data_filter
            });
            $(".filter-btn").removeClass("active");
            $(".filter-btn").removeClass("shadow");
            $(this).addClass("active");
            $(this).addClass("shadow");
            return false;
        });
    });
</script>
@endsection