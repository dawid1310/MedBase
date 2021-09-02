<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        /*$user = DB::table('users')
        ->select('name', 'surname', 'email', 'phone', 'pesel')
        ->where('id')*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = User::where('id', Auth::user()->id)
        ->select('id', 'name', 'surname', 'email', 'phone', 'pesel')
        ->first();
        return view('users.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user = User::find(request('id'));
        $user->pesel = request('pesel');
        $user->email = request('email');
        $user->name = request('name');
        $user->surname = request('surname');
        $user->phone = request('phone');
        $user->save($this->validator());
        return redirect('/user-data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function changePassword()
    {
        return view('users.changePassword');
    }

    public function updatePassword(Request $request){

        $user = User::find(Auth::user()->id);
        $password = request('password');
        if(strlen($password)>8)
        {
            $user->password = Hash::make($password);
            $user->save(); 
            return redirect('/account/'.Auth::user()->id);
        }
        return redirect('/changepassword');

    }

    protected function validator(){
        return request()->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'phone' => 'max:9|min:9',  
            'pesel' => 'max:11|min:11',
            'email' => 'required|string|email|max:255',
        ]);
    }

    protected function validadePassword(){
        return request()->validate([
            'password' => 'required|string|min:8|confirmed'
        ]);
    }
}
