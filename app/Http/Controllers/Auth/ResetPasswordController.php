<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use DB;
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

//    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
//    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function getResetPassword(){
        return view('auth.passwords.email');

    }
    public function forgotPassword(Request $request){
        $randoms = rand(100000,999999);

        DB::table('users')
            ->where('email', '=', $request->email)
            ->update(['password' => Hash::make($randoms)]);

        $data = [
            'email'=>$request->email,
            'randoms'=>$randoms,
        ];

        Mail::send('emails.reset',$data,function ($message)use($data) {
            $message->from('contact.hoclaixe123@gmail.com','hoclaixe123.com');
            $message->to($data['email'])->subject('ResetPassword');
        });

        return redirect(route('login'));
    }
}
