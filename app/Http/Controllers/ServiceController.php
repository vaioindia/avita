<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    
    public function index()
    {
        {   
            $services = Service::latest()->paginate(5);
  
        return view('admin.service_center.index',compact('services'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
        }

        
    }

    
    public function create()
    {
        return view('admin.service_center.create');
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
  
            Service::create($request->all());
   
        return redirect()->route('service_center.index')
                        ->with('success',' created successfully.');
        }
        

    }
    
    public function edit(Service $service)
    {
       
        return view('admin.service_center.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
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
        $service->update($request->all());
  
        return redirect()->route('service_center.index')
                        ->with('success',' updated successfully');

        
    }

    
    public function destroy(Service $service)
    {
      
            $service->delete();
  
        return redirect()->route('service_center.index')
                        ->with('success',' deleted successfully');
    }
}
