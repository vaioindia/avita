<?php

namespace App\Http\Controllers\Admin;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{

    public function index()
    {
        // $banners = Banner::latest()->paginate(5);
        // return view('admin.banners.index', compact('banners'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);

        $banners = Banner::all();
        return view('admin.banners.index', compact('banners'));
    }


    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        

        $request->validate([
            'title'    =>  'required',
            'date'     =>  'required',
            'seq'     =>  'required',
            // 'enabled'     =>  'required',
            'image'         =>  'required|image|max:5000',
            'url'         =>  'required'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/banner'), $new_name);
        $form_data = array(
            'title'       =>   $request->title,
            'date'        =>   $request->date,
            'seq'        =>   $request->seq,
            'enabled'        =>   $request->enabled,
            'url'        =>   $request->url,
            'image'            =>   $new_name
        );

        Banner::create($form_data);

        return redirect()->route('banners.index')->with('success', 'Data Added successfully.');
    }


    public function show(Banner $banner)
    {
        return view('admin.banners.show',compact('banner'));
    }


    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banners.edit',compact('banner'));
    }


    public function update(Request $request, $id)
    {

        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'title'    =>  'required',
                'date'     =>  'required',
                'seq'     =>  'required',
                'enabled'     =>  'required',
                'image'         =>  'required|image|max:5000',
                'url'         =>  'required'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/banner'), $image_name);
        }
        else
        {
            $request->validate([
                'title'    =>  'required',
                'date'     =>  'required',
                'seq'     =>  'required',
                'enabled'     =>  'required',
                'url'     =>  'required',
            ]);
        }

        $form_data = array(
            'title'       =>   $request->title,
            'date'        =>   $request->date,
            'seq'        =>   $request->seq,
            'enabled'        =>   $request->enabled,
            'url'        =>   $request->url,
            'image'            =>   $image_name
        );

        Banner::whereId($id)->update($form_data);

        return redirect()->route('banners.index')->with('success', 'Data is successfully updated');
    }


    public function destroy($id)
    {
        // $banner->delete();
        // return redirect()->route('banners.index')
        //                 ->with('success',' deleted successfully');

        $banner = Banner::find($id);
        //delete
        $banner->delete();
        return redirect()->route('banners.index');
    }
}
