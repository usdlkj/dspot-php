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


Route::get('/',     array('as' => '/', 'uses' => 'RegistrationController@create'));

Route::post('registrations/store', array('as' => 'registrations/store', 'uses' => 'RegistrationController@store'));
Route::get('registrations/complete', array('as' => 'registrations/complete', 'uses' => 'RegistrationController@complete'));
Route::get('registrations/confirm/{id}', array('as' => 'registrations/confirm', 'uses' => 'RegistrationController@confirm'));

Route::get('registrants', array('as' => 'registrants', 'uses' => 'RegistrationController@registrants'));
Route::post('registrants-ajax-data', array('as' => 'registrants-ajax-data', 'uses' => 'RegistrationController@dataAjaxSearch'));

/*Route::get('send-confirmation-email','RegistrationMailController@confirmation_basic_email');
Route::get('send-confirmation-html-email','RegistrationMailController@confirmation_html_email');*/

