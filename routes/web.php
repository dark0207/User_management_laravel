<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    
    

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Home Routes
         */
        Route::get('/', 'HomeController@index')->name('home.index');

        /**
         * Profile Routes
         */
        Route::get('/profile', 'ProfileController@index')->name('profile.index');
        Route::post('/profile/update', 'ProfileController@update')->name('profile.update');

        /**
         * Session Routes
         */
        Route::get('/session', 'SessionController@index')->name('session.index');
        Route::post('/session/{id}', 'SessionController@destroy')->name('session.destroy');
        /**
         * ActivityLog Routes
         */
        Route::get('/logAcitivity', 'LogActivityController@index')->name('logactivity.index');

        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});

Route::get('/setlocale', function(Request $request) {

    // Store the selected locale in the session or any other storage mechanism
    session(['locale' => $request->locale]);

    // Redirect back to the previous URL
    return redirect()->back();
})->name('setlocale');
