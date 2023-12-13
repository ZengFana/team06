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
Route::delete('brands/delete/{id}',[BrandsController::class,'destroy'])->where('id','[0-9]+')->name('brands.destroy');
Route::get('brands/create',[BrandsController::class,'create'])->name('brands.create');
Route::patch('brands/update/{id}',[BrandsController::class,'update'])->where('id','[0-9]+')->name('brands.update');
Route::post('brands/store', [BrandsController::class, 'store'])->where('id', '[0-9]+')->name('brands.store');



Route::get('types',[TypesController::class,'index'])->name('types.index');
Route::get('types/{id}',[TypesController::class,'show'])->where('id','[0-9]+')->name('types.show');
Route::get('types/{id}/edit',[TypesController::class,'edit'])->where('id','[0-9]+')->name('types.edit');
Route::delete('types/delete/{id}',[TypesController::class,'destroy'])->where('id','[0-9]+')->name('types.destroy');
Route::get('types/create',[TypesController::class,'create'])->name('types.create');
Route::patch('types/update/{id}',[TypesController::class,'update'])->where('id','[0-9]+')->name('types.update');
Route::post('types/store', [TypesController::class, 'store'])->where('id', '[0-9]+')->name('types.store');
