<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;
use App\Models\SickLeave;
use App\Mail\MailSent;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;

class SickLeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $start =  Carbon::now();
        $end = Carbon::now()->addDays(request('days'));
        $addres = request('email');
        $name = Auth::user()->name;
        $surname = Auth::user()->surname;
        if(!request('discarded'))
        {
            $mail = [
                'email' => $addres,
                0=>"Zwolnienie zostało wystawione.",
                1=>"Numer zwolnienia: ".request('code'),
                2=>"Podanie rozpatrzył lek. ".$name." ".$surname
            ];
            $mailController = (new MailController)->SickLeave($mail);
            $sickLeave = new SickLeave();
            $sickLeave->start = $start->toDateString();
            $sickLeave->end = $end->toDateString(); 
            $sickLeave->visit_id = $id; 
            $sickLeave->code = request('code');
            $sickLeave->save();  
        }else{
            $mail = [
                'email' => $addres,
                0=>"Podanie o zwolnienie zostało odrzucone",
                1=>request('doctor_desc'),
                2=>"Podanie rozpatrzył lek. ".$name." ".$surname
            ];
            $mailController = (new MailController)->SickLeave($mail);
        }
        Visit::where('id', $id)
        ->update([
            'doctor_desc'=>request('doctor_desc'),
            'done'=>TRUE
        ]);

        return redirect('visits/sick_leaves');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
