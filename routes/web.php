<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashController;
use App\Http\Controllers\trainerController;
use App\Http\Controllers\homeController;


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

//Route::view("Dashboard" ,'dashboard');



/*Route::get('/schedule', function () {
    return view('schedule');
});*/



/*Route::get('/trainers', function () {
    return view('trainers');
});*/


/*Route::get('/edit', function () {
    return view('edit');
});*/

Route::get('/dashboards',[homeController::class, 'indexDashboard']);
Route::get('/members',[dashController::class, 'index'])->name('members');
Route::get('/payment',[dashController::class, 'indexPayment']);
Route::get('/schedule',[trainerController::class, 'indexSchedule']);
Route::get('/active',[dashController::class, 'indexActive_clients']);
Route::get('/inactive',[dashController::class, 'indexInactive_clients']);



Route::post('client', [dashController::class, 'store']) ;
Route::post('schedule', [dashController::class, 'storeSchedule']) ;



//Route::resource('group', dashController::class);

Route::get('/click_delete/{id}' , [dashController::class, 'destroy']);

Route::get('/trainers' , [trainerController::class, 'index']);
Route::post('trainer' , [trainerController::class, 'create']);


