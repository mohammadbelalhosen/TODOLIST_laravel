<?php

use App\Http\Controllers\todolistController;
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

Route::get('/',[todolistController::class,'home'])->name('todolist.home');
Route::post('/alltask',[todolistController::class,'addList'])->name('todolist.addlist');
Route::get('/edit/{id}',[todolistController::class,'edit'])->name('todolist.edit');
Route::put('/update/{id}',[todolistController::class,'update'])->name('todolist.update');
Route::put('/update/{id}',[todolistController::class,'update'])->name('todolist.update');
Route::delete('/delete/{id}',[todolistController::class,'delete'])->name('todolist.delete');
Route::delete('/deleteall',[todolistController::class,'deleteall'])->name('todolist.deleteall');
