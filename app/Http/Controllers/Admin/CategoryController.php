<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categorys = Category::latest()->paginate(5);

        return view('admin.category.index',compact('categorys'));
    }

    public function subcategory(Request $request)
    {
        $subcategorys = "";
        $category_id = $request->category_id;
        $categorys = Category::where('id',$category_id)->with('subcategorys')->get();
        return response()->json(['subcategorys' => $subcategorys]);
    }

    public function create()
    {
        return view('admin.category.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',

        ]);

        Category::create($request->all());

        return redirect()->route('category.index')
                        ->with('success',' created successfully.');
    }


    public function show(Category $category)
    {
        return view('category.show',compact('category'));
    }


    public function edit($id)
    {
        $category = Category::where('id', $id)->get()->first();
        return view('admin.category.edit',compact('category'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',

        ]);

        $category = Category::where('id', $id)->first();
        $category->name = $request->input('name');
        $category->type = $request->input('type');
        $category->save(); //persist the data
        return redirect()->route('category.index')->with('success',' updated successfully');
    }


    public function destroy($id)
    {
        //Retrieve the
        $category = Category::find($id);
        //delete
        $category->delete();
        return redirect()->route('category.index')->with('success',' deleted successfully');
    }
}
