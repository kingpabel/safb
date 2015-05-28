<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::controller('login', 'LoginController');
Route::get('admin/production-requirements/{id}', 'AdminController@getProductionRequirementShow');
Route::get('admin/production-requirements/{id}/edit', 'AdminController@getProductionRequirementEdit');
Route::post('admin/production-requirements/{id}/edit', 'AdminController@postProductionRequirementEdit');
Route::get('admin/import/{id}', 'AdminController@getImportShow');
Route::get('admin/import/{id}/edit', 'AdminController@getImportEdit');
Route::post('admin/import/{id}/edit', 'AdminController@postProductionRequirementEdit');
//Route::get('admin/production-requirements/{id}', ['uses' => 'AdminController@production-requirement', 'as' => 'id']);
Route::controller('admin', 'AdminController');
