<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Skill;
use Illuminate\Http\Request;

class frontendController extends Controller
{

   // SKILL
   public function viewIndex() {
    $educations = Skill::where('type','education')->get();
    $experiences = Skill::where('type','experience')->get();
    $skills = Skill::where('type','skill')->get();
    $blogs = Blog::where('status',1)->get();
    return view('index', compact('educations', 'experiences', 'skills','blogs'));
   }

   public function blogDetails() {
      return view('frontend.blog.blogDetails');
   }


}
