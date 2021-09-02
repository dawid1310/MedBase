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


//DiseaseController
Route::get('/disease', [App\Http\Controllers\DiseaseController::class, 'index']);
Route::get('/disease/{id}', [App\Http\Controllers\DiseaseController::class, 'show']);

//DoctorController
Route::get('/doctors', [App\Http\Controllers\DoctorController::class, 'index']);
Route::get('/doctors/history', [App\Http\Controllers\DoctorController::class, 'history']);
Route::get('/doctors/{id}', [App\Http\Controllers\DoctorController::class, 'show']);
Route::get('/doctors/{id}/edit', [App\Http\Controllers\DoctorController::class, 'edit']);
Route::get('/doctors/create', [App\Http\Controllers\DoctorController::class, 'create']);
Route::get('/search', [App\Http\Controllers\DoctorController::class, 'search']);

//DoctorsRegistrationController
Route::get('/doctors/registration', [App\Http\Controllers\DoctorsRegistrationController::class, 'create']);
Route::get('/all-requests', [App\Http\Controllers\DoctorsRegistrationController::class, 'show']);


//EmailController


//HomeController
Route::get('/test', [App\Http\Controllers\HomeController::class, 'test']);
Route::get('/home', [App\Http\Controllers\HomeController::class]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about']);

//ManagerCoontroller
Route::get('/manage/doctors', [App\Http\Controllers\ManagerController::class, 'doctors']);
Route::get('/manage', [App\Http\Controllers\ManagerController::class, 'index']);

//PrescriptionController

//ScheduleController
Route::get('/schedule', [App\Http\Controllers\ScheduleController::class, 'index']);
Route::get('/schedule/create', [App\Http\Controllers\ScheduleController::class, 'create']);

//SpecializationController


//TreatmentController
Route::get('/treatment', [App\Http\Controllers\TreatmentController::class, 'menu']);
Route::get('/treatment/create', [App\Http\Controllers\TreatmentController::class, 'create']);
Route::get('/treatment/doctor/{id}', [App\Http\Controllers\TreatmentController::class, 'index']);
Route::get('/treatment/{id}', [App\Http\Controllers\TreatmentController::class, 'show']);

//UserController
Route::get('account/{id}',  [App\Http\Controllers\UserController::class, 'edit']);
Route::get('/user/data', [App\Http\Controllers\UserController::class, 'edit']);
Route::get('/changepassword', [App\Http\Controllers\UserController::class, 'changePassword']);


//VisitsController
Route::get('/visits', [App\Http\Controllers\VisitsController::class, 'index']);
Route::get('/visits/create', [App\Http\Controllers\VisitsController::class, 'create']);
Route::get('/visits/show', [App\Http\Controllers\VisitsController::class, 'show']);
Route::get('/visits/menu', [App\Http\Controllers\VisitsController::class, 'showMenu']);
Route::get('/visits/prescryptions', [App\Http\Controllers\VisitsController::class, 'indexRz']);
Route::get('/visits/sick_leaves', [App\Http\Controllers\VisitsController::class, 'indexRz']);
Route::get('/visits/{id}/show', [App\Http\Controllers\VisitsController::class, 'show']);





/////////////////////////////////////////POST Routes///////////////////////////////////////////////////////////////

//DoctorController
Route::post('/doctors/{id}/update', [App\Http\Controllers\DoctorController::class, 'update']);
Route::post('/doctors/{id}/delete', [App\Http\Controllers\DoctorController::class, 'delete']);
Route::post('/doctors', 'App\Http\Controllers\DoctorController@store');

//DoctorsRegistrationController
Route::post('/add-registration-request', [App\Http\Controllers\DoctorsRegistrationController::class, 'store']);

//EmailController
Route::post('/request/email', [App\Http\Controllers\EmailController::class, 'doctorsRequest']);

//FileController
Route::post('/file/store', [App\Http\Controllers\FileController::class, 'store']);

//HomeController


//ManagerCoontroller


//PrescriptionController
Route::post('/prescription/store/{id}', [App\Http\Controllers\PrescriptionController::class, 'store']);

//ScheduleController
Route::post('/storeSchedule', [App\Http\Controllers\ScheduleController::class, 'store']);

//SickLeaveController
Route::post('/sickLeave/store/{id}', [App\Http\Controllers\SickLeaveController::class, 'store']);

//SpecializationController


//TreatmentController
Route::post('/treatment/store', [App\Http\Controllers\TreatmentController::class, 'store']);

//UserController
Route::post('/updateUser', [App\Http\Controllers\UserController::class, 'update']);
Route::post('/updatePassword', [App\Http\Controllers\UserController::class, 'updatePassword']);

//VisitsController
Route::post('/visit/store', [App\Http\Controllers\VisitsController::class, 'store']);
Route::post('/visit/create', [App\Http\Controllers\VisitsController::class, 'create']);

