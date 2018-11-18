<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user_firstName' => 'required|string|max:255',
            'user_lastName' => 'required|string|max:255',
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'user_firstName' => $data['user_firstName'],
            'user_lastName' => $data['user_lastName'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_level'=> 0,
            'user_status'=> 0,
            'user_img'=>'client/images/Person-icon-grey1.jpg',
        ]);
    }
    public function get_xacnhan($id,$token){
        $check = User::where('id',$id)->select('remember_token');
        if($check == $token)
            return view('auth.register');
        else
            return view('');
    }
    public function email_verify(){
        return 350;
        $id = Auth::user()->id;
        $token =Auth::user()->remember_token;
        $data =[
            'id' => $id,
            'token' => $token
        ];
        return $data;
        Mail::send('emails.maxacnhan',$data,function ($message)use($data) {
            $message->from('contact.hoclaixe123@gmail.com','Verification');
            $message->to($data['email']);
        });
        return redirect()->route('trangxacnhan');
    }
    public function getma(Request $request){
        $data = [
            'maxacnhan' =>$request->maxacnhan,
        ];

    }
}
