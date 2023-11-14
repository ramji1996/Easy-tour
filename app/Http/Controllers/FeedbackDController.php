<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\FeedbackDriver;
use App\drvregisters;
use Illuminate\Support\Facades\DB;
use App\DriverBooking;
use Illuminate\Support\Facades\Validator;

class FeedbackDriverController extends Controller
{
    

    public function index1($id){
       
        $driver = drvregisters::find($id);
        return view('tourist.booking_form.feedback_driver',compact('driver'));

    }

    public function index2($id){
        $id2=Auth::user()->id;
        $driver = drvregisters::find($id);
        $booking = DriverBooking::where('driver_id', $id)
                                 ->where('tourist_id', $id2)->latest('created_at')->first();
        // dd($booking->book_flag);
        return view('tourist.status.waiting_driver',compact('driver','booking'));
    }
    

    public function Validator(array $data)
    {
        return Validator::make($data, [
           
            'tourist_id'=>'required',
            'sp_id'=>'required',
            'service_id'=>'required',
            'rate'=> 'required',
            'comment'=> 'required',
            
        ]);
    }

    /**
     * 
     *
     * @param  array  $data
     * @return \App\User
     */
    
    public function create(Request $request)
    {

        $rating =new FeedbackDriver;
        $rating->tourist_id = Auth::user()->id;
        $rating->driver_id = $request->driver_id;
        $rating->service_id = 007;
        $rating->rate = $request->rate;
        $rating->comment = $request->comment;
        $rating->Start = $request->Start;
        $rating->End = $request->End;
        $rating->Travelmode = $request->Travelmode;
        $rating->RateTour = $request->RateTour;
        
        $rating->save();

        return redirect()->route('home');
    }
}

