<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
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
                $fileName = $request->image->move('images/blog', $image);
                
            }

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
        return view('admin.blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        
        return view('admin.blog.edit', compact('blog'));
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
                $fileName = $request->image->move('images/blog', $image);
                
            }

        $blog->title = $request->title;
        $blog->desc = $request->desc;
        $blog->published_at = $request->published_at;
        // $blog->image = $fileName;

        $blog->save();
        return redirect('blog')->with('success','Updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')
        ->with('success','deleted successfully');
    }
}
