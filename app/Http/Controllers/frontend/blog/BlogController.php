<?php

namespace App\Http\Controllers\frontend\blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //INDEX 
    public function blogIndex(){
        $blogs = Blog::where('status',1)->get();
        dd($blogs);
        return view('index',compact('blogs'));
    }
}
