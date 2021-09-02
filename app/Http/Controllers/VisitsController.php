<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VisitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('visits.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (!Auth::user()) {
            return redirect('/login');
        }
        $visit = [
            'doctor_id' => request('doctor'),
            'day' => request('day'),
            'time' => request('time'),
        ];
        $doctor = DB::table('users')
            ->join('doctors', 'doctors.user_id', 'users.id')
            ->join('specializations', 'doctors.specialization_id', 'specializations.id')
            ->where('doctors.id', '=', $visit['doctor_id'])
            ->select('users.name', 'users.surname', 'specializations.specialization')
            ->first();
        return view('visits.create', ['visit' => $visit, 'doctor' => $doctor]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $visit = new Visit();
        if (!Auth::user()) {
            return redirect('/login');
        }

        $visit->user_id = Auth::user()->id;
        $visit->doctor_id = request('doctor_id');
        $visit->day = request('day');
        $visit->time = request('time');
        $visit->visit_type_id = request('visit_type_id');
        $visit->patient_desc = request('patient_desc');
        $visit->save();
        return redirect('visits/show?operator=>=');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function show($docid = 0)
    {

        if (!Auth::user()) {
            return redirect('/login');
        }
        if (Auth::user()->account_type == 'User') {
            $id = Auth::user()->id;

            $visits = DB::table('visits')
                ->join('doctors', 'doctors.id', 'visits.doctor_id')
                ->join('users', 'users.id', 'doctors.user_id')
                ->join('specializations', 'specializations.id', 'doctors.specialization_id')
                ->where('visits.user_id', $id)
                ->where('visits.day', $_GET['operator'], Carbon::now("Europe/Warsaw")->toDateString())
                ->select('visits.day', 'visits.time', 'users.name', 'users.surname', 'specializations.specialization')
                ->get();
            return view('visits.show', ['visits' => $visits]);
        }
        if (Auth::user()->account_type == 'Doctor') {
            $visits = DB::table('visits')
                ->join('doctors', 'doctors.id', 'visits.doctor_id')
                ->join('users', 'users.id', 'doctors.user_id')
                ->join('specializations', 'specializations.id', 'doctors.specialization_id')
                ->where('visits.doctor_id', $docid)
                ->where('visits.day', $_GET['operator'], Carbon::now("Europe/Warsaw")->toDateString())
                ->select('visits.day', 'visits.time', 'users.name', 'users.surname', 'specializations.specialization')
                ->get();
            return view('visits.show', ['visits' => $visits]);
        }

    }

    public function indexRz(Request $request)
    {

        $action = [
            "prescryptions"=>1,
            "sick_leaves"=>2
        ];
        $dicid = $request->cookie('docid');
        $url = last(request()->segments());
        if (Auth::user()->account_type == 'Doctor') {
            $visits = DB::table('visits')
            ->join('users', 'visits.user_id', 'users.id')
            ->where('visits.visit_type_id', '=', $action[$url])
            ->where('visits.doctor_id', '=' , $dicid)
            ->where('visits.day', '<', now())
            ->where('done', '=', NULL)
            ->select('visits.id', 'users.email', 'users.name', 'users.surname', 'visits.patient_desc', 'visits.day', 'visits.time')
            ->get();


            return view($url.'.create', ['visits' => $visits]);
        } else {
            return redirect('/login');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function edit(Visit $visit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visit $visit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visit $visit)
    {
        //
    }

    public function showMenu()
    {
        return view('visits.menu');
    }
}
