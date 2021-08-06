<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\CourseController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::view('/', 'auth.login');

Route::get('fetchcerts',[CertificateController::class,'fetchcertificates']); 

Route::get('pdf/{id}',[PdfController::class,'show']); 


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('registration', 'App\Http\Controllers\CustomAuthController@registration')->name('register-user');
Route::post('custom-registration', 'App\Http\Controllers\CustomAuthController@customRegistration')->name('register.custom');

/* admin routes check by role admin role=1 */

Route::get('redirects','App\Http\Controllers\HomeController@index')->name('redirects');

Route::get('register','App\Http\Controllers\HomeController@register')->name('register');
Route::get('showusers','App\Http\Controllers\HomeController@showusers')->name('showusers');
Route::get('showcerts','App\Http\Controllers\HomeController@showcerts')->name('showcerts');

//csv
Route::get('importform','App\Http\Controllers\HomeController@importform')->name('importform');
Route::post('import','App\Http\Controllers\HomeController@import')->name('import');


