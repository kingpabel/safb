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
Route::get('admin/production-requirements/{id}/delete', 'AdminController@getProductionRequirementDelete');

Route::get('admin/import/{id}', 'AdminController@getImportShow');
Route::get('admin/import/{id}/edit', 'AdminController@getImportEdit');
Route::post('admin/import/{id}/edit', 'AdminController@postImportEdit');
Route::get('admin/import/{id}/delete', 'AdminController@getImportDelete');

Route::get('admin/export/{id}', 'AdminController@getExportShow');
Route::get('admin/export/{id}/edit', 'AdminController@getExportEdit');
Route::post('admin/export/{id}/edit', 'AdminController@postExportEdit');
Route::get('admin/export/{id}/delete', 'AdminController@getExportDelete');

Route::get('admin/damage/{id}', 'AdminController@getDamageShow');
Route::get('admin/damage/{id}/edit', 'AdminController@getDamageEdit');
Route::post('admin/damage/{id}/edit', 'AdminController@postDamageEdit');
Route::get('admin/damage/{id}/delete', 'AdminController@getDamageDelete');

Route::get('admin/location/{id}/edit', 'AdminController@getLocationEdit');
Route::post('admin/location/{id}/edit', 'AdminController@postLocationEdit');
Route::get('admin/location/{id}/delete', 'AdminController@getLocationDelete');

Route::get('admin/member/{id}/edit', 'AdminController@getMemberEdit');
Route::post('admin/member/{id}/edit', 'AdminController@postMemberEdit');

Route::get('admin/user/{id}/edit', 'AdminController@getUserEdit');
Route::post('admin/user/{id}/edit/username', 'AdminController@postUserEditUsername');
Route::post('admin/user/{id}/edit/password', 'AdminController@postUserEditPassword');
//Route::get('admin/production-requirements/{id}', ['uses' => 'AdminController@production-requirement', 'as' => 'id']);
Route::controller('admin', 'AdminController');
