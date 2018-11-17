<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class VerificationController extends Controller
{
    // public function random(){
    //     $random = rand(100000,999999);
    // }
	public function get_xacnhan(){
        return view('client.contact');
    }
    public function post_xacnhan(Request $request){
        $data = [       	
        	'email'=>$request->email,
        	'random'=>rand(100000,999999),
        ];
        Mail::send('emails.maxacnhan',$data,function ($message)use($data) {
            $message->from('contact.hoclaixe123@gmail.com','Verification');
            $message->to($data['email']);
        });
        return redirect()->back();
    }
}
