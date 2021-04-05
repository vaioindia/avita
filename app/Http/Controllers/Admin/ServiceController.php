<?php

namespace App\Http\Controllers\Admin;

use App\Imports\Serviceimport;
use App\Exports\ServiceExport;
use App\Models\Service;
use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Facades\Excel;

class ServiceController extends Controller
{

    public function index()
    {
        // $services = Service::latest()->paginate(5);
        // return view('admin.service_center.index',compact('services'))
        //     ->with('i', (request()->input('page', 1) - 1) * 10);

        $services = Service::all();
        return view('admin.service_center.index',['services'=>$services]);
    }


    public function create()
    {
        return view('admin.service_center.create');
    }

    public function importform()
    {
        $services = Service::all();
        return view('admin.exclusivebrand.index');
    }

    public function export()
    {
        return Excel::download(new ServiceExport, 'service.csv');
    }

    public function import(Request $request)
    {
        $request->validate([
            'select_file' => 'required',

            ]);
        // $path = $request->file('select_file')->getRealPath();
        // $data = \Excel::import(new Serviceimport,$path);
        // Excel::import(new Serviceimport, $request ->file);

        $path = $request->file('select_file')->store('temp');
        $path=storage_path('app').'/'.$path;
        $data = \Excel::import(new Serviceimport,$path);
        return redirect()->route('service_center.index')->with('success','created successfully');

        return back();
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

        //     Service::create($request->all());
        //     return redirect()->route('service_center.index')
        //                 ->with('success',' created successfully.');

        $service = new Service();
        //input method is used to get the value of input with its
        //name specified
        $service->latitude = $request->input('latitude');
        $service->longitude = $request->input('longitude');
        $service->name = $request->input('name');
        $service->phone = $request->input('phone');
        $service->email = $request->input('email');
        $service->address = $request->input('address');
        $service->opening_hour = $request->input('opening_hour');
        $service->closing_hour = $request->input('closing_hour');
        $service->save(); //persist the data
        return redirect()->route('service_center.index')->with('success','created successfully');
    }

    public function edit($id)
    {

        // return view('admin.service_center.edit', compact('service'));

        $service = Service::find($id);
        return view('admin.service_center.edit',compact('service'));
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
        // $service->update($request->all());

        // return redirect()->route('service_center.index')
        //                 ->with('success',' updated successfully');

        $service = Service::where('id', $id)->first();
        // $service = service::find($request->input('id'));
        $service->latitude = $request->input('latitude');
        $service->longitude = $request->input('longitude');
        $service->name = $request->input('name');
        $service->phone = $request->input('phone');
        $service->email = $request->input('email');
        $service->address = $request->input('address');
        $service->opening_hour = $request->input('opening_hour');
        $service->closing_hour = $request->input('closing_hour');
        $service->save(); //persist the data
        return redirect()->route('service_center.index')->with('success',' Updated successfully');
    }


    public function destroy($id)
    {
        // $service->delete();
        // return redirect()->route('service_center.index')
        //                 ->with('success',' deleted successfully');

        //Retrieve the
        $service = Service::find($id);
        //delete
        $service->delete();
        return redirect()->route('service_center.index');
    }
}
