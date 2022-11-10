<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\CarsController;
use App\Http\Controllers\web\UsersController;
use App\Http\Controllers\web\ViolationsController;
use App\Http\Controllers\web\AutoCompleteController;



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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/manage',function () {
    $user=User::all();
    return view('manage',['users'=>$user]);
});

Route::resource('users', UsersController::class);
Route::resource('violations', ViolationsController::class);
Route::resource('cars', CarsController::class);
Route::get('/test', [ViolationsController::class,'create']);
Route::get('search', [AutoCompleteController::class, 'index'])->name('search');
Route::get('autocomplete', [AutoCompleteController::class, 'autocomplete'])->name('autocomplete');



