<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //BANNER INDEX
    public function bannerIndex()
    {
        return view('backend.banner.bannerIndex');
    }

    //STORE BANNER DATA 
    public function bannerStore(Request $request)
    {
        $bannerData = new Banner();
        $bannerData->expertise = $request->expertise;
        $bannerData->title = $request->title;
        $bannerData->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->image->extension();
            $image_name = 'blog-' . time() . '.' . $image;
            $store_image = $request->image->storeAs("banner", $image_name, 'public');
            $path_image = env('APP_URL') . 'storage/' . $store_image;
            $bannerData->image = $path_image;
        }

        $bannerData->save();
    }


    // ALL BANNER 
    public function bannerAll()
    {
        $banners = Banner::get();
        return view('backend.banner.allBanner', compact('banners'));
        // return response()->json($request->id);
    }

    // UPDATE STATUS 
    public function bannerStatusUpdate(Request $request)
    {
        try {
            $banner = Banner::find($request->id);
            $banner->status = !$banner->status;
            $banner->save();
            return response()->json(['data' => $banner, 'status' => true]);
        } catch (\Throwable $th) {
            return response()->json(['data' => $th, 'status' => false]);
        }
    }
}
