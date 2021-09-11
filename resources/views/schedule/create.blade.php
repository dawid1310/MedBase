@extends('layout')
@section('content')
    <!-- Start Service -->
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
    </section>
    <div class="w-50 mx-auto mt-5">
        <form action="/storeSchedule" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-label row pb-1">Początek przyjęć w poniedziałek</div>
                    <div  class="form-label row pb-1">Początek przyjęć we wtorek</div>
                    <div  class="form-label row pb-1">Początek przyjęć w środę</div>
                    <div  class="form-label row pb-1">Początek przyjęć w czwartek</div>
                    <div  class="form-label row pb-1">Początek przyjęć w piątek</div>
                </div>
                <div class="col">
                    <div class="form-label row "><input type="time" name="startMon" id="startMon" /></div>
                    <div class="form-label row "><input type="time" name="startTue" id="startTue" /></div>
                    <div class="form-label row "><input type="time" name="startWed" id="startWed" /></div>
                    <div class="form-label row "><input type="time" name="startThu" id="startThu" /></div>
                    <div class="form-label row "><input type="time" name="startFri" id="startFri" /></div>
                </div>
                <div class="col-xl-1"></div>
                <div class="col">
                    <div class="form-label row pb-1">Koniec przyjęć w poniedziałek</div>
                    <div class="form-label row pb-1">Koniec przyjęć we wtorek</div>
                    <div class="form-label row pb-1">Koniec przyjęć w środę</div>
                    <div class="form-label row pb-1">Koniec przyjęć w czwartek</div>
                    <div class="form-label row pb-1">Koniec przyjęć w piątek</div>
                </div>
                <div class="col">
                    <div class="form-label row"><input type="time" name="endMon" id="startMon" /></div>
                    <div class="form-label row"><input type="time" name="endTue" id="startTue" /></div>
                    <div class="form-label row"><input type="time" name="endWed" id="startWed" /></div>
                    <div class="form-label row"><input type="time" name="endThu" id="startThu" /></div>
                    <div class="form-label row"><input type="time" name="endFri" id="startFri" /></div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn_login mb-3">ZATWIERDŹ</button>


        </form>
    </div>




@endsection
