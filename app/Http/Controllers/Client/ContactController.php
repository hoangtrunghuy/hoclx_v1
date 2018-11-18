<?php

namespace App\Http\Controllers\Client;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function get_lienhe()
    {
        return view('client.contact');
    }

    public function post_lienhe(Request $request)
    {
        if (Auth::check()) {
            $name = Auth::user()->name;
            $email = Auth::user()->email;
            $phone = 123;
            $data=[
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'contact_content' => $request->contact_content,
            ];
        }
        else {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'contact_content' => $request->contact_content,
            ];

        }
        Mail::send('emails.blanks', $data, function ($message) use ($data) {
            $message->from($data['email'], $data['name'])->subject('Contact');
            $message->to('contact.hoclaixe123@gmail.com');
        });
        return redirect()->back();
    }
}
