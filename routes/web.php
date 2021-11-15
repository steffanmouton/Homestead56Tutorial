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





//Route::get('/', 'PagesController@home');
use App\Services\Twitter;

//Route::get('/', function(Twitter $twitter) {
//    dd($twitter);
//});

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');



 /*GET /projects (index)
 GET /projects/create (create)
 GET /projects/1 (show)
 POST /projects (store)
 GET /projects/1/edit (edit)
 PATCH /projects/1 (update)
 DELETE /projects/1 (destroy)*/

//Route::get('/projects', 'ProjectsController@index');
//Route::get('/projects/create', 'ProjectsController@create');
//Route::get('/projects/{Project}', 'ProjectsController@show');
//Route::post('/projects', 'ProjectsController@store');
//Route::get('/projects/{Project}/edit', 'ProjectsController@edit');
//Route::patch('projects/{Project}', 'ProjectsController@update');
//Route::delete('projects/{Project}', 'ProjectsController@delete');
// The code below handles all seven of the above routes
Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::patch('/tasks/{task}', 'ProjectTasksController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
