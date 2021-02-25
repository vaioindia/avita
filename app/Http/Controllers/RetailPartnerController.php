<?php

namespace App\Http\Controllers;

use App\Models\RetailPartner;
use Illuminate\Http\Request;

class RetailPartnerController extends Controller
{
    
    public function index()
    {
        {   
            $retailpartners = RetailPartner::latest()->paginate(5);
  
        return view('retailpartner.index',compact('retailpartners'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
        }

        
    }

    
    public function create()
    {
        return view('retailpartner.create');
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
  
        RetailPartner::create($request->all());
   
        return redirect()->route('retailpartner.index')
                        ->with('success','RetailPartner created successfully.');
        }
        

    }

    
    public function show(RetailPartner $retailpartner)
    {
        //$stores = Store::find($id);
        return view('retailpartner.show', compact('retailpartners'));
    }

    
    public function edit(RetailPartner $retailpartner)
    {
        // $stores = Store::find($id);
        return view('retailpartner.edit', compact('retailpartner'));
    }

    public function update(Request $request, RetailPartner $retailpartner)
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
        $retailpartner->update($request->all());
  
        return redirect()->route('retailpartner.index')
                        ->with('success','RetailPartner updated successfully');

        
    }

    
    public function destroy(RetailPartner $retailpartner)
    {
        //$id = $request->input('id');

        // $stores = Store::find($id);
        // $stores->delete();



            $retailpartner->delete();
  
        return redirect()->route('retailpartner.index')
                        ->with('success','RetailPartner deleted successfully');
    }
}
