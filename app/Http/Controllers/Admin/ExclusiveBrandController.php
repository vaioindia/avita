<?php

namespace App\Http\Controllers\Admin;

use App\Imports\ExclusiveBrandimport;
use App\Exports\ExclusiveBrandExport;
use App\Models\ExclusiveBrand;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use DB;



class ExclusiveBrandController extends Controller
{


    public function index()
    {
         //   $exclusivebrands = ExclusiveBrand::latest();
          //  return view('admin.exclusivebrand.index', compact('exclusivebrands'));


        //   $exclusivebrands = ExclusiveBrand::all();
        //   return view('admin.exclusivebrand.index', compact('exclusivebrands'));

          $exclusivebrands = ExclusiveBrand::all();
          return view('admin.exclusivebrand.index',['exclusivebrands'=>$exclusivebrands]);

    }

    public function create()
    {
        return view('admin.exclusivebrand.create');
    }



    public function importform()
    {
        $exclusivebrands = ExclusiveBrand::all();
        return view('admin.exclusivebrand.index');
    }

    public function import(Request $request)
    {
        $request->validate([
            'select_file' => 'required',

            ]);
        // $path = $request->file('select_file')->getRealPath();
        // $data = \Excel::import(new ExclusiveBrandimport,$path);
        // Excel::import(new ExclusiveBrandimport, $request ->file);

        $path = $request->file('select_file')->store('temp');
        $path=storage_path('app').'/'.$path;
        $data = \Excel::import(new ExclusiveBrandimport,$path);
        return redirect()->route('exclusivebrand.index')->with('success','created successfully');

        return back();
    }

    public function export()
    {
        return Excel::download(new ExclusiveBrandExport, 'exclusivebrand.');
    }


    public function store(Request $request)
    {
        $request->validate([
                'latitude' => 'required',
                'longitude' => 'required',
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'opening_hour' => 'required',
                'closing_hour' => 'required',
            ]);

        //     ExclusiveBrand::create($request->all());
        //     return redirect()->route('exclusivebrand.index')
        //                 ->with('success',' created successfully.');

        $exclusivebrand = new ExclusiveBrand();
        //input method is used to get the value of input with its
        //name specified
        $exclusivebrand->latitude = $request->input('latitude');
        $exclusivebrand->longitude = $request->input('longitude');
        $exclusivebrand->name = $request->input('name');
        $exclusivebrand->phone = $request->input('phone');
        $exclusivebrand->email = $request->input('email');
        $exclusivebrand->address = $request->input('address');
        $exclusivebrand->opening_hour = $request->input('opening_hour');
        $exclusivebrand->closing_hour = $request->input('closing_hour');
        $exclusivebrand->save(); //persist the data
        return redirect()->route('exclusivebrand.index')->with('success','created successfully');
    }


    public function show(ExclusiveBrand $exclusivebrand)
    {
        return view('admin.exclusivebrand.show', compact('exclusivebrand'));
    }


    public function edit($id)
    {
        // $slug
        // $exclusivebrands = ExclusiveBrand::where('id', $slug)->get()->first();
        // return view('admin.exclusivebrand.edit', compact('exclusivebrands'));
        // $exclusivebrands="";
        // $retailpartner = ExclusiveBrand::find($id);
        $exclusivebrands = ExclusiveBrand::where('id', $id)->get()->first();
        return view('admin.exclusivebrand.edit', compact('exclusivebrands'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'latitude' => 'required',
            'longitude' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'opening_hour' => 'required',
            'closing_hour' => 'required',
        ]);
        // $exclusivebrand->update($request->all());

        // return redirect()->route('exclusivebrand.index')
        //                 ->with('success',' updated successfully');

        $exclusivebrand = ExclusiveBrand::where('id', $id)->first();
        // $exclusivebrand = exclusivebrand::find($request->input('id'));
        $exclusivebrand->latitude = $request->input('latitude');
        $exclusivebrand->longitude = $request->input('longitude');
        $exclusivebrand->name = $request->input('name');
        $exclusivebrand->phone = $request->input('phone');
        $exclusivebrand->email = $request->input('email');
        $exclusivebrand->address = $request->input('address');
        $exclusivebrand->opening_hour = $request->input('opening_hour');
        $exclusivebrand->closing_hour = $request->input('closing_hour');
        $exclusivebrand->save(); //persist the data
        return redirect()->route('exclusivebrand.index')->with('success',' Updated successfully');


    }


    public function destroy($id)
    {
        // $exclusivebrand->delete();
        // return redirect()->route('exclusivebrand.index')
        //                 ->with('success',' deleted successfully');

        //Retrieve the
        $exclusivebrand = ExclusiveBrand::find($id);
        //delete
        $exclusivebrand->delete();
        return redirect()->route('exclusivebrand.index');
    }
}
