<?php

namespace App\Http\Controllers;

use App\User;
use App\eqpregisters;

use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EquipmentProviderController extends Controller
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
        return view('equipmentprovider.Pages.register');
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
    public function edit()
    {
        return view('equipmentprovider.Pages.edit-details');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $eqpregisters = eqpregisters::find(Auth::user()->eqp->id);

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'area' => 'required',
            'ename' => 'required',
            'price' => 'required',
        ]);

        if($user) {
            $user->name = $validatedData['name'];
            $eqpregisters->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $eqpregisters->email = $validatedData['email'];
            $eqpregisters->area = $validatedData['area'];
            
            $eqpregisters->ename = $validatedData['ename'];
            
            $eqpregisters->price = $validatedData['price'];
            
            $eqpregisters->contact = $validatedData['contact'];

            $user->save();
            $eqpregisters->save();
            Session::flash('message', 'Details Updated');
            Session::flash('alert-class', 'alert-success'); 
            return redirect()->back();

        } else {
            return redirect()->back();
        }
    }

    public function updatePassword(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $validatedData = $request->validate([
            'oldPassword' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        $oldPassword = $request['oldPassword'];
        
        if(Hash::check($oldPassword , $user->password)){
            
            $user->password = Hash::make($validatedData['password']);

            $user->save();
            Session::flash('message', 'Password Updated');
            Session::flash('alert-class', 'alert-success'); 

            return redirect()->back();
        }else{
            Session::flash('current-password', 'Current password is incorrect');
            Session::flash('alert-class', 'alert-danger'); 

            return redirect()->back();
        }

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $user = User::find(Auth::user()->id);

        
    }
}
