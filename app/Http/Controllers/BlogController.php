<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showBlog()
    {
        // $blogs = Blog::latest()->orderBy('id', 'desc')->get();
        $blogs = Blog::all();
            return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showBlogDetail($slug)
    {
        $blog = Blog::where('id', $slug)->get()->first();
        return view('blogs.detail', compact('blog'));
    }
}
