<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SportController;

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

/* auth par role */
route::get('/redirects',[HomeController::class,"index"]);




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('backoffice.index');
});
Route::get('/dashboard', function () {
    return view('backoffice.dashboard.dashboard');
})->name('dashboard');

Route::resource('sports','SportController');

Route::resource('locations','LocationController');

Route::resource('trainers','TrainerController');

Route::resource('programs','ProgramController');

Route::resource('calendars','CalendarController');

Route::resource('clients','ClientController');

Route::get('/getbyid/{id}', 'SeanceController@getbyid')->name('getbyid'); 

Route::get('/getcalendarbyprogram/{id}', 'CalendarController@getcalendarbyprogram')->name('getcalendarbyprogram'); 

Route::get('/getcalendarbylocation/{id}', 'CalendarController@getcalendarbylocation')->name('getcalendarbylocation'); 

Route::get('/getcalendarbysport/{id}', 'CalendarController@getcalendarbysport')->name('getcalendarbysport'); 

Route::get('/getcalendarbycityorcountry', 'CalendarController@getcalendarbycityorcountry')->name('getcalendarbycityorcountry'); 

Route::get('/getcalendarbytrainer/{id}', 'CalendarController@getcalendarbytrainer')->name('getcalendarbytrainer'); 

Route::get('/getcalendarbyclient/{id}', 'CalendarController@getcalendarbyclient')->name('getcalendarbyclient'); 

Route::resource('seances','SeanceController');

Route::resource('participes','ParticipeController');

Route::get('/participesgetclient/{id}', 'ParticipeController@participesgetclient')->name('participesgetclient'); 


Route::post('/storet', 'ParticipeController@storet')->name('storet'); 


Route::get('/presencegetclient/{id}', 'PresenceController@presencegetclient')->name('presencegetclient'); 

Route::post('/storetpresence', 'PresenceController@storet')->name('storetpresence'); 

Route::get('/paiementsgetallclient/{id}', 'PaiementController@paiementsgetallclient')->name('paiementsgetallclient'); 

Route::post('/storetpaiement', 'PaiementController@storet')->name('storetpaiement'); 

// Route::get('/getpaiementbyclient/{id}', 'PaiementController@getpaiementbyclient')->name('getpaiementbyclient'); 

Route::get('/paiementsgetclient/{id}/{program_id}', 'PaiementController@paiementsgetclient')->name('paiementsgetclient'); 

Route::get('/addpaiement/{client_id}/{program_id}', 'PaiementController@create')->name('addpaiement'); 

Route::post('/storetpaiement/{client_id}/{program_id}', 'PaiementController@storet')->name('storetpaiement'); 

Route::get('/paiementsgetclientallprograms/{id}', 'ClientController@paiementsgetclientallprograms')->name('paiementsgetclientallprograms'); 

Route::get('/paiementsprogrmasgetclient/{id}', 'PaiementController@paiementsprogrmasgetclient')->name('paiementsprogrmasgetclient'); 
