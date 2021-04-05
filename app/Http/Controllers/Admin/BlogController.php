<?php

namespace App\Http\Controllers\Admin;
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
            'title'         =>  'required',
            'published_at'  =>  'required',
            'desc'          =>  'required',
            'short_desc'    =>  'required',
            'image'         =>  'image|max:5000'
        ]);
        // $request->validate([
        //     'title' => 'required',
        //     'desc' => 'required',
        //     'image' => 'mimes:jpeg,png,jpg,gif,svg',
        //     ]);

        //     if($request->hasFile('image')){
        //         $image = $request->file('image')->getClientOriginalName();
        //         $fileName = $request->image->move('images/blog', $image);

        //     }

        //     $blog = new Blog();
        //     $blog->title = $request->title;
        //     $blog->desc = $request->desc;
        //     $blog->published_at = $request->published_at;
        //     $blog->image = $fileName;

        //     $blog->save();
        //     return redirect()->route('blog.index')
        //     ->with('success','created successfully.');

        $request->validate([
            'title'          =>  'required',
            'published_at'   =>  'required',
            'image'          =>  'required|image|max:5000',
            'short_desc'     =>  'required',
            'desc'           =>  'required',
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/blog'), $new_name);
        $form_data = array(
            'title'           =>   $request->title,
            'published_at'    =>   $request->published_at,
            'desc'            =>   $request->desc,
            'short_desc'      =>   $request->short_desc,
            'image'           =>   $new_name
        );

        Blog::create($form_data);

        return redirect()->route('blog.index')->with('success', 'Data Added successfully.');
    }

    public function show(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'         =>  'required',
            'published_at'  =>  'required',
            'desc'          =>  'required',
            'short_desc'    =>  'required',
            'image'         =>  'image|max:5000'
        ]);
        // $request->validate([
        //     'title' => 'required',
        //     'desc' => 'required',
        //     'image' => 'mimes:jpeg,png,jpg,gif,svg',
        //     ]);

        //     if($request->hasFile('image')){
        //         $image = $request->file('image')->getClientOriginalName();
        //         $fileName = $request->image->move('images/blog', $image);

        //     }

        // $blog->title = $request->title;
        // $blog->desc = $request->desc;
        // $blog->published_at = $request->published_at;
        // $blog->image = $fileName;

        // $blog->save();
        // return redirect('blog')->with('success','Updated successfully!');

        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'title'         =>  'required',
                'published_at'  =>  'required',
                'desc'          =>  'required',
                'short_desc'    =>  'required',
                'image'         =>  'image|max:5000'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/blog'), $image_name);
        }
        else
        {
            $request->validate([
                'title'         =>  'required',
                'published_at'  =>  'required',
                'desc'          =>  'required',
                'short_desc'    =>  'required',

            ]);
        }

        $form_data = array(
            'title'             =>   $request->title,
            'published_at'      =>   $request->published_at,
            'desc'              =>   $request->desc,
            'short_desc'        =>   $request->short_desc,
            'image'             =>   $image_name
        );

        Blog::whereId($id)->update($form_data);

        return redirect()->route('blog.index')->with('success', 'Data is successfully updated');
    }

    public function destroy($id)
    {
        // $blog->delete();
        // return redirect()->route('blog.index')
        // ->with('success','deleted successfully');

        $blog = Blog::find($id);
        //delete
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
