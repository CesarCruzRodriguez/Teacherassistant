<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});*/


Route::get('/', 'IndexController@index');

Route::get('teachers/login', array('as' => 'teach', 'uses' => 'TeacherController@login'));

Route::post('teachers/comprueba', 'TeacherController@comprueba');

Route::get('teachers/ver', 'TeacherController@ver');

Route::resource('profesor', 'ProfesorController');