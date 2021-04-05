<?php

namespace App\Http\Controllers\Admin;

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
        $request->validate([
            'title'           =>  'required',
            'published_at'    =>  'required',
            'published'       =>  'required',
            'image'           =>  'required|image|max:5000',
            'url'             =>  'required'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/news'), $new_name);
        $form_data = array(
            'title'              =>   $request->title,
            'published_at'       =>   $request->published_at,
            'published'          =>   $request->published,
            'url'                =>   $request->url,
            'image'              =>   $new_name
        );

        Whatnew::create($form_data);

        return redirect()->route('whatnew.index')->with('success', 'Data Added successfully.');
    }


    public function show(Whatnew $whatnew)
    {
        return view('admin.whatnew.show',compact('whatnew'));
    }


    public function edit($id)
    {
        $whatnew = Whatnew::findOrFail($id);
        return view('admin.whatnew.edit',compact('whatnew'));
    }


    public function update(Request $request, $id)
    {

        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'title'         =>  'required',
                'published_at'  =>  'required',
                'published'     =>  'required',
                'url'           =>  'required',
                'image'         =>  'image|max:5000'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/news'), $image_name);
        }
        else
        {
            $request->validate([
                'title'            =>  'required',
                'published_at'     =>  'required',
                'published'        =>  'required',
                'url'              =>  'required',
            ]);
        }

        $form_data = array(
            'title'          =>   $request->title,
            'published_at'   =>   $request->published_at,
            'published'      =>   $request->published_at,
            'url'            =>   $request->url,
            'image'          =>   $image_name
        );

        Whatnew::whereId($id)->update($form_data);

        return redirect()->route('whatnew.index')->with('success', 'Data is successfully updated');
    }


    public function destroy($id)
    {
        // $whatnew->delete();

        // return redirect()->route('whatnew.index')
        //                 ->with('success','deleted successfully');

        //Retrieve the
        $whatnew = Whatnew::find($id);
        //delete
        $whatnew->delete();
        return redirect()->route('whatnew.index');
    }
}
