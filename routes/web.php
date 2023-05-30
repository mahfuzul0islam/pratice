<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/start', function () {
    return view('start');
});


// ========== blog part ===========//
Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/dashbord/blog/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
Route::post('/dashbord/blog/store', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
Route::get('/dashbord/blog/edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit');
Route::post('/dashbord/blog/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.update');
Route::delete('/dashbord/blog/delete/{id}', [App\Http\Controllers\BlogController::class, 'delete'])->name('blog.delete');



// ========== dashbord part ===========//
Route::get('/dashbord', [App\Http\Controllers\DashbordController::class, 'index'])->name('dashbord.index');
Route::get('/dashbord/blog', [App\Http\Controllers\BlogController::class, 'blog'])->name('dashbord.blog');



// ========== Cetegories part ===========//
Route::get('/dashbord/categories/create', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
Route::post('/dashbord/categories/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
Route::delete('/dashbord/categories/delete/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('categories.delete');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');