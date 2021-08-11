<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class TestController extends Controller
{
    public function show($name){
        return view('test', [
            'test'=> Person::where('name', $name) -> firstOrFail()
            ]);
    
    }
}
