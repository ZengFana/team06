<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\TypesController;
use Illuminate\Queue\RedisQueue;
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
Route::middleware(['auth'])->group(function (){
    Route::get('/',function () {
    return redirect('types');
});

Route::get('brands',[BrandsController::class,'index'])->name('brands.index');
Route::get('brands/yeyear',[BrandsController::class,'yeyear'])->name('brands.yeyear');
Route::get('brands/yearold',[BrandsController::class,'yearold'])->name('brands.yearold');
Route::get('brands/{id}',[BrandsController::class,'show'])->where('id','[0-9]+')->name('brands.show');
Route::get('brands/{id}/edit',[BrandsController::class,'edit'])->where('id','[0-9]+')->name('brands.edit');
Route::delete('brands/delete/{id}',[BrandsController::class,'destroy'])->where('id','[0-9]+')->name('brands.destroy')->middleware('can:admin');
Route::get('brands/create',[BrandsController::class,'create'])->name('brands.create')->middleware('can:admin');
Route::patch('brands/update/{id}',[BrandsController::class,'update'])->where('id','[0-9]+')->name('brands.update');
Route::post('brands/store', [BrandsController::class, 'store'])->where('id', '[0-9]+')->name('brands.store')->middleware('can:admin');



Route::get('types',[TypesController::class,'index'])->name('types.index');
Route::get('types/cpvolume',[TypesController::class,'cpvolume'])->name('types.cpvolume');
Route::get('types/origin',[TypesController::class,'origin'])->name('types.origin');
Route::get('types/{id}',[TypesController::class,'show'])->where('id','[0-9]+')->name('types.show');
Route::get('types/{id}/edit',[TypesController::class,'edit'])->where('id','[0-9]+')->name('types.edit');
Route::delete('types/delete/{id}',[TypesController::class,'destroy'])->where('id','[0-9]+')->name('types.destroy')->middleware('can:admin');
Route::get('types/create',[TypesController::class,'create'])->name('types.create')->middleware('can:admin');
Route::patch('types/update/{id}',[TypesController::class,'update'])->where('id','[0-9]+')->name('types.update');
Route::post('types/store', [TypesController::class, 'store'])->where('id', '[0-9]+')->name('types.store')->middleware('can:admin');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
