<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact');
});


//Route::get('/test/{test}', 'App\Http\Controllers\TestController@show');
Route::get('/test/{test}', [TestController::class, 'show']);
Auth::routes();
Route::post('/add-registration-request', [App\Http\Controllers\DoctorsRegistrationController::class, 'store']);
Route::get('/manage-doctors', [App\Http\Controllers\ManagerCoontroller::class, 'doctors']);
Route::get('/doctors-registration', [App\Http\Controllers\DoctorsRegistrationController::class, 'create']);
Route::get('/all-requests', [App\Http\Controllers\DoctorsRegistrationController::class, 'show']);
Route::get('/manage', [App\Http\Controllers\ManagerCoontroller::class, 'show']);
Route::get('/home', [App\Http\Controllers\HomeController::class]);
Route::get('/doctors', [App\Http\Controllers\DoctorController::class, 'index']);
Route::post('/doctors', 'App\Http\Controllers\DoctorController@store');
Route::get('/doctors/{id}', [App\Http\Controllers\DoctorController::class, 'show']);
Route::post('/doctors/{id}/delete', [App\Http\Controllers\DoctorController::class, 'delete']);
Route::get('/doctors/{id}/edit', [App\Http\Controllers\DoctorController::class, 'edit']);
Route::post('/doctors/{id}/update', [App\Http\Controllers\DoctorController::class, 'update']);
Route::get('/doctors/create', [App\Http\Controllers\DoctorController::class, 'create']);
Route::get('/visits/create', [App\Http\Controllers\DoctorController::class, 'create']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
