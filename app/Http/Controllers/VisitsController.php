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
        return view('visits.create');

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
        $visit->doctor_id = request('doctor');
        $visit->day = request('day');
        $visit->time = request('time');
        $visit->save();
        return redirect('/doctors/' . $visit->doctor_id);

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
}
