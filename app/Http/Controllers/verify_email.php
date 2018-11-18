<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class verify_email extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function email_verify(){
        $status = Auth::user()->user_status;
        if($status != 1){
            $id = Auth::user()->id;
            $token = Auth::user()->remember_token;
            $email = Auth::user()->email;
            $username = Auth::user()->name;
            $data =[
                'name'=>$username,
                'email' => $email,
                'id' => $id,
                'token' => $token
            ];
            Mail::send('emails.maxacnhan',$data,function ($message)use($data) {
                $message->from('contact.hoclaixe123@gmail.com','Verification');
                $message->to($data['email']);
            });
            return redirect()->route('home');
//            ->with('success', 'Vui lòng kiểm tra email')
        }
        return redirect()->route('home')->with('error', 'Tài khoản đã được xác minh');


    }
    public function get_xacnhan($id,$token){
        $user = User::find($id);

        if($user->remember_token == $token)
        {
            $user->user_status = 1;
            $user->save();
            return view('emails.success');
        }


        else
            return view('emails.failed');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
