<?php

namespace App\Http\Controllers;

use App\Imports\RetailPartnerimport;
use App\Exports\RetailPartnerExport;
use App\Models\RetailPartner;
use Illuminate\Http\Request;
use DB;
use Excel;

class RetailPartnerController extends Controller
{
    
    public function index()
    {
        // $retailpartners = RetailPartner::latest()->paginate(5);
        // return view('admin.retailpartner.index',compact('retailpartners'))
        // ->with('i', (request()->input('page', 1) - 1) * 10);

        $retailpartners = RetailPartner::all();
        return view('admin.retailpartner.index',['retailpartners'=>$retailpartners]);              
    }

    
    public function create()
    {
        return view('admin.retailpartner.create');
    }

    public function importform()
    {
        $retailpartners = RetailPartner::latest()->paginate(5);
        return view('admin.retailpartner.index');
    }

    public function export() 
    {
        return Excel::download(new RetailPartnerExport, 'retailpartner.xlsx');
    }

    public function import(Request $request)
    {
        $path = $request->file('select_file')->getRealPath();
        $data = \Excel::import(new RetailPartnerimport,$path);      
        // Excel::import(new RetailPartnerimport, $request ->file);
        return back();
    }
    
    public function store(Request $request)
    {    
            // $request->validate([
            //     'latitude' => 'required',
            //     'longitude' => 'required',
            //     'name' => 'required',
            //     'email' => 'required',
            //     'address' => 'required',
            //     'opening_hour' => 'required',
            //     'closing_hour' => 'required',
            //     'phone' => 'required'
            // ]);
  
            // RetailPartner::create($request->all());
            // return redirect()->route('retailpartner.index')
            //             ->with('success',' created successfully.');

            $retailpartner = new RetailPartner();
            //input method is used to get the value of input with its
            //name specified
            $retailpartner->latitude = $request->input('latitude');
            $retailpartner->longitude = $request->input('longitude');
            $retailpartner->name = $request->input('name');
            $retailpartner->phone = $request->input('phone');
            $retailpartner->email = $request->input('email');
            $retailpartner->address = $request->input('address');
            $retailpartner->opening_hour = $request->input('opening_hour');
            $retailpartner->closing_hour = $request->input('closing_hour');
            $retailpartner->save(); //persist the data
            return redirect()->route('retailpartner.index')->with('info','created successfully');
    }

    
    public function show(RetailPartner $retailpartner)
    {
        
        return view('admin.retailpartner.show', compact('retailpartner'));
    }

    
    public function edit($id)
    {
        // return view('admin.retailpartner.edit', compact('retailpartner'));

        $retailpartner = RetailPartner::find($id);
        return view('admin.retailpartner.edit',compact('retailpartner'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'latitude' => 'required',
        //     'longitude' => 'required',
        //     'name' => 'required',
        //     'email' => 'required',
        //     'address' => 'required',
        //     'opening_hour' => 'required',
        //     'closing_hour' => 'required',
        //     'phone' => 'required'    
        // ]);

        // $retailpartner->update($request->all());
        // return redirect()->route('retailpartner.index')
        //                 ->with('success',' updated successfully');
            $retailpartner = RetailPartner::where('id', $id)->first();
            // $retailpartner = RetailPartner::find($request->input('id'));
            $retailpartner->latitude = $request->input('latitude');
            $retailpartner->longitude = $request->input('longitude');
            $retailpartner->name = $request->input('name');
            $retailpartner->phone = $request->input('phone');
            $retailpartner->email = $request->input('email');
            $retailpartner->address = $request->input('address');
            $retailpartner->opening_hour = $request->input('opening_hour');
            $retailpartner->closing_hour = $request->input('closing_hour');
            $retailpartner->save(); //persist the data
            return redirect()->route('retailpartner.index')->with('info',' Updated successfully');
    }

    
    public function destroy($id)
    {
        // $retailpartner->delete();
        // return redirect()->route('retailpartner.index')
        //                 ->with('success',' deleted successfully');

        //Retrieve the 
        $retailpartner = RetailPartner::find($id);
        //delete
        $retailpartner->delete();
        return redirect()->route('retailpartner.index');
    }
}
