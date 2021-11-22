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

Route::get('/', 'FrontController@index');
Route::get('/about', 'FrontController@about');
Route::get('/contact', 'FrontController@contact');
Route::get('/become-partner', 'FrontController@partner');
Auth::routes(['verify' => true]);

Route::post('/be-partner', 'EmailController@bepartner');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add-adv', 'HomeController@addadv');

Route::get('/categorie/{name}', 'HomeController@categories');
Route::get('/city/{name}', 'HomeController@cities');
Route::get('/user-invoices', 'HomeController@invoices');
Route::get('/user-invoices={idinvoice}', 'HomeController@invoice');


Route::get('/categorie={name}/city={city}/name={title}', 'HomeController@getpost');
Route::get('/all-categories', 'HomeController@getallposts');
Route::get('/categorie={name}/city={city}', 'HomeController@categorycity');
//user edit
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/bewerk-profiel', 'UserViewController@create');
    Route::post('/insert-user-info', 'UserViewController@store');
    Route::post('/edit-user-info', 'UserViewController@edit');

    Route::post('/insert-advertising', 'PostController@store');

    //Mollie Payment 
    Route::get('/buy-ticket/{id}', 'MolliePaymentController@buyticket');
    Route::get('/mollie-paymnet','MolliePaymentController@preparePayment')->name('mollie.payment');
    Route::get('/payment-success','MolliePaymentController@paymentSuccess')->name('payment.success');
    
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin-home', 'AdminController@index');
    Route::get('/admin-invoices', 'AdminController@invoices');
    Route::get('/admin-invoice={idinvoice}', 'AdminController@invoice');
    Route::get('/admin-posts', 'AdminController@posts');
    Route::get('/admin-partners', 'AdminController@partners');

    Route::get('/create-category', 'CategoryController@create');
    Route::post('/insert-category', 'CategoryController@store');
});


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});



