<?php
  
namespace App\Http\Controllers;
  
use App\Models\Banner;
use Illuminate\Http\Request;
  
class BannerController extends Controller
{
  
    public function index()
    {
        $banners = Banner::latest()->paginate(5);
  
        return view('admin.banners.index', compact('banners'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    
    public function create()
    {
        return view('admin.banners.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg,mp4',
        ]);



        if($request->hasFile('image')){
            $image = $request->file('image')->getClientOriginalName();
            $fileName = $request->image->move('images/banner', $image);
            
        }

        $input['title'] = $request->title;
        $input['url'] = $request->url;
        $input['date'] = $request->date;
        $input['seq'] = $request->seq;
        $input['image'] = $fileName;


        Banner::create($input);
   
        return redirect()->route('banners.index')
                        ->with('success','Banner created successfully.');
    }
   
   
    public function show(Banner $banner)
    {
        return view('admin.banners.show',compact('banner'));
    }
   
    
    public function edit(Banner $banner)
    {
        return view('admin.banners.edit',compact('banner'));
    }
  
    
    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg,mp4',
        ]);
        
        if($request->hasFile('image')){
            $image = $request->file('image')->getClientOriginalName();
            $fileName = $request->image->move('images/banner', $image);
            
        }

        $input['title'] = $request->title;
        $input['url'] = $request->url;
        $input['date'] = $request->date;
        $input['seq'] = $request->seq;
        // $input['image'] = $fileName;



        $banner->update($request->all());
  
        return redirect()->route('banners.index')
                        ->with('success',' updated successfully');
    }
  
    
    public function destroy(Banner $banner)
    {
        $banner->delete();
  
        return redirect()->route('banners.index')
                        ->with('success',' deleted successfully');
    }
}
