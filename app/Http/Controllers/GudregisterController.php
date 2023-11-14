<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Gudregisters;
use Illuminate\Support\Facades\Validator;

class GudregisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gudregisters = Gudregisters::all()->toArray();
        return view('serviceprovider.gudhome', compact('gudregisters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('serviceprovider.gudedit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

        'name' => 'required',
        'email'=> 'required',
        'contact'=> 'required',
        'age'=> 'required',
        'gender'=> 'required',
        'licence'=> 'required',
        'area' => 'required',
        'price' => 'required'

        ]);

        $gudregister= new Gudregister([

            'name' => $request->get('name'),
            'email'=> $request->get('email'),
            'contact'=> $request->get('contact'),
            'age'=> $request->get('age'),
            'gender'=> $request->get('gender'),
            'licence' => $request->get('licence'),
            'area'=> $request->get('area'),
            'price'=> $request->get('price')

        ]);
        $gudregister->save();
        return redirect()->route('serviceprovider.gudedit')->with('success','Data Added');
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
     */public function validate1(array $data){
        return validator::make($data,[
            'name'=>['required','string','max:255'],

        ]);

    }

    public function update(Request $request,$id){
        // dd($request->name);
        $this -> validate($request,[
            'name' =>'required|min:3|max:50|string',
            'age' =>'string|min:2|max:2',
           'contact' =>'string|min:9|max:10',
            
        ]);
        

        $user = gudregisters::find(Auth::user()->id);

        $user->name= $request->get('name');  
        $user->age = $request->get('age');
        $user->contact = $request->get('contact');
        $user->price = $request->get('price');
        $user->save();

        return back();
        
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
