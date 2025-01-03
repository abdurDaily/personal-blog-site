<?php

namespace App\Http\Controllers\backend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //INDEX
    public function categoryIndex(){
        $categorys = Category::select('id','category_name')->get();
        return view('backend.category.category', compact('categorys'));
    }

    // STORE 
    public function categoryStore(Request $request){
        $request->validate([
            'category_name' => 'required|unique:categories,category_name',
        ]);

        $soreCategory = new Category();
        $soreCategory->category_name = $request->category_name;
        $soreCategory->category_slug = 'category-' . Str::slug($request->category_name). '-' . time();
        $soreCategory->sub_category = $request->state;
        $soreCategory->save();


        return response()->json([
            "success" => "Category inserted successfully",
            "new_category" => [
                "id" => $soreCategory->id,
                "category_name" => $soreCategory->category_name,
            ]
        ]);
    }
}
