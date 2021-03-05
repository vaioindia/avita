<?php

namespace App\Http\Controllers;

use App\Mailers\AppMail;
use Illuminate\Http\Request;
use App\Models\Subscribe;
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
    public function subscribe_info()
    {
        return view('admin.subscribe.subscribe_info');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
             
            $request->validate([
                    
                    'email' => 'required|email',
                //     'check' => 'accepted',   
                ]);

                // if($request->has('check')){
                //     //Checkbox checked
                // }else{
                //     //Checkbox not checked
                // }


                $input['email'] = $request->email;
                // $input['check'] = $request->check;
                
                Subscribe::create($request->all());
       
            return redirect()->route('subscribe_info')
                            ->with('success','Subscribe created successfully.');
            }
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
    public function destroy(Subscribe $subscribe)
    {
        $subscribe->delete();
        return redirect()->route('subscribe.index')
                        ->with('success','deleted successfully');
    }
}
