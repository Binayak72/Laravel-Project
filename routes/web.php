<?php

use App\Http\Controllers\FormController;
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
    return view('welcome');
});

Route::get('/welcome', function () {
    echo "Hello Binayak";
});

//Route::get('/example/{first}/{second}', function ($first, $second)
//{
//    $mul = $first * $second;
//    return view('example', ['firstval' => $first, 'secondval' => $second]);
//});

//Route::get('/form',function () {
//    return view ("form");
//});

Route::get('/form',[FormController::class, 'index'])->name('get-form');
Route::post('/form',[FormController::class, 'store'])->name('post-form');



//Route::get('/form', [FormController::class, 'create'])->name('get-form');
//Route::post('/sum', [FormController::class, 'sum'])->name('sum-of-numbers');
//
