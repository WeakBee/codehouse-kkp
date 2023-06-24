<?php

use App\Models\Section1;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Section1Controller;
use App\Http\Controllers\Section2Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $section1 = Section1::all();
    return view('welcome',['section1' => $section1]);
});

Route::get('/admin', function () {
    return view('admin');
});

// Messages Form
Route::get('/form-success', function () {
    return view('formsuccess');
});
Route::post('/create-form', [FormController::class,'createForm']);

// Form
Route::get('/messages', [FormController::class,'messagesView']);

// section1
Route::get('/admin/section1', [Section1Controller::class,'checkSection1']);
Route::get('/admin/section1/{data}', [Section1Controller::class,'showEditSection1']);
Route::post('/admin/create-section1', [Section1Controller::class,'createSection1']);
Route::put('/admin/edit-section1/{data}', [Section1Controller::class,'editSection1']);

// section 2
// section1
Route::get('/admin/section2', [Section2Controller::class,'checkSection2']);
Route::get('/admin/section2/{data}', [Section2Controller::class,'showEditSection2']);
Route::post('/admin/create-section2', [Section2Controller::class,'createSection2']);
Route::put('/admin/edit-section2/{data}', [Section2Controller::class,'editSection2']);

// User
Route::post('/login', [UserController::class,"login"]);
Route::get('/logout', [UserController::class,"logout"]);
Route::post('/register', [UserController::class,"register"]);