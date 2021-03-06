<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;
use App\Models\Prescription;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PrescriptionController extends Controller
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
        $name = Auth::user()->name;
        $surname = Auth::user()->surname;
        $addres = request('email');
        if(!request('discarded'))
        {
            $mail = [
                'email' => $addres,
                0=>"Recepta została wystawiona.",
                1=>"Numer recepty: ".strip_tags(request('code')),
                2=>"Podanie rozpatrzył lek. ".$name." ".$surname
            ];
            $mailController = (new MailController)->sendPres($mail);
            $prescryption = new Prescription();
            $prescryption->code = strip_tags(request('code')); 
            $prescryption->visit_id = $id; 
            $prescryption->save();  
        }else{
            $mail = [
                0=>"Podanie o receptę zostało odrzucone",
                1=>strip_tags(request('doctor_desc')),
                2=>"Podanie rozpatrzył lek. ".$name." ".$surname
            ];
            $mailController = (new MailController)->sendPres($mail);
        }
        Visit::where('id', $id)
        ->update([
            'doctor_desc'=>strip_tags(request('doctor_desc')),
            'done'=>TRUE
        ]);

        return redirect('visits/prescryptions');   


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
