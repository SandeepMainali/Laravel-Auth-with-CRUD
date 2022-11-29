<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoListControllerController;
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





Route::get('dashboard',[HomeController::class,'dashboard'])->name('dashboard')->middleware(['auth']);




Route::get('/login',[HomeController::class,'login'])->name('login');

Route::get('/register',[HomeController::class,'registeruser'])->name('register');


Route::post('/register',[UserController::class,'register'])->name('register');

Route::post('/login',[UserController::class,'login'])->name('login');


Route::get('/logout',[UserController::class,'logout'])->name('logout');





Route::get('/', 'App\Http\controllers\TodoListControllerController@index')->name('todolist')->middleware(['auth']);

Route::post('/addtodo', 'App\Http\controllers\TodoListControllerController@store')->name('addtodo');


Route::get('/markcomplete/{id}', 'App\Http\controllers\TodoListControllerController@markcomplete')->name('markcomplete');

Route::delete('/delete/{id}', 'App\Http\controllers\TodoListControllerController@delete')->name('delete');

Route::get('/edit/{id}', 'App\Http\controllers\TodoListControllerController@edit')->name('edit');


Route::post('/edit','App\Http\controllers\TodoListControllerController@updateTodo')->name('updateTodo');












