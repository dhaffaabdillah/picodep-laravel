<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\PasienController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 
testing_laravel.test
*/

$adminUrl = env("ADMIN_URL", "admin");

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => $adminUrl], function() {
	Route::get('/', function() {
		return view('welcome');
	});

	Route::get('/', 					[AuthController::class, 'formLogin'])->name('login');
	Route::get('/login', 				[AuthController::class, 'formLogin'])->name('login');
	Route::get('/register',				[AuthController::class, 'formRegister'])->name('register');
	Route::post('/login', 				[AuthController::class, 'login']);
	Route::post('/register', 			[AuthController::class, 'register']);

	Route::group(['middleware' => 'auth'], function() {
		Route::get('/admin', 			[AdminController::class, 'index'])->name('home');

		// === CRUD Pasien === \\
		Route::get('/pasien', 			[PasienController::class, 'index']);
		Route::get('/pasien/add', 		[PasienController::class, 'add']);
		Route::get('/pasien/edit',		[PasienController::class, 'edit']);
		Route::post('/pasien/submit',	[PasienController::class, 'store']);


		Route::get('/logout', 			[AuthController::class, 'logout'])->name('logout');
	});
});