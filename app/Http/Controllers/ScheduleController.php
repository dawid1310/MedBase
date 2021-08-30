<?php

namespace App\Http\Controllers;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schedule = DB::table('schedules')
        ->join('doctors', 'schedules.doctor_id', '=', 'doctors.id')
        ->select('schedules.day', 'schedules.start', 'schedules.end')
        ->get();
        if(!$schedule->isEmpty())
            return view('schedule.create');
        else
            return view('schedule.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $id = DB::table('doctors')
        ->where('doctors.user_id', '=', Auth::user()->id)
        ->select('doctors.id')
        ->first();
        $this->createSchedule('Mon', $id->id, request('startMon'), request('endMon'));
        $this->createSchedule('Tue', $id->id, request('startTue'), request('endTue'));
        $this->createSchedule('Wed', $id->id, request('startWed'), request('endWed'));
        $this->createSchedule('Thu', $id->id, request('startThu'), request('endThu'));
        $this->createSchedule('Fri', $id->id, request('startFri'), request('endFri'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $schedule = DB::table('schedules')
        ->select('start', 'end', 'day')
        ->where('doctor_id', $id)
        ->get();
        dd('szlachetny korzeń');
        return $schedule;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function createSchedule($day, $docId, $start, $end){
        $schedule = new Schedule();
        $schedule->doctor_id = $docId;
        $schedule->day = $day;
        $schedule->start = $start;
        $schedule->end = $end;
        $schedule->save();
    }
}
