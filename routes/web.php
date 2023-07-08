<?php

use App\Http\Controllers\CaseStudyController;
use App\Models\Section1;
use App\Models\Section2;
use App\Models\Section3;
use App\Models\Section4;
use App\Models\Section5;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Section1Controller;
use App\Http\Controllers\Section2Controller;
use App\Http\Controllers\Section3Controller;
use App\Http\Controllers\Section4Controller;
use App\Http\Controllers\Section5Controller;

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
    $section2 = Section2::all();
    $section3 = Section3::all();
    $section4 = Section4::all();
    $section5 = Section5::all();
    return view('welcome',['section1' => $section1 , 'section2' => $section2 , 'section3' => $section3 , 'section4' => $section4 , 'section5' => $section5]);
})->name('home');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/casestudy', function () {
    $section3 = Section3::all();
    return view('casestudy',['section3' => $section3]);
})->name('casestudy');

Route::get('/casestudyslug/{slug}', [CaseStudyController::class,'show'])->name('casestudyslug');

// Messages Form
Route::get('/form-success', function () {
    return view('formsuccess');
});
Route::post('/create-form', [FormController::class,'createForm'])->name('createform');

// Form
Route::get('/messages', [FormController::class,'messagesView'])->name('messages');

// section1
Route::get('/admin/section1', [Section1Controller::class,'checkSection1']);
Route::get('/admin/section1/{data}', [Section1Controller::class,'showEditSection1']);
Route::post('/admin/create-section1', [Section1Controller::class,'createSection1']);
Route::put('/admin/edit-section1/{data}', [Section1Controller::class,'editSection1']);

// section 2
Route::get('/admin/section2', [Section2Controller::class,'checkSection2']);
Route::get('/admin/section2/{data}', [Section2Controller::class,'showEditSection2']);
Route::post('/admin/create-section2', [Section2Controller::class,'createSection2']);
Route::put('/admin/edit-section2/{data}', [Section2Controller::class,'editSection2']);

// section 3
Route::get('/admin/section3', [Section3Controller::class,'checkSection3']);
Route::get('/admin/section3/creating', [Section3Controller::class,'creatingSection3']);
Route::get('/admin/section3/{id}', [Section3Controller::class,'showEditSection3']);
Route::post('/admin/create-section3', [Section3Controller::class,'createSection3']);
Route::post('/admin/edit-section3/{data}', [Section3Controller::class,'editSection3']);
Route::get('/admin/section3/delete/{id}', [Section3Controller::class,'deleteSection3']);

// section 4
Route::get('/admin/section4', [Section4Controller::class,'checkSection4']);
Route::get('/admin/section4/{data}', [Section4Controller::class,'showEditSection4']);
Route::post('/admin/create-section4', [Section4Controller::class,'createSection4']);
Route::put('/admin/edit-section4/{data}', [Section4Controller::class,'editSection4']);

// section 5
Route::get('/admin/section5', [Section5Controller::class,'checkSection5']);
Route::get('/admin/section5/creating', [Section5Controller::class,'creatingSection5']);
Route::get('/admin/section5/{id}', [Section5Controller::class,'showEditSection5']);
Route::post('/admin/create-section5', [Section5Controller::class,'createSection5']);
Route::post('/admin/edit-section5/{data}', [Section5Controller::class,'editSection5']);
Route::get('/admin/section5/delete/{id}', [Section5Controller::class,'deleteSection5']);

// User
Route::post('/login', [UserController::class,"login"])->name('login');
Route::get('/logout', [UserController::class,"logout"])->name('logout');
Route::post('/register', [UserController::class,"register"])->name('register');