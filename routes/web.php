<?php

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
   if (auth()->user()){
       return redirect()->route('categories.index');
   } else {
       return redirect()->route('menu');
   }
})->name('home');
\Illuminate\Support\Facades\Auth::routes();


Route::get('/register', function () {
        return redirect()->route('home');
})->name('register');

Route::middleware('admin')->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
       //setting
    Route::get('settings', [\App\Http\Controllers\SettingController::class,'setting'])->name('setting');
    Route::post('settings/save', [\App\Http\Controllers\SettingController::class,'settingsave'])->name('settingsave');
});

Route::post('change-lang', [\App\Http\Controllers\SettingController::class,'changeLang'])->name('changeLang');

Route::get('menu', [\App\Http\Controllers\VisitorController::class, 'menu'])->name('menu');

Route::get('ContactUs', [\App\Http\Controllers\VisitorController::class, 'ContactUs'])->name('ContactUs');
