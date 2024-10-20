<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\blogs;  
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class blogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = blogs::all();
        
        return view('Admin.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.blogs.create');
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
            'blogstitle' => 'required|max:255',
            'blogsContent' => 'required',
            'blogsimage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('blogsimage')) {
            $image = $request->file('blogsimage');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/blogs', $imageName);
        }

        // Store blog data
        Blogs::create([
            'blogstitle' => $request->blogstitle,
            'blogsContent' => $request->blogsContent,
            'blogsimage' => $imageName ?? null,
        ]);

        // Redirect back with success message
        return redirect()->route('Admin.blogs.index')->with('success', 'Blog created successfully.');

     }
    
    
    


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function show(Blogs $blog)
    {
        return view('Admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function edit(blogs $blog)
    {
          // Return the edit view
        return view('Admin.blogs.edit', compact('blog'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */

     public function update(Request $request, $id)
     {
         // Validate the incoming request
         $request->validate([
             'blogstitle' => 'required|max:255',
             'blogsContent' => 'required',
             'blogsimage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
         ]);
     
         $blog = Blogs::findOrFail($id);
     
         // Update blog data
         $blog->blogstitle = $request->blogstitle;
         $blog->blogsContent = $request->blogsContent;
     
         // Handle image upload if a new one is provided
         if ($request->hasFile('blogsimage')) {
             // Delete the old image if it exists
             if ($blog->blogsimage) {
                 Storage::delete('public/blogs/' . $blog->blogsimage);
             }
             
             $image = $request->file('blogsimage');
             $imageName = time() . '_' . $image->getClientOriginalName();
             $image->storeAs('public/blogs', $imageName);
             $blog->blogsimage = $imageName; // Update image name
         }
     
         $blog->save(); // Save the changes
     
         return redirect()->route('Admin.blogs.index')->with('success', 'Blog updated successfully.');
     }
     

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $blog = Blogs::find($id);

        if ($blog) {
            $blog->forceDelete();

            // Adjust the redirect URL as needed
            return redirect('blogs')->with('message', 'Product Deleted!');
        } else {
            // Handle the case where the product with the given ID was not found
            return redirect('blogs')->with('message', 'Product not found.');
        }
    }
}

