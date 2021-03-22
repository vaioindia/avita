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
        // $fileName ='';
        // $request->validate([
        //     'title' => 'required',
        //     'published_at' => 'required',
        //     'image' => 'required',
        //     'url' => 'required',
        // ]);

        // if($request->hasFile('image')){
        //     $image = $request->file('image')->getClientOriginalName();
        //     $fileName = $request->image->move('images/news', $image);

        // }

        // $input['title'] = $request->title;
        // $input['published_at'] = $request->published_at;
        // $input['url'] = $request->url;
        // $input['image'] = $fileName;


        //     Whatnew::create($input);

        //     $whatnew = new Whatnew();
        //     $whatnew->title = $request->title;
        //     $whatnew->url = $request->url;
        //     $whatnew->published_at = $request->published_at;
        //     $whatnew->image = $fileName;

        // Whatnew::create($request->all());

        // return redirect()->route('whatnew.index')
        // ->with('success','created successfully.');

        $request->validate([
            'title'    =>  'required',
            'published_at'     =>  'required',
            'image'         =>  'required|image|max:5000',
            'url'         =>  'required'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/news'), $new_name);
        $form_data = array(
            'title'       =>   $request->title,
            'published_at'        =>   $request->published_at,
            'url'        =>   $request->url,
            'image'            =>   $new_name
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
        // $request->validate([
        //     'title' => 'required',
        //     'published_at' => 'required',
        //     'image' => 'mimes:jpeg,png,jpg,gif,svg',
        //     'url' => 'required',
        // ]);

        // if($request->hasFile('image')){
        //     $image = $request->file('image')->getClientOriginalName();
        //     $fileName = $request->image->move('images/news', $image);

        // }


        // $input['title'] = $request->title;
        // $input['url'] = $request->url;
        // $input['published_at'] = $request->published_at;
        // $input['image'] = $fileName;

        // $whatnew = new Whatnew();
        // $whatnew->title = $request->title;
        // $whatnew->url = $request->url;
        // $whatnew->published_at = $request->published_at;
        // $whatnew->image = $fileName;

        // Whatnew::update($input);

        // return redirect()->route('whatnew.index')
        // ->with('success','created successfully.');

        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'title'    =>  'required',
                'published_at'     =>  'required',
                'url'     =>  'required',
                'image'         =>  'image|max:5000'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/news'), $image_name);
        }
        else
        {
            $request->validate([
                'title'    =>  'required',
                'published_at'     =>  'required',
                'url'     =>  'required',
            ]);
        }

        $form_data = array(
            'title'       =>   $request->title,
            'published_at'        =>   $request->published_at,
            'url'        =>   $request->url,
            'image'            =>   $image_name
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
