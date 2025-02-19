<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

Route::get('/', function () {
    return view('welcome');
});


//static routes;

Route::get('/blogs',function(){
    return "This is the web pages";
})->name('blogs');

//dynamic routes;
Route::get('/blogs/{id}', function($id){
    return "This is the web pages with $id";
});

//Route naming ;

Route::get('/dashboard',function(){
    return "This is the dashborad";
})->name('dashboard.ttp');

//redirect Route;

Route::get('/welcome_dashboard',function(){
    return redirect()->route('dashboard.ttp');
});

//Testing Route;

Route::get('/welcome_to_now',function(){
    return redirect()->route('blogs');
});

//group Routes;

Route::prefix('/schools')->group(function(){
    Route::get('students',function(){
        return "This is about students";
    });
    Route::get('/teachers',function(){
        return "This is about teachers";
    })->name('groupteachers');

    Route::get('/listsTeah',function(){
        return redirect()->route('groupteachers');
    });

    

    

});

// Route::get('/categories',function(){
//     return view('categories.category');
// });

Route::get('/lists',[CategoryController::class, 'index']);
