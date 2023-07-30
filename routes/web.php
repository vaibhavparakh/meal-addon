<?php

// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\VendorController;
// use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login','Auth\LoginController@view')->name('admin.login.view');
Route::post('login','Auth\LoginController@login')->name('admin.login');

Route::middleware(['auth:admin'])->group(function() {
    // dashboard
    Route::get('dashboard', function () {
        return view('content.dashboard');
    })->name('dashboard');
    Route::get('logout', function () {
        Auth::guard('admin')->logout();
        return redirect(route('admin.login.view'));
    })->name('logout');

    // Route::get('dashboard','DashboardController@index')->name('dashboard');
    
    Route::group(['prefix' => 'management'], function(){
        // Admins route
        Route::get('admins','AdminController@view')->name('management.admins');
        Route::get('admins/add','AdminController@add')->name('management.admin.add');
        Route::get('admins/edit/{id}','AdminController@edit')->name('management.admin.edit');
        
        Route::get('users','UserController@view')->name('management.users');
        Route::get('vendors','Controller@post')->name('management.vendors');
        Route::get('roles','Controller@post')->name('management.roles');
    });
});



Route::get('/home', 'HomeController@index')->name('home');