<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\TypesController;
use Illuminate\Queue\RedisQueue;

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
Route::get('/',function () {
    return redirect('types');
});

Route::get('brands',[BrandsController::class,'index'])->name('brands.index');
Route::get('brands/{id}',[BrandsController::class,'show'])->where('id','[0-9]+')->name('brands.show');
Route::get('brands/{id}/edit',[BrandsController::class,'edit'])->where('id','[0-9]+')->name('brands.edit');

Route::get('types',[TypesController::class,'index'])->name('types.index');
Route::get('types/{id}',[TypesController::class,'show'])->where('id','[0-9]+')->name('types.show');
Route::get('types/{id}/edit',[TypesController::class,'edit'])->where('id','[0-9]+')->name('types.edit');
