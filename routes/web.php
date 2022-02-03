<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuitersController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::resource('guiters', GuitersController::class);


Route::get('/store/{category?}/{item?}', function($category = null, $item = null) {
    if (isset($category)) {

        if (isset($item)) {
            return "You are viewing the store for {$category} for {$item}";
        }
            return 'You are viewing the Store for: ' . strip_tags($category);
    }

    return 'You are viewing the Store';
    
});


// Route::get('/store', function() {
//     $category = request('category');

//     if (isset($category)) {
//         return 'You are viewing the Store category for: ' . strip_tags($category);
//     }

//     return 'You are viewing the Store';
    
// });