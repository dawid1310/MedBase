<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DoctorsRegistration;
class DoctorsRegistrationController extends Controller
{
    public function index(){

    }

    public function show(){
        
    }

    public function create(){
        return view('doctorsRegistration');
    }

    public function store(){
        $pesel = request('pesel');
        $email = request('email');
        $name = request('name');
        $surname = request('surname');
        $pwz = request('pwz_number');
        DoctorsRegistration::create($this->validator());
        
    }

    public function edit(){

    }

    public function update(){

    }
    public function delete(){

    }

    protected function validator(){
        return request()->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'pwz_number' => 'required|max:7|min:7',  
            'pesel' => 'required|max:11|min:11',
            'email' => 'required|string|email|max:255',
        ]);
    }
}
