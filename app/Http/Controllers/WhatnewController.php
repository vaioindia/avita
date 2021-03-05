<?php

namespace App\Http\Controllers;

use App\Models\Whatnew;
use Illuminate\Http\Request;

class WhatnewController extends Controller
{
    
    public function index()
    {
        $whatnews = Whatnew::latest()->paginate(5);
  
        return view('admin.whatnew.index',compact('whatnews'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
    public function create()
    {
        return view('admin.whatnew.create');
    }

    public function store(Request $request)
    {
        $fileName ='';
        $request->validate([
            'title' => 'required',
            'published_at' => 'required',
            'image' => 'required',
            'url' => 'required',
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image')->getClientOriginalName();
            $fileName = $request->image->move('images/news', $image);
            
        }

        $input['title'] = $request->title;
        $input['published_at'] = $request->published_at;
        $input['url'] = $request->url;
        $input['image'] = $fileName;


        // Whatnew::create($input);

            // $whatnew = new Whatnew();
            // $whatnew->title = $request->title;
            // $whatnew->url = $request->url;
            // $whatnew->published_at = $request->published_at;
            // $whatnew->image = $fileName;

        Whatnew::create($request->all());
      
        return redirect()->route('whatnew.index')
        ->with('success','created successfully.');
    }

   
    public function show(Whatnew $whatnew)
    {
        return view('admin.whatnew.show',compact('whatnew'));
    }

    
    public function edit(Whatnew $whatnew)
    {
        return view('admin.whatnew.edit',compact('whatnew'));
    }

    
    public function update(Request $request, Whatnew $whatnew)
    {
        $request->validate([
            'title' => 'required',
            'published_at' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
            'url' => 'required',          
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image')->getClientOriginalName();
            $fileName = $request->image->move('images/news', $image);
            
        }
        
        
        $input['title'] = $request->title;
        $input['url'] = $request->url;
        $input['published_at'] = $request->published_at;
        // $input['image'] = $fileName;

        // $whatnew = new Whatnew();
        // $whatnew->title = $request->title;
        // $whatnew->url = $request->url;
        // $whatnew->published_at = $request->published_at;
        // $whatnew->image = $fileName;

        Whatnew::update($input);

        return redirect()->route('whatnew.index')
        ->with('success','created successfully.');
    }

   
    public function destroy(Whatnew $whatnew)
    {
        $whatnew->delete();
  
        return redirect()->route('whatnew.index')
                        ->with('success','deleted successfully');
    }
}
