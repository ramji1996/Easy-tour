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
use App\User;
use PDF;

class DynamicPDFController extends Controller
{

    public function index()
    {
        $data = $this->get_data();
        return view('dynamic_pdf')->with('data',$data);

    }

    public function get_data()
    {
        $data = DB::table('users')
                        //->limit(10)
                        ->get();

        return $data;

    }

    public function pdf()
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->
                        concert_data_to_html());  
        return $pdf->stream();

    }

    public function concert_data_to_html()
    {
        $data = $this->get_data();
        $output = ' 
                    <!DOCTYPE html>
                    <html>
                    <head>
                    <style>
                    table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                    }

                    td, th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                    }

                    tr:nth-child(even) {
                    background-color: #dddddd;
                    }
                    </style>
                    </head>
                    <body>

                    <h2>System user details</h2>

                    <table>
                            
                    <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Type</th>
                    <th>Registation date</th>
                    </tr> ';
                    foreach($data as $value)
                    {
                        $output .='

                                <tr>
                                    <td> '.$value->id.'</td>
                                    <td>'. $value->name.'</td>
                                    <td>'. $value->email.'</td>
                                    <td>'. $value->user_type.'</td>
                                    <td>'. $value->created_at.'</td>
                                    
                        
                                </tr> '; }
                    
                        $output.= '</table></body> </html>';
                        return $output;

    }

    
}

