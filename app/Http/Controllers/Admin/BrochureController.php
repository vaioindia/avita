<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\Brochure;
use Illuminate\Http\Request;

class BrochureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $brochures = Brochure::all();
        return view('admin.brochure.index', compact('brochures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brochure.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName ='';
        $reference ='';

        $request->validate([
            'reference'    =>  'required'
        ]);


        $request->validate([

            'reference.*' => 'required|mimes:doc,docx,pdf',
        ]);



        if($request->hasFile('reference')){
            $reference = $request->file('reference')->getClientOriginalName();
            $fileName = $request->reference->move('brochures', $reference);

        }

        $input['reference'] = $reference;


        Brochure::create($input);

        return redirect()->route('brochure.index')->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brochure $brochure)
    {
        $brochure->delete();
        return redirect()->route('brochure.index')
        ->with('success','deleted successfully');
    }
}
