<?php

use App\Http\Controllers\AddcustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CustomerlistController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ServiceController;
use Carbon\Laravel\ServiceProvider;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix'=>'admins'], function(){

    Route::group(['middleware'=>'auth'], function(){
        Route::get('/home', [HomeController::class, 'index']);





        //Dashboard:
        Route::get('/dashboard', [DashboardController::class, 'showdashboard'])->name('admin.dashboard');
        
        
        
        //Services:
        Route::get('/addservices', [ServiceController::class, 'addservices'])->name('addservices');
        Route::post('/storeservices', [ServiceController::class, 'storeservices'])->name('storeservices');
        Route::get('/manageservices', [ServiceController::class, 'manageservices'])->name('manageservices');
        Route::get('/edit.service/{id}', [ServiceController::class, 'edit'])->name('edit.service');
        Route::post('/update.service/{id}', [ServiceController::class, 'update'])->name('update.service');
        Route::get('/delete/{id}', [ServiceController::class, 'destroy'])->name('delete.service');
        
        
        
        
      
        
        
        
        //Appointment:
        Route::get('/allappointment', [AppointmentController::class, 'allappointment'])->name('allappointment');
        Route::get('/view.appointment/{id}', [AppointmentController::class, 'view'])->name('view.appointment');
        //UPDATE APPOINTMENT: 
        Route::post('/update/appointment{id}', [AppointmentController::class, 'updateAppointment'])->name('update.appointment');
        Route::get('/newappointment', [AppointmentController::class, 'newappointment'])->name('newappointment');
        Route::get('/newaptview/{id}', [AppointmentController::class, 'newview'])->name('newappointment.view');
        Route::get('/acceptedappointment', [AppointmentController::class, 'acceptedappointment'])->name('acceptedappointment');
        Route::get('/rejectedappointment', [AppointmentController::class, 'rejectedappointment'])->name('rejectedappointment');
  
        
        
        
        
        
        
        //Reports:
        Route::get('/bw', [ReportController::class, 'bw'])->name('bw');
        Route::get('/salesreports', [ReportController::class, 'salesreports'])->name('salesreports');
        
        
        
        
        
        //AddCustomer:
        Route::get('/addcustomer', [AddcustomerController::class, 'addcustomer'])->name('addcustomer');
        Route::post('/storecustomer', [AddcustomerController::class, 'storecustomer'])->name('storecustomer');
        
        
        
        //Customerlist:
        Route::get('/customerlist', [CustomerlistController::class, 'customerlist'])->name('customerlist');
        Route::get('/edit.customerlist/{id}', [CustomerlistController::class, 'edit'])->name('edit.customerlist');
        Route::post('/update.customerlist/{id}', [CustomerlistController::class, 'update'])->name('update.customerlist');
        Route::get('/assign.services{id}', [CustomerlistController::class, 'assign'])->name('assign.services');
        Route::post('/create/invoice', [CustomerlistController::class, 'createInvoice'])->name('create.invoice');
        
        
        
        
        //Invoices:
        Route::get('/invoicelist', [InvoiceController::class, 'invoicelist'])->name('invoicelist');
        Route::get('/view.invoice/{id}', [InvoiceController::class, 'view'])->name('view.invoice');
        //logout
        Route::get('/submit', [LoginController::class, 'adminlogout'])->name('adminlogout');
        Route::get('/profile', [LoginController::class, 'adminprofile'])->name('adminprofile');
    });


    Route::group(['middleware'=>'guest'], function(){
        //Login Navbar:
        Route::get('/', [LoginController::class, 'adminlogin'])->name('adminlogin');
        Route::post('/submit', [LoginController::class, 'adminsubmit'])->name('adminsubmit');
        
    });

    // ADMIN LOGIN:
    Route::get('/userlogin', [UserController::class, 'admin'])->name('admin');



    //USER APPOINTMENT SHOW: 
    // route::get('/showallappointment', [AppointmentController::class, 'allshow'])->name('allshow');
    
});



// Frontend User:
Route::get('/frontend', [UserController::class, 'frontend']);


//USER APPOINTMENT: 
Route::get('/user', [UserController::class, 'userappointment'])->name('userappointment');
//THANKS PAGE:
Route::get('/appointment/success',[UserController::class,'success'])->name('appointment.success');

Route::post('/storeuser', [UserController::class, 'storeappointment'])->name('storeappointment');











