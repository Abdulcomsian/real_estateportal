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
Route::get('leads-active', 'LeadController@active_leads')->name('leads.active');
Route::get('leads-pending', 'LeadController@pending_leads')->name('leads.pending');
Route::get('leads-under-contract', 'LeadController@under_contract')->name('leads.under.contract');
Route::get('leads/client/all/leads/{id}', 'LeadController@client_all_leads')->name('client.all.leads');
Route::get('/lead/mapview', 'AppointmentController@index');
Route::get('/get-lead-details', 'AppointmentController@get_lead_details');
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/', [AdminController::class, 'dashboard']);
Auth::routes();
