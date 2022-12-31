<?php

use App\Models\User;
use App\Models\Violation;
use App\Models\Violation_Type;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\SMSController;
use App\Http\Controllers\web\CarsController;
use App\Http\Controllers\web\UsersController;
use App\Http\Controllers\web\EmployeesController;
use App\Http\Controllers\web\ServicesController;
use App\Http\Controllers\web\ViolationsController;
use App\Http\Controllers\web\Contact_Us_Controller;
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

Route::get('/test', function () {
    return  Violation_Type::all()->random(1)->value('type');
});
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/sms', [SMSController::class, 'index']);

Route::get('/services', function () {
    return view('services');
})->name('services');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/myviolations', function () {
        $myviolations = Violation::all()->where('user_id', Auth::id());
        return view('violations.my_violations', compact('myviolations'));
    })->name('myviolations');
});


Route::get('search', [AutoCompleteController::class, 'index'])->name('search');
Route::get('autocomplete', [AutoCompleteController::class, 'autocomplete'])->name('autocomplete');
Route::get('autocomplete2', [AutoCompleteController::class, 'autocomplete2'])->name('autocomplete2');
Route::controller(Contact_Us_Controller::class)->group(function () {
    Route::get('/contact-us', 'index')->name('contact_us');
    Route::post('/contact-us', 'Sendmail')->name('sendnotification');
});
Route::group(['middleware' => ['auth:sanctum', 'role:Employee|Admin']], function () {

    Route::resource('violations', ViolationsController::class);
    Route::resource('cars', CarsController::class);
});
Route::group(['middleware' => ['auth:sanctum', 'role:Admin']], function () {
    Route::resource('users', UsersController::class);
    Route::resource('employees', EmployeesController::class);
});
