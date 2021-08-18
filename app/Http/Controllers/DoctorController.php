<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Specialization;
use Illuminate\Support\Carbon;

class DoctorController extends Controller
{
    public function index(){
        $doctors = DB::table('doctors')
                ->join('users', 'doctors.user_id', '=', 'users.id')
                ->join('specializations', 'doctors.specialization_id', '=', 'specializations.id')
                ->select('doctors.*', 'specializations.specialization', 'specializations.specification', 'users.name')
                ->get();
                return view('doctors', ['doctors'=>$doctors]);

    }
    public function show($id){
        $weekDays = [
            0 => 'SUN',
            1 => 'MON',
            2 => 'TUE',
            3 => 'WED',
            4 => 'THU',
            5 => 'FRI',
            6 => 'SAT',
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

        $time = Carbon::now()->toTimeString();
        $date = Carbon::now()->toDateString();
        $weekday = $weekDays[Carbon::now()->dayOfWeek];
        var_dump($weekday);
        var_dump($time);
        if($visits->start<$time)
            var_dump('Było minęło');
        die();
        return view('doctors.show', ['doctor' => $doctor[0]]);
    }

    public function create(){
        $users = User::all(); 
        $specializations = Specialization::all(); 
        return view('doctors.create', ['users' => $users, 'specializations' => $specializations]);
        
    }

    public function store(){
        $doctor = new Doctor();
        $doctor->user_id = request('user_id');
        $doctor->specialization_id = request('specialization_id');
        $doctor->informations = request('informations');
        $doctor->rating = 5;
        $doctor->save();
        return redirect('/doctors');
    }

    public function edit($id){
        $doctor = DB::table('doctors')
            ->join('users', 'doctors.user_id', '=', 'users.id')
            ->join('specializations', 'doctors.specialization_id', '=', 'specializations.id')
            ->where('doctors.id', $id)
            ->select('doctors.*', 'specializations.specialization', 'specializations.specification', 'users.name')
            ->get();
        return view('doctors.edit', ['doctor' => $doctor[0]]);
    }

    public function update(){

    }

    public function delete(){

    }
    
    public function search(){
        $search = $_GET['doctor'];
        $doctors = DB::table('doctors')
        ->join('users', 'doctors.user_id', '=', 'users.id')
        ->join('specializations', 'doctors.specialization_id', '=', 'specializations.id')
        ->where('users.surname','like','%'.$search.'%')
        ->orwhere('specializations.specialization','like','%'.$search.'%')
        ->select('users.name', 'users.surname', 'specializations.specialization', 'doctors.informations', 'doctors.id')
        ->get();
        //dd($doctors);
        return view('doctors.search', ['doctors' => $doctors]);
        
    }

}
