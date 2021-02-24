<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
            ]);

                
            if($request->hasFile('image')){
                $image = $request->file('image')->getClientOriginalName();
                $fileName = $request->image->move(date('mdYHis').'images', $image);
                
            }

            /*

            $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $input['image']);

            */


            $blog = new Blog();
            $blog->title = $request->title;
            $blog->desc = $request->desc;
            $blog->published_at = $request->published_at;
            $blog->image = $fileName;
           


            $blog->save();
            return redirect()->route('blog.index')
            ->with('success','created successfully.');
    }

    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        // $blogs = Blog::all();
        return view('blog.edit', compact('blog'));
    }

    public function update(Blog $blog, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
            ]);

        
            if($request->hasFile('image')){
                $image = $request->file('image')->getClientOriginalName();
                $fileName = $request->image->move(date('mdYHis').'images', $image);
                
            }


/*
            
         $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);
        */
    
        $blog->title = $request->title;
        $blog->desc = $request->desc;
        $blog->published_at = $request->published_at;
        $blog->image = $fileName;


        $blog->save();
        return redirect('blog.index')->with('success','Updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')
        ->with('success','deleted successfully');
    }
}
