<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Specialization;
class DoctorController extends Controller
{
    public function index(){
        //$doctors= Doctor::all();

        $doctors = DB::table('doctors')
                ->join('users', 'doctors.user_id', '=', 'users.id')
                ->join('specializations', 'doctors.specialization_id', '=', 'specializations.id')
                ->select('doctors.*', 'specializations.specialization', 'specializations.specification', 'users.name')
                ->get();
                return view('doctors', ['doctors'=>$doctors]);

    }
    public function show($id){
        //dd($id);
        $doctor = DB::table('doctors')
            ->join('users', 'doctors.user_id', '=', 'users.id')
            ->join('specializations', 'doctors.specialization_id', '=', 'specializations.id')
            ->where('doctors.id', $id)
            ->select('doctors.*', 'specializations.specialization', 'specializations.specification', 'users.name')
            ->get();
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
    

}
