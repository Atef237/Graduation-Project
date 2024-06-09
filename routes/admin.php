<?php

use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\CarBrandController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CarTypeController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\HotelCategoryController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\RoomCategoryController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\ScopeController;
use App\Http\Controllers\Admin\SupportRequestContoller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application Dashboard. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::view('login','dashboard.v1.login')->name('admin.login.view');
Route::post('login', 'AdminController@auth')->name('admin.login.post');
Route::get('lang/{lang}', 'LanguageController@switchLang')->name('lang.switch');

Route::post('gre','AdminController@login');
Route::group(['middleware' =>'admin:admin'], function () {
    Route::view('/','dashboard.v1.dashboard')->name('admin.home');


    Route::resource('donation_scopes',ScopeController::class);
    Route::resource('donation_projects',ProjectController::class);
    Route::resource('donor_request',SupportRequestContoller::class);
    Route::post('donor_request/accept',[SupportRequestContoller::class,'accept'])->name('donor_request.accept');
    Route::post('donor_request/reject',[SupportRequestContoller::class,'reject'])->name('donor_request.reject');
    Route::get('donor_request/accepted',[SupportRequestContoller::class,'supportRequestAccepted'])->name('supportRequestAccepted');
    Route::get('donor_request/rejected',[SupportRequestContoller::class,'supportRequestRejected'])->name('supportRequestRejected');
    Route::get('donor_project',[SupportRequestContoller::class,'donorProject'])->name('donorProject');

});
