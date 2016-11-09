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

// Startpage
Route::get('/', function(){return view('start');});

Route::get('/home', 'ProjectController@showlist')->middleware('auth');
//View, Create and Edit Projects
Route::get('/projects', 'ProjectController@showlist')->middleware('auth');
Route::delete('/project', 'ProjectController@delete')->middleware('auth');
Route::post('/project', 'ProjectController@store')->middleware('auth');
Route::get('/project/create', 'ProjectController@create')->middleware('auth');
Route::get('/project/{project}/edit', 'ProjectController@edit')->middleware('auth');
Route::get('/project/{project}', 'ProjectController@showproject')->middleware('auth');

//View Part
Route::get('/part/{part}/view', 'ProjectController@viewpart')->middleware('auth');
Route::get('/view', 'ProjectController@viewpart');
Route::get('/part/{part}/code.jscad', 'ProjectController@viewcode')->middleware('auth');

//OpenJSCAD Editor
Route::get('/editor', 'ProjectController@editpart')->middleware('auth');

//OpenJSCAD Files
Route::get('/openscad.js', function(){return View::make('openJSCAD.original.openscad_js');});

Route::get('/js/index.js', function(){return View::make('openJSCAD.js.index_js');});

Auth::routes();

Route::get('/logout', 'HomeController@logout');

/*
Route::get('/home', function()
{
	return View::make('home');
});

Route::get('/charts', function()
{
	return View::make('mcharts');
});

Route::get('/tables', function()
{
	return View::make('table');
});

Route::get('/forms', function()
{
	return View::make('form');
});

Route::get('/grid', function()
{
	return View::make('grid');
});

Route::get('/buttons', function()
{
	return View::make('buttons');
});


Route::get('/icons', function()
{
	return View::make('icons');
});

Route::get('/panels', function()
{
	return View::make('panel');
});

Route::get('/typography', function()
{
	return View::make('typography');
});

Route::get('/notifications', function()
{
	return View::make('notifications');
});

Route::get('/blank', function()
{
	return View::make('blank');
});

Route::get('/documentation', function()
{
	return View::make('documentation');
}); /* END OF DEMO */
