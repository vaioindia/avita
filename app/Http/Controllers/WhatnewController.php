<?php

namespace App\Http\Controllers;

use App\Models\Whatnew;
use Illuminate\Http\Request;

class WhatnewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whatnews = Whatnew::latest()->paginate(5);
  
        return view('whatnew.index',compact('whatnews'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('whatnew.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'published_at' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
            'url' => 'required',
        ]);

        // if($request->hasFile('image')){
        //     $image = $request->file('image')->getClientOriginalName();
        //     $fileName = $request->image->move(date('mdYHis').'images', $image);
            
        // }
        // else{
        //     $fileName="";
        // }
        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);


        $input['title'] = $request->title;
        $input['published_at'] = $request->published_at;
        $input['url'] = $request->url;
        $input['image'] = $request->image;

        // $whatnew = new Whatnew();
        // $whatnew->title = $request->title;
        // $whatnew->published_at = $request->published_at;
        // $whatnew->url = $request->url;
        // $whatnew->image = $fileName;

        Whatnew::create($request->all());
        // $whatnew->save();

        return redirect()->route('whatnew.index')
        ->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Whatnew  $whatnew
     * @return \Illuminate\Http\Response
     */
    public function show(Whatnew $whatnew)
    {
        return view('whatnew.show',compact('whatnew'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Whatnew  $whatnew
     * @return \Illuminate\Http\Response
     */
    public function edit(Whatnew $whatnew)
    {
        return view('whatnew.edit',compact('whatnew'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Whatnew  $whatnew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Whatnew $whatnew)
    {
        $request->validate([
            'title' => 'required',
            'published_at' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
            'url' => 'required',          
        ]);


        
        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);

        $input['title'] = $request->title;
        $input['url'] = $request->url;
        $input['date'] = $request->date;
        $input['seq'] = $request->seq;

        Whatnew::create($input);

        // if($request->hasFile('image')){
        //     $image = $request->file('image')->getClientOriginalName();
        //     $fileName = $request->image->move(date('mdYHis').'images', $image);
            
            
        // }
        // else{
        //     $fileName="";
        // }

        // $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        // $request->image->move(public_path('images'), $input['image']);

        // $whatnew->title = $request->title;
        // $whatnew->published_at = $request->published_at;
        // $whatnew->url = $request->url;
        // $whatnew->image = $fileName;

        // $input['title'] = $request->title;
        // $input['published_at'] = $request->published_at;
        // $input['url'] = $request->url;

        // $input['title'] = $request->title;
        // $input['published_at'] = $request->published_at;
        // $input['url'] = $request->url;
        // $input['image'] = $request->image;

        // $whatnew->title = $request->title;
        // $whatnew->published_at = $request->published_at;
        // $whatnew->url = $request->url;
        // $whatnew->image = $fileName;

        // Whatnew::create($request->all());
        // $whatnew->save();

        return redirect()->route('whatnew.index')
        ->with('success','created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Whatnew  $whatnew
     * @return \Illuminate\Http\Response
     */
    public function destroy(Whatnew $whatnew)
    {
        $whatnew->delete();
  
        return redirect()->route('whatnew.index')
                        ->with('success','deleted successfully');
    }
}
