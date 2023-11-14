<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\drvregisters;
use App\gudregisters;
use App\eqpregisters;
use App\FeedbackDriver;
use App\FeedbackGuide;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        
        $guide = gudregisters::all();
        $driver = drvregisters::all();
        $eqp = eqpregisters::all();
        $feedback = FeedbackDriver::all();
        $feedbackg = FeedbackGuide::all();
        return view('home',compact('driver','guide','eqp','feedback','feedbackg'));
        
    }
}
