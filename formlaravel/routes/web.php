<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;
use App\Http\Controllers\AuthController;

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
// Register route
Route::match(['get', 'post'], '/', [AuthController::class, 'register'])->name('register');

// Login route
Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');


Route::get('/welcome', function () {
    return view('welcome');
})->name("welcome");

Route::get('/create', function () {
    return view('create');
})->name("todo.create");

Route::get('/edit', function(){
    return view('update');
});

Route::get('/', function () {
    return view('register');
})->name("register");

Route::post('/create', [todoController::class, 'store'])->name('todo.store');
Route::get('/welcome', [TodoController::class, 'index'])->name('welcome');



Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('todo.edit');

Route::post('/update/{id}', [todoController::class, 'updateData'])->name('todo.updateData');

Route::get('/delete/{id}', [TodoController::class, 'delete'])->name('todo.delete');




// Logout route
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Profile route (requires authentication)
Route::middleware('auth')->get('/profile', [AuthController::class, 'profile'])->name('profile');