<?php

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
/*
Route::get('/', function () {
    return view('home');
});
*/
// ROUTE FOR HOME PAGE
Route::get('/','Customers@loadHomePage');

// ROUTE FOR UPDATE PAGE
Route::get('/upadtecustomer/{id}','Customers@loadCustomerById');

// ROUTE FOR DELETE DATA
Route::get('/deletecustomer/{id}','Customers@deleteCustomer');

// ROUTE FOR FILE UPLOAD
Route::view('/upload','upload');
Route::post('/fileUpload','Users@fileUpload');

//  ROUTE FOR  SAVE DATA
Route::post('/customer','Customers@saveCustomer');
// ROUTE FOR UPDATE DATA
Route::post('/updatecustomerdata','Customers@updateCustomer');