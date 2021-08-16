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

Auth::routes();
/////////////////////////////////////////GET Routes///////////////////////////////////////////////////////////////

//AcountController
Route::get('account',  [App\Http\Controllers\AccountController::class, 'index']);
Route::get('account/a',  [App\Http\Controllers\AccountController::class, 'index']);

//DoctorController
Route::get('/doctors', [App\Http\Controllers\DoctorController::class, 'index']);
Route::get('/doctors/{id}', [App\Http\Controllers\DoctorController::class, 'show']);
Route::get('/doctors/{id}/edit', [App\Http\Controllers\DoctorController::class, 'edit']);
Route::get('/doctors/create', [App\Http\Controllers\DoctorController::class, 'create']);

//DoctorsRegistrationController
Route::get('/doctors-registration', [App\Http\Controllers\DoctorsRegistrationController::class, 'create']);
Route::get('/all-requests', [App\Http\Controllers\DoctorsRegistrationController::class, 'show']);

//EmailController


//HomeController
Route::get('/home', [App\Http\Controllers\HomeController::class]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ManagerCoontroller
Route::get('/manage-doctors', [App\Http\Controllers\ManagerController::class, 'doctors']);
Route::get('/manage', [App\Http\Controllers\ManagerController::class, 'index']);

//PrescryptinsController


//SpecializationController


//UserController
Route::get('/user-data', [App\Http\Controllers\UserController::class, 'index']);

//VisitsController
Route::get('/visits/create', [App\Http\Controllers\VisitsController::class, 'create']);
Route::get('/visits', [App\Http\Controllers\VisitsController::class, 'index']);



/////////////////////////////////////////POST Routes///////////////////////////////////////////////////////////////

//DoctorController
Route::post('/doctors/{id}/update', [App\Http\Controllers\DoctorController::class, 'update']);
Route::post('/doctors/{id}/delete', [App\Http\Controllers\DoctorController::class, 'delete']);
Route::post('/doctors', 'App\Http\Controllers\DoctorController@store');

//DoctorsRegistrationController
Route::post('/add-registration-request', [App\Http\Controllers\DoctorsRegistrationController::class, 'store']);

//EmailController
Route::post('/request-email', [App\Http\Controllers\EmailController::class, 'doctorsRequest']);

//HomeController


//ManagerCoontroller


//PrescryptinsController


//SpecializationController


//UserController


//VisitsController

