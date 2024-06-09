<?php

use App\Http\Controllers\Web\BeneficiaryController;
use App\Http\Controllers\Web\DonorController;
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


//Route::get('/',)

Route::view('/','web.home')->name('home');

Route::get('/Beneficiary',[BeneficiaryController::class,'index'])->name('beneficiaryAuth');
Route::get('/donor',[DonorController::class,'index'])->name('allProjects');
Route::get('auth/donor',[DonorController::class,'authDonor'])->name('donorAuth');
Route::get('donor/login',[DonorController::class,'showDonorLoginForm'])->name('showDonorLoginForm');
Route::post('donor/login',[DonorController::class,'donorLogin'])->name('donorLogin');
Route::get('donor/register',[DonorController::class,'showDonorRegisterForm'])->name('showDonorRegisterForm');
Route::post('donor/register',[DonorController::class,'donorRegister'])->name('donorRegister');
Route::post('donorRequest',[DonorController::class,'donorRequest'])->name('donorRequest');
Route::get('/showRegister',[BeneficiaryController::class,'showRegisterForm'])->name('showRegisterForm');
Route::get('/showLogin',[BeneficiaryController::class,'showLoginForm'])->name('showLoginForm');
Route::post('postRegister',[BeneficiaryController::class,'postRegister'])->name('postRegister');
Route::post('postLogin',[BeneficiaryController::class,'postLogin'])->name('postLogin');

Route::get('profile',[BeneficiaryController::class,'profile'])->name('profile')->middleware('auth');
Route::get('askingForDonation',[DonorController::class,'askingForDonation'])->name('askingForDonation')->middleware('auth');
Route::post('askingForDonation',[DonorController::class,'storeAskingForDonation'])->name('storeAskingForDonation')->middleware('auth');


Route::get('/logout', function () {
    auth()->logout();
    return redirect()->route('home');
})->name('logout');

Route::get('/admin', function () {
    return redirect()->route('admin.home');
});
