<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use PhpParser\Node\Expr\FuncCall;

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

Route::resource('/customer', 'CustomerController');
Route::resource('/leads', 'LeadController');
Route::get('leads/client/all/leads/{id}', 'LeadController@client_all_leads')->name('client.all.leads');
Route::get('/lead/mapview/{id}', 'AppointmentController@index');
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/', [AdminController::class, 'dashboard']);


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
