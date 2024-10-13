<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Front\SecondController;







//use Illuminate\Support\Facades\Route;

// routes/web.php أو routes/api.php

require __DIR__ . '/admin.php';


Route::get('/home', function () {
    return view('welcome');
})->middleware('verified');






// Route::prefix('User')->middleware(['auth'])->group(function () {
   
//     Route::get('show', [UserController::class, 'ShowAdminName'])->withoutMiddleware(['auth']);

//     Route::get('details/{id}', [UserController::class, 'showUserDetails']);

//     Route::post('update/{id}', [UserController::class, 'updateUserDetails']);

//     Route::delete('delete/{id}', [UserController::class, 'deleteUser']);

//     Route::get('list', [UserController::class, 'listUsers'])->withoutMiddleware(['auth']);

//     Route::post('create', [UserController::class, 'createUser'])->withoutMiddleware(['auth']);
//     Route::get('/user', [UserController::class, 'getindex'])->withoutMiddleware(['auth']);
// });



    //////////////////////////////////////////////

// Route::prefix('second')->group(function (){

//     Route::get('Edit', [SecondController::class,'edit']);

//     Route::get('update', [SecondController::class,'update']);

//     Route::get('delete/{id}', [SecondController::class,'delete']);

//     Route::get('create', [SecondController::class,'create']);

// });

///////////////////////////



//Route::resource('news',NewsController::class);



Auth::routes(['verify'=>true]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
