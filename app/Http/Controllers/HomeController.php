<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function test(){
        $messeges = DB::table('users')
        ->join('visits', 'visits.user_id', 'users.id')
        ->where(function ($query) {
            $query->where('visits.day', '>=', Carbon::now("Europe/Warsaw")->toDateString())
                ->where('visits.time', '>', Carbon::now("Europe/Warsaw")->toTimeString());
        })
       ->where('visits.day', '<=', Carbon::now("Europe/Warsaw")->addDay(1)->toDateString())     
        ->select('users.email', 'visits.id')
        ->get();
        dd($messeges);
        return 0;
    }
    public function about()
    {
        return view('about');
    }
}
