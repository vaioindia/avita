<?php
  
namespace App\Http\Controllers;
  
use App\Models\Banner;
use Illuminate\Http\Request;
  
class BannerController extends Controller
{
  
    public function index()
    {
        $banners = Banner::latest()->paginate(5);
  
        return view('banners.index', compact('banners'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    
    public function create()
    {
        return view('banners.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg,mp4',
        ]);



        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);

        $input['title'] = $request->title;
        $input['url'] = $request->url;
        $input['date'] = $request->date;
        $input['seq'] = $request->seq;

        Banner::create($input);
  
        // Banner::create($request->all());
   
        return redirect()->route('banners.index')
                        ->with('success','Banner created successfully.');
    }
   
   
    public function show(Banner $banner)
    {
        return view('banners.show',compact('banner'));
    }
   
    
    public function edit(Banner $banner)
    {
        return view('banners.edit',compact('banner'));
    }
  
    
    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg,mp4',
        ]);
        
        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);

        $input['title'] = $request->title;
        $input['url'] = $request->url;
        $input['date'] = $request->date;
        $input['seq'] = $request->seq;



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
