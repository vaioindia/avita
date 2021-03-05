<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categorys = Category::latest()->paginate(5);

        return view('categorys.index',compact('categorys'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
    public function create()
    {
        return view('categorys.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            
        ]);
  
        Category::create($request->all());
   
        return redirect()->route('categorys.index')
                        ->with('success',' created successfully.');
    }

   
    public function show(Category $category)
    {
        return view('categorys.show',compact('category'));
    }

   
    public function edit(Category $category)
    {
        return view('categorys.edit',compact('category'));
    }

    
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            
        ]);
  
        $category->update($request->all());
  
        return redirect()->route('categorys.index')
                        ->with('success',' updated successfully');
    }

   
    public function destroy(Category $category)
    {
        $category->delete();
  
        return redirect()->route('categorys.index')
                        ->with('success',' deleted successfully');
    }
}
