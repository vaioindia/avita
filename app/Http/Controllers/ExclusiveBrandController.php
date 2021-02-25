<?php

namespace App\Http\Controllers;

use App\Models\ExclusiveBrand;
use Illuminate\Http\Request;

class ExclusiveBrandController extends Controller
{
    
    public function index()
    {
        {   
            $exclusivebrands = ExclusiveBrand::latest()->paginate(5);
  
        return view('exclusivebrand.index',compact('exclusivebrands'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
        }

        
    }

    
    public function create()
    {
        return view('exclusivebrand.create');
    }

    
    public function store(Request $request)
    {
        {
             
        $request->validate([
                'latitude' => 'required',
                'longitude' => 'required',
                'name' => 'required',
                'email' => 'required',
                'address' => 'required',
                'opening_hour' => 'required',
                'phone' => 'required'

            ]);
  
            ExclusiveBrand::create($request->all());
   
        return redirect()->route('exclusivebrand.index')
                        ->with('success',' created successfully.');
        }
        

    }

    
    public function show(ExclusiveBrand $exclusivebrand)
    {
        //$stores = Store::find($id);
        return view('exclusivebrand.show', compact('exclusivebrands'));
    }

    
    public function edit(ExclusiveBrand $exclusivebrand)
    {
        
        return view('exclusivebrand.edit', compact('exclusivebrand'));
    }

    public function update(Request $request, ExclusiveBrand $exclusivebrand)
    {
        $request->validate([
            'latitude' => 'required',
            'longitude' => 'required',
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'opening_hour' => 'required',
            'phone' => 'required'

        ]);
        $exclusivebrand->update($request->all());
  
        return redirect()->route('exclusivebrand.index')
                        ->with('success',' updated successfully');

        
    }

    
    public function destroy(ExclusiveBrand $exclusivebrand)
    {

            $exclusivebrand->delete();
  
        return redirect()->route('exclusivebrand.index')
                        ->with('success',' deleted successfully');
    }
}
