<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('Admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::whereNull('parent_id')->get();
        return view('Admin.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'categoryName' => 'required|string|max:255',
            'subcategories.*' => 'nullable|string|max:255', // Allow null for optional subcategories
        ]);
    
        $category = Category::create([
            'categoryName' => $request->categoryName,
        ]);
    
        // Create subcategories if any
        if ($request->subcategories) {
            foreach ($request->subcategories as $subcategoryName) {
                if ($subcategoryName) {
                    $category->subcategories()->create(['categoryName' => $subcategoryName]);
                }
            }
        }
    
        return redirect()->route('category.index')->with('success', 'Category and subcategories created successfully.');
    }
    

    


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vc  $vc
     * @return \Illuminate\Http\Response
     */
    public function show(vc $vc)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vc  $vc
     * @return \Illuminate\Http\Response
     */
    // public function edit(category $category)
    
    // {
    //     return view('Admin.category.edit', compact('category'));
    // }
    public function edit($id)
{
    $category = Category::findOrFail($id);
    $categories = Category::where('id', '!=', $id)->get(); // Exclude the category itself to prevent setting itself as the parent

    return view('Admin.category.edit', compact('category', 'categories'));
}




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vc  $vc
     * @return \Illuminate\Http\Response
     */
   

    public function update(Request $request, $id)
{
    $category = Category::findOrFail($id);

    $validatedData = $request->validate([
        'categoryName' => 'required|string|max:255',
        'parent_id' => 'nullable|exists:categories,id', // Ensure parent category exists
    ]);

    $category->update($validatedData);

    return redirect()->route('category.index')->with('success', 'Category updated successfully.');
}


    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\vc  $vc
    //  * @return \Illuminate\Http\Response
    //  */
  
    public function destroy($id)
    {
        $blog = category::find($id);

        if ($blog) {
            $blog->forceDelete();

            // Adjust the redirect URL as needed
            return redirect('category')->with('message', 'category Deleted!');
        } else {
            // Handle the case where the product with the given ID was not found
            return redirect('category')->with('message', 'category not found.');
        }
    }
}
