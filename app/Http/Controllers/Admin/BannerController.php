<?php

namespace App\Http\Controllers\Admin;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function status(Request $request)
    {
        if($request->mode=='true'){
            DB::table('banners')->where('id',$request->id)->update(['status'=>'enabled']);
        }
        else{
            DB::table('banners')->where('id',$request->id)->update(['status'=>'disabled']);

        }
        return response()->json(['msg'=>'Successfully update Status','status'=>true]);
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
            // 'status'     =>  'required',
            'mob_image'         =>  'required|image|max:5000',
            'web_image'         =>  'required|image|max:5000',
            'url'         =>  'required'
        ]);

        $web_image = $request->file('web_image');
        $mob_image = $request->file('mob_image');

        $new_name = rand() . '.' . $web_image->getClientOriginalExtension();
        $new_name1 = rand() . '.' . $mob_image->getClientOriginalExtension();
        $web_image->move(public_path('images/banner'), $new_name);
        $mob_image->move(public_path('images/banner'), $new_name1);
        $form_data = array(
            'title'       =>   $request->title,
            'date'        =>   $request->date,
            'seq'        =>   $request->seq,
            'status'        =>   $request->status,
            'url'        =>   $request->url,
            'web_image'            =>   $new_name,
            'mob_image'            =>   $new_name1,

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
        $image_name1 = $request->hidden_image;
        $web_image = $request->file('web_image');
        $mob_image = $request->file('mob_image');
        if($web_image != '' || $mob_image != '')
        {
            $request->validate([
                'title'    =>  'required',
                'date'     =>  'required',
                'seq'     =>  'required',
                'status'     =>  'required',
                'web_image'         =>  'required|image|max:5000',
                'mob_image'         =>  'required|image|max:5000',
                'url'         =>  'required'
            ]);

            $image_name = rand() . '.' . $web_image->getClientOriginalExtension();
            $image_name1 = rand() . '.' . $mob_image->getClientOriginalExtension();
            $web_image->move(public_path('images/banner'), $image_name);
            $mob_image->move(public_path('images/banner'), $image_name1);
        }
        else
        {
            $request->validate([
                'title'    =>  'required',
                'date'     =>  'required',
                'seq'     =>  'required',
                'status'     =>  'required',
                'url'     =>  'required',
            ]);
        }

        $form_data = array(
            'title'       =>   $request->title,
            'date'        =>   $request->date,
            'seq'        =>   $request->seq,
            'status'        =>   $request->status,
            'url'        =>   $request->url,
            'web_image'            =>   $image_name,
            'mob_image'            =>   $image_name1,
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
