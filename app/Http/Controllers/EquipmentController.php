<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\eqpregisters;
use Auth;
use Illuminate\Support\Facades\DB;
use App\FeedbackEquipment;
use App\EquipmentBooking;
use App\Equipment;

class EquipmentController extends Controller
{
    
    public function show($id)
    {
       
         $equipment = eqpregisters::find($id);
        
         $rate = FeedbackEquipment::where('equipment_id', $id);
       
         $id2 = Auth::user()->id;
         $booking = EquipmentBooking::where('equipment_id', $id)
                                     ->where('tourist_id', $id2)->latest('created_at')->first();
        return view('pages.equipment_profile',compact('equipment','rate','booking'));
    }

    public function create(){
        return view('equipmentprovider.Pages.add-new-equipment');
    }

    public function store(Request $request){

        $this->validate($request,[
           
            'name' => 'required',
            'description'=> 'required',
            'costpd'=> 'required',

         ]);

         $equipment = new Equipment([
            'name' => $request->get('name'),
            'description'=> $request->get('description'),
            'costpd'=> $request->get('costpd'),
            'availability' => 1,
            ]);
          $equipment->save();
          return back(); 
    }

    
}
