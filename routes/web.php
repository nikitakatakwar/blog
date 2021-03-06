<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\TestController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('role',Admin\RoleController::class);
Route::resource('permission',Admin\PermissionController::class);
Route::post('/deleteCountry',[RoleController::class,'deleteCountry'])->name('delete.country');
Route::get('role/destroy/{id}', [RoleController::class,'destroy']);
Route::get('permission/destroy/{id}', [PermissionController::class,'destroy']);
Route::get('admin/destroy/{id}', [AdminController::class,'destroy']);
Route::get('admin/edit/{id}',[App\Http\Controllers\Admin\AdminController::class,'edit']);
Route::resource('admin', Admin\AdminController::class);


Route::resource('employee', 'Admin\EmployeeController');
Route::get('employee/{id}/customers', 'Admin\EmployeeController@showEmployeeCustomers')->name('employee.customers');
Route::post('employee/{id}/customers/add', 'Admin\EmployeeController@addEmployeeCustomers')->name('employee.customers.add');

Route::get('target/show', [App\Http\Controllers\Admin\EmployeeController::class,'showTarget'])->name('target.show');
Route::post('target/submit', 'Admin\EmployeeController@submitTarget')->name('target.submit');
//customer module
Route::resource('customer',Admin\CustomerController::class);

Route::get('customer/{id}/payment', 'Admin\CustomerController@pay')->name('customer.pay');

Route::post('customer/transaction/store', 'Admin\CustomerController@storeTransaction')->name('customer.transaction.store');

Route::get('move-customers', 'Admin\EmployeeController@moveCustomers')->name('move-customer');

Route::get('customer/{id}/payment', 'Admin\CustomerController@pay')->name('customer.pay');
Route::get('customer/{id}/verify','Admin\CustomerController@smsVerification')->name('customer.verify');
Route::get('customer/{id}/admin-verify', 'Admin\CustomerController@adminVerify')->name('customer.admin.verify');
Route::get('customer/{id}/product', 'Admin\CustomerController@product')->name('customer.product');
Route::post('customer/product/upload', 'Admin\CustomerController@productUpload')->name('customer.product.upload');
Route::get('customer/{id}/document', 'Admin\CustomerController@document')->name('customer.document');
Route::post('customer/document/submit', 'Admin\CustomerController@documentSubmit')->name('customer.document.submit');
Route::get('customer/{id}/invoice', 'Admin\CustomerController@showInvoice')->name('customer.invoice');
Route::get('customer/{phone_number}/otp', 'Admin\CustomerController@sendOTP')->name('customer.otp');
Route::post('customer/otp/submit', 'Admin/CustomerController@submitOTP')->name('customer.otp.submit');
Route::get('customer/{id}/payment_receipt', 'Admin\CustomerController@paymentReceipt')->name('customer.payment.receipt');
Route::post('customer/{id}/payment_receipt/submit', 'Admin\CustomerController@submitPaymentReceipt')->name('customer.payment.receipt.submit');

//Tash_Module

Route::get('assign-tasks', 'Admin\TaskController@showMovedCustomers')->name('assign-tasks');
Route::post('assign-tasks/submit', 'Admin\TaskController@submitTasks')->name('assign-tasks.submit');
Route::get('assign-task/{id}/log', 'Admin\TaskController@taskLog')->name('assign-tasks.log');
Route::get('my-tasks', 'Admin\TaskController@myTasks')->name('my-tasks');
Route::post('my-tasks/submit', 'Admin\TaskController@submitMyTasks')->name('my-tasks.submit');
Route::get('all-tasks', 'Admin\TaskController@allTasks')->name('all-tasks');
Route::resource('tasks', 'Admin\TaskController');

 //category module
 Route::resource('category', 'Admin\CategoryController');
//packages module
 Route::resource('package', 'Admin\PackageController');

