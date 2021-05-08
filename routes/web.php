<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AgamaController;
use App\Http\Controllers\admin\VaksinController as AdminVaksinController;
use App\Http\Controllers\PasienC;
use App\Http\Controllers\publics\PublicController;
use App\Http\Controllers\StatusPasienController;
use App\Http\Controllers\VaksinController;

// pw db server = qF]~QbWKk1A)lWS0
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

// Route::get('/', function () {
//     return view('welcome');
// });

// front end halaman utama
Route::get('/', 					[PublicController::class, 'index']);
Route::get('/data_allregion', 		[PublicController::class, 'allReg']);
Route::get('/data_indonesia', 		[PublicController::class, 'indonesia']);
Route::get('/data_provinsi', 		[PublicController::class, 'provinsi']);
Route::get('/data_depok', 			[PublicController::class, 'getDataDepok']);
Route::get('/apiDepok', 			[PublicController::class, 'getDepok']);

// vaksin
Route::get('/daftarvaksin', 		[VaksinController::class, 'index'])->name('vaksin');
Route::post('/daftarvaksin/send', 	[VaksinController::class, 'submit']);

Route::group(['prefix' => $adminUrl], function() {

	// ==== AUTH System ==== \\
	Route::get('/', 						[AuthController::class, 'formLogin'])->name('login');
	Route::get('/login', 					[AuthController::class, 'formLogin'])->name('login');
	Route::get('/register',					[AuthController::class, 'formRegister'])->name('register');
	Route::post('/login', 					[AuthController::class, 'login']);
	Route::post('/register', 				[AuthController::class, 'register']);

	Route::group(['middleware' => 'auth'], function() {
		Route::get('/admin', 				[AdminController::class, 'index'])->name('home');

		// === CRUD Pasien === \\
		Route::resource('pasien', 			PasienC::class);
		Route::resource('vaksin', 			AdminVaksinController::class);
		ROute::resource('status-pasien',	StatusPasienController::class);
		Route::get('/agama', 				[AgamaController::class, 'index']);


		Route::get('/logout', 			[AuthController::class, 'logout'])->name('logout');
	});
});