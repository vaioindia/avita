<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class SubscribeController extends Controller
{
    public function subscribe(){
        return view('admin.subscribe.index');
    }

    public function subscribePost(Request $request){
        $this->validate($request, [
                        'email' => 'required|email'
                ]);

        Mail::send('email', [
                'email' => $request->get('email'), ],
                function ($message) {
                        $message->from('ombhardwaj199@gmail.com');
                        $message->to('ombhardwaj199@gmail.com', 'Your Name')
                                ->subject('Your Website Contact Form');
        });

        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');

    }
}
