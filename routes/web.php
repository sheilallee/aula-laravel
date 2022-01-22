<?php

/*
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
*/

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

/*
Route::get('/', [HomePageController::class,"index"])->name('home');

Route::get('/about', [HomePageController::class,"about"])->name('about');
Route::get('/posts', [App\Http\Controllers\PostController::class,"index"])->name('posts');
Route::get('/contact', [ContactController::class,"index"])->name('contact');
Route::post('/contact', [ContactController::class,"send"])->name('contact.send');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
    
    
    Route::get('/post/list', [PostController::class,"list"])->name('post.list');
    Route::get('/post', [PostController::class,"create"])->name('post.create');
    Route::post('/post', [PostController::class,"store"])->name('post.store');
    Route::get('/post/{post}', [PostController::class,"edit"])->name('post.edit');
    Route::put("/post/{post}", [PostController::class,"update"])->name('post.update');
    Route::delete('/post/{post}', [PostController::class,"destroy"])->name('post.destroy');

});

*/




use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PostController;
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

/* Tirar essa rota:
Route::get('/', function () {
    return view('welcome');
});
*/

//Nova rota para o "/", que é o endereço padrão - pág. principal
//home é o nome da rota




Route::get('/', [HomePageController::class,"index"])->name('home');

Route::get('/about', [HomePageController::class,"about"])->name('about');
Route::get('/posts', [PostController::class,"index"])->name('posts');
Route::get('/contact', [ContactController::class,"index"])->name('contact');
Route::post('/contact', [ContactController::class,"send"])->name('contact.send');

