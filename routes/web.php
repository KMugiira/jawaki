<?php

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


Route::resource ('home','HomeController');
Route::resource ('about','AboutController');
Route::resource ('contact','ContactController');
Route::resource ('login','LoginController');
Route::resource ('master','MasterController');
Route::resource ('property','PropertyController');
Route::resource ('athioasis','AthioasisController');
Route::resource ('athi','AthiController');
Route::resource ('kwamurage','KwamurageController');
Route::resource ('gwakairu','GwakairuController');
Route::resource ('judah','JudahController');
Route::resource ('mureramagomano','MureramagomanoController');
Route::resource ('murerabypass','MurerabypassController');
Route::resource ('ndurumo','NdurumoController');
Route::resource ('ndarasha','NdarashaController');
Route::resource ('bypassmugetho','BypassmugethoController');
Route::resource ('mwireri','MwireriController');
Route::resource ('shop','ShopCOntroller');
Route::resource ('athi_bookings','AthibookingsController');
Route::resource ('athi_oasis_bookings','AthioasisbookingsController');
Route::resource ('mugetho_bookings','MugethobookingsController');
Route::resource ('gwa_kairu_bookings','GwakairubookingsController');
Route::resource ('judah_bookings','JudahbookingsController');
Route::resource ('murage_bookings','MuragebookingsCOntroller');
Route::resource ('murera_magomano_bookings','MureramagomanobookingsController');
Route::resource ('mwireri_bookings','MwireribookingsController');
Route::resource ('ndarasha_bookings','NdarashabookingsController');
Route::resource ('ndurumo_bookings','NdurumobookingsController');
Route::resource ('test','TestController');
Route::resource ('shop','ShopController');
Route::resource ('murerabypass_bookings','MurerabypassbookingsController');
Route::resource ('jawaki_bookings','JawakibookingsController');
Route::resource ('register','RegisterController');