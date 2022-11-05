<?php
use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\DepartmentControllers;
use App\Http\Controllers\PatientControllers;
use App\Http\Controllers\PhysicianControllers;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\LoginControllers;
use App\Http\Controllers\DateControllers;
use App\Http\Controllers\TimeControllers;
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

Route::get('/admin', function () {
    return view('welcome');
});
Route::get('/', [HomeControllers::class, 'index']);


Route::get('/dashboard', [AdminControllers::class, 'index']);
Route::get('/admin/login', [AdminControllers::class, 'auth_login']);
Route::post('/login-admin', [AdminControllers::class, 'login_dashboard']);
Route::get('/logout_dashboard', [AdminControllers::class, 'logout_dashboard']);

Route::get('/logout', [HomeControllers::class, 'logout']);
Route::get('/add-doctor-ajax', [HomeControllers::class, 'handle_add_doctor']);
Route::post('/save-appointment', [HomeControllers::class, 'make_appointment']);

Route::get('/login', [LoginControllers::class, 'index']);
Route::post('/register-user', [LoginControllers::class, 'register_user']);
Route::post('/login-user', [LoginControllers::class, 'login']);

Route::resource('/admin/department',DepartmentControllers::class);
Route::resource('/admin/patient',PatientControllers::class);
Route::resource('/admin/physician',PhysicianControllers::class);

Route::resource('/admin/time',TimeControllers::class);