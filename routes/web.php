<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProuductController;
use App\Models\Article;
use App\Models\Products;
use Illuminate\Support\Facades\Route;

Route::get('/article', function () {
    return "Now, I am using laravel framework and I gonna be very expert in PHP";
});

Route::get('/gone/{id}',function($id){

    return "This is the id of the user $id";
});

Route::get('/more',function(){
    return redirect('/article');
});

// Route::get('/',[ArticleController::class , 'index']);
// Route::get('/articles',[ArticleController::class,'index']);
Route::get('/articles/detail/{id}',[ArticleController::class,'detail']);

Route::get('/output',[ArticleController::class,'index']);

Route::get('/products',[ProuductController::class,'index'])->name('index');
Route::get('/products/details/{id}',[ProuductController::class, 'show'])->name('showDetails');

