<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\drvregisters;
use App\gudregisters;
use App\eqpregisters;


class SearchController extends Controller
{
    public function index(Request $request)  {

        $search = $request->get('search');
        $profile1= gudregisters::where('area', $search)->get(); 
        $profile2= drvregisters::where('area', $search)->get(); 
        $eqp= eqpregisters::where('area', $search)->get(); 
        return view('tourist.home.search_page',['profile1' => $profile1],['profile2' => $profile2],['eqp' => $eqp]);
   
       

     
        }    
        }    

