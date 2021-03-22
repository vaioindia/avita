<?php

namespace App\Http\Controllers\Admin;

use App\Mailers\AppMail;
use Illuminate\Http\Request;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Mail;
class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribes = Subscribe::latest()->paginate(5);

        return view('admin.subscribe.index',compact('subscribes'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subscribe.create');
    }

    // public function subscribe_info()
    // {
    //     // return view('admin.subscribe.subscribe_info');

    //         $details = [
    //             'title' => 'AVITA INDIA | Official Website AVITA INDIA',
    //             'body' => 'This is for testing email using'
    //         ];

    //         \Mail::to('ombhardwaj199@gmail.com')->send(new \App\Mail\MyTestMail($details));

    //         // dd("Email is Sent.");
    // }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $subscribe = new Subscribe();
        $input['email'] = $request->email;
        //input method is used to get the value of input with its
        //name specified
        $subscribe->email = $request->input('email');

        $subscribe = Subscribe::create($input);
            Mail::send('subscribe.index',$subscribe->toArray(),
            function($message){
                $message->to('ombhardwaj199@gmail.com','code online')->subject('New subscribe');
            });

        $subscribe->save(); //persist the data
        return redirect()->route('subscribe.index')->with('info','created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function handleSubscription(Request $request, AppMail $mailer)
    // {

    //     $this->validate($request, [
    //          'email'     => 'required',
    //         ]);

    //     $subscription = new Subscription([
    //        'email'     => $request->input('email'),
    //      ]);

    //     $subscription->save();
    //     $mailer->sendSubscriberInformation(Auth::user(), $subscription);
    //     return redirect()->back()->with("status", "Thanks for Subscribing, We will connect you shortly.");

    // }


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
    public function destroy(Subscribe $subscribe)
    {
        $subscribe->delete();
        return redirect()->route('subscribe.index')
                        ->with('success','deleted successfully');
    }
}
