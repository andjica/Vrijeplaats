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
Route::get('/user-invoice={idinvoice}', 'HomeController@invoice');


Route::post('/categorie/location', 'HomeController@categorylocation');
//category city
Route::get('/categorie={name}/city={city}', 'HomeController@categorycity');
Route::get('/categorie={name}/city={city}/name={title}/post={id}', 'HomeController@getpost');
Route::get('/all-categories', 'HomeController@getallposts');

//user edit
Route::group(['middleware' => ['auth', 'verified']], function () {

    //userview - company - user
    Route::get('/bewerk-profiel', 'UserViewController@create');
    Route::post('/insert-user-info', 'UserViewController@store');
    Route::post('/edit-user-info', 'UserViewController@edit');
    Route::post('/make-company-active', 'UserViewController@activatecompany');
    Route::get('/company/{id}', 'UserViewController@company');

    Route::post('/insert-advertising', 'PostController@store');
    Route::get('/delete-advertising/{id}', 'PostController@destroy');
  
    //Mollie Payment 
    Route::get('/buy-ticket/{id}', 'MolliePaymentController@buyticket');
    Route::get('/mollie-paymnet','MolliePaymentController@preparePayment')->name('mollie.payment');
    Route::get('/payment-success/{id}','MolliePaymentController@paymentSuccess')->name('payment.success');
    Route::get('/get-checkout-partnership', 'MolliePaymentController@handlePartnerShip');
    Route::get('/paymentforpartership', 'MolliePaymentController@paymentforpartership');
    Route::get('/webhooks-mollie', 'MolliePaymentController@handle')->name('webhooks.mollie');


    Route::get('/edit-password', 'ChangePasswordController@index');
    Route::post('/change-password', 'ChangePasswordController@store')->name('change.password');
    
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin-home', 'AdminController@index');
    Route::get('/admin-invoices', 'AdminController@invoices');
    Route::get('/admin-coupon-invoices', 'AdminController@couponinvoices');
    Route::get('/admin-invoice={idinvoice}', 'AdminController@invoice');
    Route::get('/role-invoices/{id}', 'AdminController@userinvoices');
    Route::get('/admin-posts', 'AdminController@posts');
    Route::get('/admin-partners', 'AdminController@partners');

    Route::get('/create-category', 'CategoryController@create');
    Route::post('/insert-category', 'CategoryController@store');
    Route::get('/category/{id}', 'CategoryController@show');
    Route::get('/categories', 'CategoryController@index');
    Route::post('/edit-category', 'CategoryController@update');
    Route::post('/category-active', 'CategoryController@active');
    Route::post('/category-active-tax', 'CategoryController@activetax');

    Route::get('/admin-users', 'AdminController@users');
    Route::get('/users', 'AdminController@onlyusers');
    Route::get('/companies', 'AdminController@onlycompanies');

    Route::get('/delete-user/{id}', 'AdminController@deleteuser');
   
});


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

Route::get('/proba', 'FrontController@proba');
Route::get('/updateapp', function()
{
   
    system('composer dump-autoload');
    
});


