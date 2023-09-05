<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/',function(){
//     return view('frontend.index');
// // });
Route::get('/',[FrontendController::class,'home']);
Route::get('/categories/{slug}',[FrontendController::class,'category'])->name('fe.category');
Route::get('/post/{id}',[FrontendController::class,'post'])->name('fe.post');
Route::post("/comment",[FrontendController::class,'comment'])->name('comment.post');
Route::get("/load-captcha",[FrontendController::class,'loadCaptcha'])->name('captcha');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('category',CategoryController::class)->names('category');
    Route::resource('/admin/post',PostController::class)->names('post');
});

require __DIR__.'/auth.php';
