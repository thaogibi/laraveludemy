<?php
use App\Http\Controllers\HomeController;                    //them vao
use App\Http\Controllers\PostController;                    //them vao
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::view('/welcome', 'welcome');

// Route::get('/contact', function() {
//     return view('contact');
// });

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/welcome', [HomeController::class, 'welcome'])->name('home.welcome');


Route::resource('posts', PostController::class);
