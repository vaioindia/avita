<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    
    public function index()
    {
        {   
            $stores = Store::latest()->paginate(5);
  
        return view('store.index',compact('stores'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
        }

        
    }

    
    public function create()
    {
        return view('store.create');
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
  
        Store::create($request->all());
   
        return redirect()->route('store.index')
                        ->with('success','Store created successfully.');
        }
        

    }

    
    public function show(Store $store)
    {
        //$stores = Store::find($id);
        return view('store.show', compact('stores'));
    }

    
    public function edit(Store $store)
    {
        // $stores = Store::find($id);
        return view('store.edit', compact('store'));
    }

    public function update(Request $request, Store $store)
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
        $store->update($request->all());
  
        return redirect()->route('store.index')
                        ->with('success','Store updated successfully');

        
    }

    
    public function destroy(Store $store)
    {
        //$id = $request->input('id');

        // $stores = Store::find($id);
        // $stores->delete();



            $store->delete();
  
        return redirect()->route('store.index')
                        ->with('success','Store deleted successfully');
    }
}
