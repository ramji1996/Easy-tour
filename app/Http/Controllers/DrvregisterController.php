<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Drvregisters;
use Illuminate\Support\Facades\Validator;


class DrvregisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $drvregisters = Drvregisters::all()->toArray();
        $drvregs=Driveregisters::paginate(15);
        return view('serviceprovider.drvhome', compact('drvregisters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('serviceprovider.drvedit');
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
           'v_reg_no'=> 'required'


        ]);

        $drvregister= new Drvregister([

            'name' => $request->get('name'),
            'email'=> $request->get('email'),
            'contact'=> $request->get('contact'),
            'age'=> $request->get('age'),
            'gender'=> $request->get('gender'),
            'licence'=> $request->get('licence'),
            'v_reg_no'=> $request->get('v_reg_no'),
            'v_brand'=> $request->get('v_brand'),
            'v_seats'=> $request->get('v_seats')
            

        ]);
        $drvregister->save();
        return redirect()->route('serviceprovider.drvedit')->with('success','Data Added');
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

    public function validate1(array $data){
        return validator::make($data,[
            'name'=>['required','string','max:255'],
              
             'age'=>['required','string'],

        ]);

    }

    public function update(Request $request,$id){
        // dd($request->name);
        $this -> validate($request,[
            'name' =>'required|min:3|max:50|string',
            'age' =>'string|min:2|max:2',
           'v_reg_no'=> 'required',
           'v_brand'=> 'required',
           'v_seats'=> 'required',
           'contact' =>'string|min:9|max:10',
            
        ]);
        

        $user = drvregisters::find(Auth::user()->id);

        $user->name= $request->get('name');  
        $user->age = $request->get('age');
        $user->contact = $request->get('contact');
        $user->v_reg_no = $request->get('v_reg_no');
        $user->v_brand =$request->get('v_brand');
        $user->v_seats =$request->get('v_seats');
        
        if( $request-> has('image_path')){
            $image=$request->file('image_path');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images/tourist'),$filename);
            $user->image_path=$request->file('image_path')->getClientOriginalName();
        }
       
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
