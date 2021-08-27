<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Specialization;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    protected $SheduleController;
    public function index()
    {
        $doctors = DB::table('doctors')
            ->join('users', 'doctors.user_id', '=', 'users.id')
            ->join('specializations', 'doctors.specialization_id', '=', 'specializations.id')
            ->select('doctors.*', 'specializations.specialization', 'specializations.specification', 'users.name')
            ->get();
        return view('doctors', ['doctors' => $doctors]);

    }
    public function show($id)
    {
        $add = 0;
        $day = 0;
        $curentDay = Carbon::now()->addDay($add)->dayOfWeek;
        $days = [];
        $visits = [];
        $weekDays = [
            0 => 'Sun',
            1 => 'Mon',
            2 => 'Tue',
            3 => 'Wed',
            4 => 'Thu',
            5 => 'Fri',
            6 => 'Sat',
        ];
        $doctor = DB::table('doctors')
            ->join('users', 'doctors.user_id', '=', 'users.id')
            ->join('specializations', 'doctors.specialization_id', '=', 'specializations.id')
            ->where('doctors.id', $id)
            ->select('doctors.*', 'specializations.specialization', 'specializations.specification', 'users.name')
            ->get();

        $tooday = DB::table('schedules')
            ->select('start', 'end', 'day')
            ->where('doctor_id', $id)
            ->first();

        $schedule = DB::table('schedules')
            ->select('start', 'end', 'day')
            ->where('doctor_id', $id)
            ->get();
        $time = explode(":", Carbon::now("Europe/Warsaw")->toTimeString());
        $curentTime = date("H:i", strtotime(strval($time[0]) . strval(intval($time[1]) + 5)));

        foreach ($weekDays as $weekDay) {
            foreach ($schedule as $key) {
                if ($weekDay == $key->day) {
                    $days[$day] = array(
                        'weekDay' => $weekDay,
                        'shiftStart' => $key->start,
                        'shiftEnd' => $key->end,
                    );
                }
            }
            $day++;
        }
        $visits;
        foreach ($days as $day) {
            $shift = [];
            if ($curentDay == 6) {
                $curentDay = 1;
                $add += 2;
            } elseif ($curentDay == 0) {
                $curentDay = 1;
                $add++;
            }
            $curentDay++;
            $endArray = explode(':', $day['shiftEnd']);
            if (Carbon::now()->addDay($add)->toDateString() == Carbon::now()->toDateString()) {
                $startArray = explode(":", Carbon::now("Europe/Warsaw")->toTimeString());
                if ((0 < intval($startArray[1]) + 10 && intval($startArray[1]) + 5 <= 20) || 60 < intval($startArray[1])) {
                    $startArray[1] = '20';
                } elseif (20 < intval($startArray[1]) + 10 && intval($startArray[1]) + 5 <= 40) {
                    $startArray[1] = '40';
                } elseif (40 < intval($startArray[1]) + 10 && intval($startArray[1]) + 5 <= 60) {
                    $startArray[0] = strval(intval($startArray[0]) + 1);
                    $startArray[1] = '00';
                }

                if ((intval($startArray[0] . $startArray[1]) + 10) > intval($endArray[0] . $endArray[1])) {
                    $curentDay++;
                    $add++;
                    continue;
                }
            } else {
                $startArray = explode(':', $day['shiftStart']);
            }
            $start = intval($startArray[0]) * 100 + intval($startArray[1]);
            $end = intval($endArray[0]) * 100 + intval($endArray[1]);
            for ($i = $start; $i < $end; $i += 20) {
                $tempTime = $i;
                if ($tempTime < 1000) {
                    $tempTime = "0" . strval($tempTime);
                } else {
                    $tempTime = strval($tempTime);
                }

                array_push($shift, array(
                    'time' => date("H:i", strtotime($tempTime)),
                    'occupied' => null,
                ));
                if ($i % 100 == 40) {
                    $i += 40;
                }

            }
            $occupied = DB::table('visits')
                ->where('doctor_id', $id)
                ->where('day', Carbon::now()->addDay($add)->toDateString())
                ->select('time')
                ->get();
            if (!$occupied->isEmpty()) {
                foreach ($occupied as $visit) {
                    $acc = 0;
                    $timeArray = explode(":", $visit->time);
                    $visitTime = date("H:i", strtotime($timeArray[0] . $timeArray[1]));
                    foreach ($shift as $key) {
                        if ($key['time'] == $visitTime) {
                            $shift[$acc]['occupied'] = true;
                        }
                        $acc++;
                    }

                }
            }
            $visits[$add] = array(
                'date' => Carbon::now()->addDay($add)->toDateString(),
                'dayOfWeek' => Carbon::now()->addDay($add)->dayOfWeek,
                'visits' => $shift,
            );
            $add++;
            unset($shift);
        }
        return view('doctors.show', ['doctor' => $doctor[0]], ['visits' => $visits]);
    }

    public function create()
    {
        $users = User::all();
        $specializations = Specialization::all();
        return view('doctors.create', ['users' => $users, 'specializations' => $specializations]);

    }

    public function store()
    {
        $doctor = new Doctor();
        $doctor->user_id = request('user_id');
        $doctor->specialization_id = request('specialization_id');
        $doctor->informations = request('informations');
        $doctor->rating = 5;
        $doctor->save();
        return redirect('/doctors');
    }

    public function edit($id)
    {
        $doctor = DB::table('doctors')
            ->join('users', 'doctors.user_id', '=', 'users.id')
            ->join('specializations', 'doctors.specialization_id', '=', 'specializations.id')
            ->where('doctors.id', $id)
            ->select('doctors.*', 'specializations.specialization', 'specializations.specification', 'users.name')
            ->get();
        return view('doctors.edit', ['doctor' => $doctor[0]]);
    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function search()
    {
        $search = $_GET['doctor'];
        $doctors = DB::table('doctors')
            ->join('users', 'doctors.user_id', '=', 'users.id')
            ->join('specializations', 'doctors.specialization_id', '=', 'specializations.id')
            ->where('users.surname', 'like', '%' . $search . '%')
            ->orwhere('specializations.specialization', 'like', '%' . $search . '%')
            ->select('users.name', 'users.surname', 'specializations.specialization', 'doctors.informations', 'doctors.id')
            ->get();
        //dd($doctors);
        return view('doctors.search', ['doctors' => $doctors]);

    }

}
