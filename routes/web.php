<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ManagerController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;


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
    return view('frontend.index');
});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.index');
    })->name('dashboard');
});

Route::get('/redirect', [App\Http\Controllers\LoginController::class, 'Login'])->name('redirect');


// Frontend route

Route::get('/home', [FrontendController::class , 'Index'])->name('home');
Route::get('/about', [FrontendController::class , 'ViewAbout'])->name('about');
Route::get('/branch', [FrontendController::class , 'ViewBranch'])->name('branch');
Route::get('/contact', [FrontendController::class , 'ViewContact'])->name('contact');
Route::get('/features', [FrontendController::class , 'Viewfeatures'])->name('features');
Route::get('/apoiment', [FrontendController::class , 'Viewapoiment'])->name('apoiment');
Route::get('/our_team', [FrontendController::class , 'Viewour_team'])->name('our_team');




// admin route

Route::get('/admin/logout',[AuthenticatedSessionController::class,'destroy'])->name('admin.logout');
Route::post('/store/appointment',[AppointmentController::class,'StoreAppointment'])->name('store-appointment');
Route::get('/view/appointment',[AppointmentController::class,'ViewAppointment'])->name('view.appointment');
Route::get('/delete/{id}',[AppointmentController::class,'AppointmentDelete'])->name('appointment.delete');
Route::get('/check/appointment{id}',[AppointmentController::class,'CheckAppointment'])->name('check.appointment');

Route::POST('/sendmail',[AppointmentController::class,'SendMail'])->name('send.mail');



Route::get('/view',[ManagerController::class,'View'])->name('view.manager');
Route::get('/add/manager',[ManagerController::class,'AddManager'])->name('add.manager');
Route::post('/store',[ManagerController::class,'Store'])->name('store.managers');

Route::get('/edit/manager{id}',[ManagerController::class,'EditManager'])->name('edit.managers');
Route::get('/delete/{id}',[ManagerController::class,'DeleteManager'])->name('delete.managers');
Route::post('/update',[ManagerController::class,'UpdateManager'])->name('update.managers');





