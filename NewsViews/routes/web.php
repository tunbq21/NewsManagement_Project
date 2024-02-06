<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ViewsController;
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

Route::get('/', function () {
    return view('login');
});

//---------------------------Author------------------------------------------------------------

Route::get('/author', [ViewsController::class, 'index'])->name('author.index');

Route::get('/author/create', [ViewsController::class, 'create'])->name('author.create');

Route::get('/author/{id}/edit', [ViewsController::class, 'edit'])->name('author.edit');

Route::Post('/author/store', [ViewsController::class, 'store'])->name('author.store');

Route::put('/author/{id}}', [ViewsController::class, 'update'])->name('author.update');

Route::delete('/author/{id}}', [ViewsController::class, 'destroy'])->name('author.destroy');

// ----------------------------news------------------------------------------------------------------------

Route::get('/news', [NewsController::class, 'index'])->name('news.index');

Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');

Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');

Route::Post('/news/store', [NewsController::class, 'store'])->name('news.store');

Route::put('/news/{id}}', [NewsController::class, 'update'])->name('news.update');

Route::delete('/news/{id}}', [NewsController::class, 'destroy'])->name('news.destroy');

// ------------------------------Image----------------------------------------------------------------------

Route::get('/image', [ImageController::class, 'index'])->name('image.index');

Route::get('/image/create', [ImageController::class, 'create'])->name('image.create');

Route::get('/image/{id}/edit', [ImageController::class, 'edit'])->name('image.edit');

Route::Post('/image/store', [ImageController::class, 'store'])->name('image.store');

Route::put('/image/{id}}', [ImageController::class, 'update'])->name('image.update');

Route::delete('/image/{id}}', [ImageController::class, 'destroy'])->name('image.destroy');

// ------------------------------------------------------------------------------------------------------------
Route::get('/login', [HomeController::class, 'showLoginForm'])->name('login');
Route::post('/login', [HomeController::class, 'login'])->name('cklogin');

//--------------------------------------------------------------------------------------------------------------



