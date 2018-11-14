<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tip;
use App\Feedback;
use App\InforDriving;
class HomeController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // if (!\Request::is('/')) { 
    //         $this->middleware('auth');
    //     }

    public function index()
    {
        $data = Tip::all();
        $data1 = Feedback::all();
        $data2 = InforDriving::all();
        return view('client.index',compact('data','data1','data2'));
    }
}
