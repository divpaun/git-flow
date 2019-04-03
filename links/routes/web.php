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
/*Route::get('/', function () {
	$tasks = [
		'Go to the store',
		'Go to the market',
		'Go to work'

	];

    return view('welcome', [
    	'tasks' => $tasks,
    	'foo' => '<script>alert("Welcome Laravel Demo");</script>'
    ]);

});*/

/* 
    GET /projects (index)
    
    GET /projects/create (create)
    
    GET /projects/1 (show)

    POST /projects/1/edit (edit)

    GET /projects/1/edit (edit)

    PATCH /projects/1 (update)

    DELETE /projects/1 (destroy)
*/
//Route::resource('projects', 'ProjectsController');

Route::get('/','PagesController@home');

Route::get('/about','PagesController@about');

Route::get('/contact','PagesController@contact');

Route::get('/signup','PagesController@signup');

Route::get('/projects','ProjectsController@index');

Route::get('/projects/create','ProjectsController@create');

Route::post('/projects','ProjectsController@store');

Route::get('/projects/{project}','ProjectsController@show');

Route::get('/projects/{project}/edit','ProjectsController@edit');

Route::delete('/projects/{project}','ProjectsController@update');

Route::delete('/projects/{project}','ProjectsController@destroy');

/* Start Products */

Route::get('/products', 'ProductsController@index');
Route::post('/products', 'ProductsController@store');

/* End Products */

Route::get('about/', function () {
    return view('about');
});

Route::get('contact/', function () {
    return view('contact', ['name' => 'James']);
});

Route::get('signup/', function () {
    return view('signup');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
