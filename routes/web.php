<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/data', 'testController@index')->name('data');
Route::get('/create-data', 'testController@create');
Route::post('/store-data', 'testController@store');
Route::get('/edit-data', 'testController@edit');Route::post('/store-data', 'testController@store');
Route::post('/update-data', 'testController@update');
Route::get('/delete-data', 'testController@delete');
Route::get('/activate-data', 'testController@activate');
Route::get('/restore-data', 'testController@restore');

//for web watsaap message sending
Route::get('/watsapp-messaging', 'testController@watsappMess');
Route::post('/watsapp-messaging', 'testController@storeWatsappMess');

//for queue job send sms
Route::get('/send-sms', [NotificationController::class, 'sendSmsNotificaition']);
