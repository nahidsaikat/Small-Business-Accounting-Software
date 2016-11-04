<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// dd(\DB::table('table1')->join('table2', 'table1.id', '=', 'table2.table1_id')
// 	->leftJoin('table3', 'table1.id', '=', 'table3.table1_id')
// 	->where('table2.name', 'LIKE', '%Jhon%')
// 	->where('table3.c', '=', '5')
// 	->orWhere('table1.cm', '=', 'hasina')
// 	->select(['table1.cm', 'table2.id', \DB::raw('sum(table2.amount) as total')])
// 	->groupBy('table2.user_id')
// 	->orderBy('table2.updated_at', 'DESC')
// 	->get());

Route::get('/registrationform', 'RegistrationController@register');
Route::post('/insert','RegistrationController@insert');
// Route::get('/login','LoginController@login');
// Route::post('/authenticated','LoginController@authenticated');
// Route::get('/logout','LoginController@logout');
// for test
Route::get('/login','HomeController@login');
Route::post('/authenticated','HomeController@authenticated');
Route::get('/logout','HomeController@logout');

// end of login route
Route::get('layout','DisplayController@display');
Route::get('personal','DisplayController@display1');
Route::get('both','DisplayController@display2');

// end of layout route
Route::get('/account', 'AccountController@index');
Route::post('/account', 'AccountController@store');

//Auth::routes();
//Route::get('/home', 'HomeController@index');
