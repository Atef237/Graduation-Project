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
    Route::view('/admins/index','dashboard.v1.dashboard')->name('admin.home');

//    Route::resource('packages', PackageController::class);
//    Route::resource('clients', ClientController::class);
    Route::resource('admins', AdminsController::class);
//    Route::resource('roles', RoleController::class);
//    Route::resource('countries',CountryController::class);
//    Route::get('country_cities/{country}',[\App\Http\Controllers\Admin\CountryController::class,'getCountryCities']);
//
//    Route::get('pdf/reservation/{reservation}',[ReservationController::class,'pdf'])->name('reservation.pdf');
//    Route::resource('reservations',ReservationController::class);
//    Route::get('type/reservation',[ReservationController::class,'typeReservation'])->name('type.reservation');
//    Route::resource('cities',CityController::class);
//    Route::resource('room_categories',RoomCategoryController::class);
//    Route::resource('hotel_categories',HotelCategoryController::class);
//    Route::resource('car_types',CarTypeController::class);
//    Route::resource('car_brands',CarBrandController::class);
//    Route::resource('hotels',HotelController::class);
//    Route::get('search/hotels',[\App\Http\Controllers\Admin\HotelController::class,'search']);
//    Route::get('search/room',[\App\Http\Controllers\Admin\HotelController::class,'search']);
//    Route::resource('rooms',RoomController::class);
//    Route::get('search/rooms',[\App\Http\Controllers\Admin\RoomController::class,'search']);
//    Route::get('priceRoom',[\App\Http\Controllers\Admin\RoomController::class,'priceRoom']);
//
//    Route::get('hotel_rooms/{hotel}',[\App\Http\Controllers\Admin\HotelController::class,'getHotelRooms']);


    Route::resource('donation_scopes',ScopeController::class);
    Route::resource('donation_projects',ProjectController::class);
    Route::resource('donor_request',SupportRequestContoller::class);
    Route::post('donor_request/accept',[SupportRequestContoller::class,'accept'])->name('donor_request.accept');
    Route::post('donor_request/reject',[SupportRequestContoller::class,'reject'])->name('donor_request.reject');
    Route::get('donor_request/accepted',[SupportRequestContoller::class,'supportRequestAccepted'])->name('supportRequestAccepted');
    Route::get('donor_request/rejected',[SupportRequestContoller::class,'supportRequestRejected'])->name('supportRequestRejected');
    Route::get('donor_project',[SupportRequestContoller::class,'donorProject'])->name('donorProject');
//    Route::delete('donor_project/{id}',[SupportRequestContoller::class,'destroy'])->name('donor_project.destroy');
//
//    Route::resource('cars',CarController::class);
//    Route::get('search/cars',[\App\Http\Controllers\Admin\CarController::class,'search']);
//    Route::get('carPrice',[\App\Http\Controllers\Admin\CarController::class,'carPrice']);

});
