<?php

use app\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\App\Http\controllers\MenuController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [LoginContorller::class, 'showFormLogin'])->middleware('guest')->name('login');
Route::post('/',[LoginController::class, 'authenticate']);
Route::get('dashboard', [LoginController::class, 'dashboard'])->middleware('auth');
Route::get('signout', [LoginController::class, 'signOut'])->name('signout');
Route::resource('customer', CustomerController::class);
Route::resource('menu', MenuController::class);

    return view('welcome');
;
Route::prefix('customer')->group(function () {
	Route::get('/index', [CustomerController::class, 'index']);
	Route::get('/create', [CustomerController::class, 'create']);
	Route::post('/store', [CustomerController::class, 'store']);
	Route::get('/edit/{id}', [CustomerController::class, 'edit']);
	Route::post('/update/{id}', [CustomerController::class, 'update']);
	Route::get('/destroy/{id}', [CustomerController::class, 'destroy']);
	});

Route::prefix('order')->group(function) {
	Route::get('/index', [OrderController::class, 'index']);
	Route::get('/create', [OrderController::class, 'create']);
	Route::post('/store', [OrderController::class, 'store']);
	Route::get('/show{order}', [OrderController::class, 'show']);
	Route::get('/edit/{order}', [OrderController::class 'edit']);
	Route::post('/update/{order}', [OrderController::class, 'update']);
	Route::get('/destroy/{order}', [OrderController::class, 'destroy']);
	});
});

Route::middleware('role:admin')->group(function () {
	Route::prefix('menu')->group(function () {
		Route::get('/index', [MenuController::class, 'index']);
		Route::get('/create') [MenuController::class, 'create']);
		Route::post('/store') [MenuController::class, 'store']);
		Route::get('/edit/{id}', [MenuController::class, 'edit']);
		Route::post('/update/{id}, [MenuController::class, 'update']);
		Route::get('/destroy/{id}', [MenuController::class, 'destroy']);
	})
})
