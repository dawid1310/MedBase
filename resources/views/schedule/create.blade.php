@extends('layout')
@section('content')
    <!-- Start Service -->
<section class="service-wrapper py-3">
    <div class="container-fluid pb-3">
        <div class="row">
            <h2 class="h2 text-center col-12 py-5 semi-bold-600">Services</h2>
            <div class="service-header col-2 col-lg-3 text-end light-300">
                <i class='bx bx-gift h3 mt-1'></i>
            </div>
            <div class="service-heading col-10 col-lg-9 text-start float-end light-300">
                <h2 class="h3 pb-4 typo-space-line">Make Success for future</h2>
            </div>
        </div>
        <p class="service-footer col-10 offset-2 col-lg-9 offset-lg-3 text-start pb-3 text-muted px-2">
            You are free to use this template for your commercial or business websites. You are not allowed to re-distribute this template ZIP file on any template collection websites. It is too easy to illegally copy and repost this template.
        </p>
    </div>

    <div class="service-tag py-5 bg-secondary">
        <div class="col-md-12">
            <ul class="nav d-flex justify-content-center">
                <li class="nav-item mx-lg-4">
                    <a class="filter-btn nav-link btn-outline-primary active shadow rounded-pill text-light px-4 light-300" href="#" data-filter=".project">All</a>
                </li>
                <li class="nav-item mx-lg-4">
                    <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".graphic">Graphics</a>
                </li>
                <li class="filter-btn nav-item mx-lg-4">
                    <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".ui">UI/UX</a>
                </li>
                <li class="nav-item mx-lg-4">
                    <a class="filter-btn nav-link btn-outline-primary rounded-pill text-light px-4 light-300" href="#" data-filter=".branding">Branding</a>
                </li>
            </ul>
        </div>
    </div>

</section>



        <form action="storeSchedule" method="post">
            @csrf
            <div>
                <label for="startMon" class="form-label">Początek przyjęć w poniedziałek</label>
                <input type="time" name="startMon" id="startMon"/>
                <label for="endMon" class="form-label">Koniec przyjęć w poniedziałek</label>
                <input type="time" name="endMon" id="endMon"/>
            </div>
            <div>
                <label for="startTue" class="form-label">Początek przyjęć we wtorek</label>
                <input type="time" name="startTue" id="startTue"/>
                <label for="endTue" class="form-label">Koniec przyjęć we wtorek</label>
                <input type="time" name="endTue" id="endTue"/>
            </div>
            <div>
                <label for="startWed" class="form-label">Początek przyjęć w śreodę</label>
                <input type="time" name="startWed" id="startWed"/>
                <label for="endMWed" class="form-label">Koniec przyjęć w śreodę</label>
                <input type="time" name="endWed" id="endMWed"/>
            </div>
            <div>
                <label for="startThu" class="form-label">Początek przyjęć w czwartek</label>
                <input type="time" name="startThu" id="startThu"/>
                <label for="endThu" class="form-label">Koniec przyjęć w czwartek</label>
                <input type="time" name="endThu" id="endThu"/>
            </div>
            <div>
                <label for="startFri" class="form-label">Początek przyjęć w piątek</label>
                <input type="time" name="startFri" id="startFri"/>
                <label for="endFri" class="form-label">Koniec przyjęć w piątek</label>
                <input type="time" name="endFri" id="endFri"/>
            </div>
            <button type="submit" class="btn_login">ZATWIERDŹ</button>
        </form>




@endsection