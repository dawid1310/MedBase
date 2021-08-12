<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DoctorsRegistration;
class EmailController extends Controller
{
    public function doctorsRequest(Request $request){
        if($request->submit == 'accept'){
            DoctorsRegistration::destroy($request->id);
        }
        else if($request->submit == 'denial'){
            DoctorsRegistration::destroy($request->id);
        }
    }
}
