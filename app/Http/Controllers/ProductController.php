<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {   

        $products = Product::latest()->paginate(5);

        return view('admin.products.index',compact('products'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
    public function create()
    {
        // $categorys = Category::select("id", "name")->get();
        return view('admin.products.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            
        ]);
  
        Product::create($request->all());
   
        return redirect()->route('products.index')
                        ->with('success',' created successfully.');
    }

    
    public function show(Product $product)
    {
        return view('admin.products.show',compact('products'));
    }

    
    public function edit(Product $product)
    {
        // $categorys = Category::select("id", "name")->get();
        return view('admin.products.edit',compact('product'));
    }

    
    public function update(Request $request, Product $product)
    {
        $request->validate([
            // 'type' => 'required',
            'name' => 'required',
            
        ]);
  
        $product->update($request->all());
  
        return redirect()->route('products.index')
                        ->with('success',' updated successfully');
    }

    
    public function destroy(Product $product)
    {
        $product->delete();
  
        return redirect()->route('products.index')
                        ->with('success',' deleted successfully');
    }
}
