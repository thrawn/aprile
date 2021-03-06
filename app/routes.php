<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::get('/', function()
{
	return View::make('hello');
});
*/

    // index
    //Route::get('', array('uses' => 'HomeController@showHome'));

    // route to show the login form
    Route::get('login', array('as' => 'login', 'uses' => 'HomeController@showLogin'));

    // route to process the form
    Route::post('login', array('uses' => 'HomeController@doLogin'));

   // route to logout
    Route::get('logout', array('uses' => 'HomeController@doLogout'));


// Secure-Routes
Route::group(array('before' => 'auth'), function()
{
    Route::get('', 'HomeController@showHome');
    Route::resource('quotes','QuotesController');
    Route::resource('d','QuotesController@d');
    Route::resource('vendors','VendorsController');
    Route::resource('customers','CustomersController');
    Route::resource('inventory','InventoryController');
    Route::resource('seaports','SeaPortsController');
    Route::get('zipcode', array('uses' => 'ZipcodeController@search'));
    Route::post('quotes/upload', array('uses' => 'QuotesController@upload'));
    App::missing(function($exception)
        {
                return File::get(public_path() . '/nodestuff/app/index.html');
        });
});
