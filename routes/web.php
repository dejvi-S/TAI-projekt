<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('index');
});

Route::get('kontakt', function () {
    return view('kontakt');
});


Route::group(['middleware' => ['auth']], function() {
    Route::get('koszyk',
    [App\Http\Controllers\OrderController::class, 'index']);

    Route::get('zamowienie', function () {
        return view('order');
    });
    Route::post('zamowienie', [App\Http\Controllers\OrderController::class, 'store'])->name('store');
    Route::get('edit/{id}',[App\Http\Controllers\OrderController::class,'edit'])->name('edit');
    Route::post('update/{id}',[App\Http\Controllers\OrderController::class,'update'])->name('update');
    Route::get('delete/{id}',[App\Http\Controllers\OrderController::class,'destroy'])->name('delete');

});


Route::get('oferta', function () {
    return view('oferta');
});
Auth::routes();


Route::post('kontakt', [App\Http\Controllers\ContactsController::class, 'store'])->name('store');
