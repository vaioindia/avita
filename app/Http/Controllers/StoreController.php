<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    
    public function index()
    {
        {
            $store = Store::latest()->paginate(5);
    
            return view('store.index', compact('store'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
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
                ->with('success', 'store created successfully.');
        }
    }

    
    public function show(Store $store)
    {
        return view('store.show', compact('store'));
    }

    
    public function edit(Store $store)
    {
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
            ->with('success', 'updated successfully');
    }

    
    public function destroy(Store $store)
    {
        $store->delete();

        return redirect()->route('store.index')
            ->with('success', 'deleted successfully');
    }
}
