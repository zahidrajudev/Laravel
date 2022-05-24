<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfControler;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ResumeCvController;

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
//home
Route::get('/', function () {
    return view('home');
});

//contact
Route::get('/contact', [ContactController::class, 'index'])->middleware('auth')->name('contact');
Route::post('/contact/sent', [ContactController::class, 'store'])->name('contactsent');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Resume
Route::get('/all-data', [ResumeCvController::class, 'show'])->name('alldata');
//generate pdf
Route::get('/resume/generate', [ResumeCvController::class, 'create'])->name('cvgenerate');

//cv data form
Route::get('/resume/data', [ResumeCvController::class, 'userdata'])->middleware('auth')->name('cvdata');

//store user cv input
Route::post('/resume/contactstore', [ResumeCvController::class, 'contactStore'])->name('contactstore');
Route::patch('/resume/educationstore', [ResumeCvController::class, 'educationStore'])->name('educationstore');
Route::patch('/resume/skillstore', [ResumeCvController::class, 'skillStore'])->name('skillstore');
Route::patch('/resume/personalstore', [ResumeCvController::class, 'personalStore'])->name('personalstore');

//edit user data
Route::get('/resume/contactedit', [ResumeCvController::class, 'contactEdit'])->name('contactedit');
Route::get('/resume/educationedit', [ResumeCvController::class, 'educationEdit'])->name('educationedit');
Route::get('/resume/skilledit', [ResumeCvController::class, 'skillEdit'])->name('skilledit');
Route::get('/resume/personaledit', [ResumeCvController::class, 'personalEdit'])->name('personaledit');

//update user data
Route::patch('/resume/contactupdate', [ResumeCvController::class, 'contactUpdate'])->name('contactupdate');
Route::patch('/resume/educationupdate', [ResumeCvController::class, 'educationUpdate'])->name('educationupdate');
Route::patch('/resume/skillupdate', [ResumeCvController::class, 'skillUpdate'])->name('skillupdate');
Route::patch('/resume/personalupdate', [ResumeCvController::class, 'personalUpdate'])->name('personalupdate');


//pdf
Route::get('/pdf/history', [PdfControler::class, 'index'])->middleware('auth')->name('pdfhistory');
Route::get('/pending', [PdfControler::class, 'pending'])->middleware('auth')->name('pending');