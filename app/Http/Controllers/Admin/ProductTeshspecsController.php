<?php

namespace App\Http\Controllers\Admin;
use App\Models\ProductTechspecs;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductTeshspecsController extends Controller
{
    public function index()
    {
        $categorys = DB::table("category")->pluck("type","id")->all();
        $values = ProductTechspecs::all();
        return view("admin.techspecs.index",['values'=>$values],compact('categorys'));
    }

    public function create()
    {
        $categorys = DB::table("category")->pluck("type","id")->all();
        // $categorys = Category::where('category_id',0)->get();
        return view('admin.techspecs.create',compact('categorys'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'addmore.*.spec' => 'required',
            'addmore.*.value' => 'required',
        ]);

        foreach ($request->addmore as $key => $value) {
            ProductTechspecs::create($value);
        }

        return redirect()->route('techspecs.index')->with('success', 'Record Created Successfully.');
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
        $values = ProductTechspecs::where('id', $id)->get()->first();
        return view('admin.techspecs.edit', compact('values'));
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

        $request->validate([
            'addmore.*.spec' => 'required',
            'addmore.*.value' => 'required',
        ]);
        foreach ($request->addmore as $key => $value) {
            // ProductTechspecs::update($value);
            ProductTechspecs::whereId($id)->update($value);
        }
        return redirect()->route('techspecs.index')->with('success',' Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $value = ProductTechspecs::find($id);
        //delete
        $value->delete();
        return redirect()->route('techspecs.index')->with('success', 'Record Delete Successfully.');
    }
}
