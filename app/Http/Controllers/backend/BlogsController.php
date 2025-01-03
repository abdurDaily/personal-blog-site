<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogsController extends Controller
{
    // INDEX
    public function blogIndex()
    {
        $categories = Category::select('id', 'category_name')->get();
        return view('backend.Blogs.blogIndex', compact('categories'));
    }


    //STORE BLOG'S
    public function storeBlog(Request $request)
    {

        $request->validate([
            'blog_title' => 'required',
            'blog_category' => 'required|array',
            'blog_details' => 'required',
            'blog_preview_image' => 'nullable|mimes:png,jpg,webp,jpeg', // Make it nullable
        ]);


        $storeBlog = new Blog();
        $storeBlog->blog_title = $request->blog_title;
        $storeBlog->blog_slug = 'blog-' . Str::slug($request->blog_title) . '-' . time();
        $storeBlog->blog_category = json_encode($request->blog_category);
        $storeBlog->blog_details = $request->blog_details;


        if ($request->hasFile('blog_preview_image')) {
            $blog_preview_image = $request->blog_preview_image->extension();
            $blog_preview_image_name = 'blog-' . time() . '.' . $blog_preview_image;
            $store_image = $request->blog_preview_image->storeAs("blog", $blog_preview_image_name, 'public');
            $path_image = env('APP_URL') . 'storage/' . $store_image;
            $storeBlog->blog_preview_image = $path_image;
        }

        $storeBlog->save();
        return response()->json($request->all());
    }


    // BLOG lIST 
    public function blogList()
    {

        $blogs = Blog::latest()->paginate(5);


        return view('backend.Blogs.allBlogs', compact('blogs'));
    }


    // BLOG EDIT 
    public function blogEdit($blog_slug)
    {
        // Retrieve the blog post
        $blog = Blog::where('blog_slug', $blog_slug)->first();
    
        // Decode the blog_category JSON string into an array
        $selectedCategoryIds = json_decode($blog->blog_category, true); // true for associative array
    
        // Fetch categories that match the selected IDs
        $selectedCategories = Category::whereIn('id', $selectedCategoryIds)->get();

        // dd($selectedCategories);
    
        // Fetch all categories for the dropdown
        $categories = Category::get();
    
        // Pass the blog, selected categories, and all categories to the view
        return view('backend.Blogs.editBlog', compact('blog', 'categories', 'selectedCategories'));
    }


    //BLOG UPDATE
    public function blogUpdate(Request $request, $blog_slug){
        $blog = Blog::where('blog_slug', $blog_slug)->first();
        $blog->blog_title = $request->blog_title;
        $blog->blog_slug = 'blog-' . Str::slug($request->blog_title) . '-' . time();
        $blog->blog_category = json_encode($request->blog_category);
        $blog->blog_details = $request->blog_details;

        
    if ($request->hasFile('blog_preview_image')) {
        $blog_preview_image = $request->blog_preview_image->extension();
        $blog_preview_image_name = 'blog-' . time() . '.' . $blog_preview_image;
        $store_image = $request->blog_preview_image->storeAs("blog", $blog_preview_image_name, 'public');
        $path_image = env('APP_URL') . 'storage/' . $store_image;
        $blog->blog_preview_image = $path_image;
    }
        $blog->save();
        return response()->json($request->all());
    }


    // DELETE 
    public function blogDelete(Request $request){
        Blog::where('id', $request->id)->delete();
    }


    
    // STATUS 
    public function status(Request $request) {
        $blog = Blog::find($request->statusFind);
        $blog->status = !$blog->status;
        $blog->save();
        return response()->json([ 'data' => $blog ]);
    }
    
}
