<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\store_school_data;
use App\Http\Controllers\loginController;
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

// Route::get('/', function () {
//      return view('login');
//  });

 //Route::post('logindata',[loginController::class,'logn']);
//
Route::view('/', 'layouts/Dashboard');
Route::view('admin/dashboard', 'layouts/Dashboard')->name('dashboard');
Route::view('admin/project-work', 'layouts/ProjectWork')->name('project-work');
Route::view('admin/new-ideas', 'layouts/NewIdeas')->name('new-ideas');
Route::view('admin/team-task', 'layouts/TeamTask')->name('team-task');
Route::view('admin/vistior-activity', 'layouts/VistiorActivity')->name('vistior-activity');
Route::view('admin/school-complain', 'layouts/SchoolComplain')->name('school-complain');
Route::view('admin/meetings-record', 'layouts/MeetingsRecord')->name('meetings-record');
Route::view('admin/expenses', 'layouts/Expenses')->name('expenses');
Route::view('admin/income', 'layouts/Income')->name('income');
Route::view('admin/schools-survey', 'layouts/SchoolsSurvey')->name('schools-survey');
Route::view('admin/software-survey', 'layouts/SoftwareSurvey')->name('software-survey');
Route::get('admin/Add-School',[SchoolDetailsController::class,'index'] )->name('Add-School');
Route::get('/admin/get-school', 'App/Http/Controllers/SchoolDetailsController@index');

Route::post('/admin/school-name', 'App\Http\Controllers\store_school_data@SchoolData');
Route::get('/admin/school-get', 'App\Http\Controllers\store_school_data@SchoolGet');
Route::post('/admin/school-delete', 'App\Http\Controllers\store_school_data@SchoolDelete');
Route::put('/admin/school-update/{id}', [SchoolDetailsController::class ,'update'])->name('school_update');
Route::delete('/admin/school-delete/{id}', [SchoolDetailsController::class ,'destroy'])->name('school_delete');






