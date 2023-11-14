<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\drvregisters;
use App\gudregisters;
use App\eqpregisters;
use App\touregister;
use App\DriverBooking;
use App\EquipmentBooking;
use App\GuideBooking;
use App\FeedbackDriver;
use App\FeedbackGuide;
use App\User;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }


    public function index()
    {
       //dd('test');
        $guide = gudregisters::all();
        $driver = drvregisters::all();
        $feedback = FeedbackDriver::all();
        $feedbackGuide = FeedbackGuide::all();
        $equipment = eqpregisters::all();
        $tourist = touregister::all();
        $g_booking = GuideBooking::all();
        $i=1;
        $j=0;
        $x=2;

        $g_finised = GuideBooking::where('finiesd_flag', $i)
                                ->where('book_flag', $i)->get();

        $g_booked = GuideBooking::where('finiesd_flag', $j)
                                ->where('book_flag', $i)->get();

        $g_pending =GuideBooking::where('finiesd_flag', $j)
                               ->where('book_flag', $j)->get();

        $g_canceled = GuideBooking::where('book_flag', $x)->get();

        $d_finised = DriverBooking::where('finiesd_flag', $i)
                               ->where('book_flag', $i)->get();

        $d_booked = DriverBooking::where('finiesd_flag', $j)
                               ->where('book_flag', $i)->get();

        $d_pending = DriverBooking::where('finiesd_flag', $j)
                              ->where('book_flag', $j)->get();

        $d_canceled = DriverBooking::where('book_flag', $x)->get();
        
        $e_finised = EquipmentBooking::where('finiesd_flag', $i)
                              ->where('book_flag', $i)->get();

        $e_booked = EquipmentBooking::where('finiesd_flag', $j)
                              ->where('book_flag', $i)->get();

        $e_pending = EquipmentBooking::where('finiesd_flag', $j)
                             ->where('book_flag', $j)->get();
        
         $e_canceled = EquipmentBooking::where('book_flag', $x)->get();

        
        
        return view('admin.home.admin_home',compact('driver','guide','equipment','tourist','feedback','feedbackGuide',
                                                    'g_finised','g_booked','g_pending','g_canceled',
                                                    'd_finised','d_booked','d_pending','d_canceled',
                                                    'e_finised','e_booked','e_pending', 'e_canceled'                                               
        ) ) ;
        
    } 




    public function tourist_delete($id)
    {
        
        DB::table('users')->where('id',$id)->delete();
        DB::table('touregisters')->where('id',$id)->delete();
       
        return redirect ('/admin_home');
        
    }

    public function equipment_delete($id)
    {
        
        DB::table('users')->where('id',$id)->delete();
        DB::table('eqpregisters')->where('id',$id)->delete();
       
        return redirect ('/admin_home');
        
    }

    public function guide_delete($id)
    {
        
        DB::table('users')->where('id',$id)->delete();
        DB::table('gudregisters')->where('id',$id)->delete();
      
        return redirect ('/admin_home');
        
    }

    public function driver_delete($id)
    {
        
        DB::table('users')->where('id',$id)->delete();
        DB::table('drvregisters')->where('id',$id)->delete();
       
        return redirect ('/admin_home');
        
    }
}
