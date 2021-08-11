<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerCoontroller extends Controller
{
    public function index(){

    }

    public function show(){
        return view('manage');
    }

    public function doctors(){
        return view('doctorsManagment');
    }

    public function store(){
        
    }

    public function edit(){

    }

    public function update(){

    }
    public function delete(){

    }
}
