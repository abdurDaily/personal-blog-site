<?php

use App\Http\Controllers\frontend\frontendController;
use Illuminate\Support\Facades\Route;



Route::get('/', [frontendController::class, 'viewIndex'])->name('viewIndex.index');
Route::get('blog-details/', [frontendController::class, 'blogDetails'])->name('blog.details');
// Route::get('/', [frontendController::class, 'blogIndex'])->name('viewIndex.index');

?>