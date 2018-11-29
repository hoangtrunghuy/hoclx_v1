<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DashboardController extends Controller
{
    public function index(){
    	$questions = DB::table('questions')->count();
    	$feedbacks = DB::table('feedback')->count();
    	$users = DB::table('users')->count();
    	$tips = DB::table('tips')->count();
    	$new = DB::table('infor_drivings')->count();

        return view('admin.dashboard.index')
        ->with(compact('questions')) 
        ->with(compact('feedbacks'))
        ->with(compact('users')) 
        ->with(compact('tips')) 
        ->with(compact('new')); 
    }
}
