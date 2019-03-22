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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/search', 'NotesController@search');

// Route::resource('notes', 'NotesController');

// Route::get('/employee', 'EmployeeController@index');
// Route::get('/create', 'EmployeeController@create');
// Route::post('/add', 'EmployeeController@store')->name('add');
// Route::get('/employeepage', 'EmployeeController@display');
// Route::get('/edit/{id}', 'EmployeeController@edit');
// Route::put('/updateimage/{id}', 'EmployeeController@update');
// Route::get('/delete/{id}', 'EmployeeController@delete');
// Route::post('destroy/{id}', 'EmployeeController@destroy');

Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');

Route::get('goi-ten/{ten}', 'HomeController@xinchao');
Route::get('MyRequest', 'HomeController@GetURL');

Route::get('getform', function(){
	return view('khoapham');
});
Route::post('postform',['as'=>'post_form', 'uses'=>'HomeController@postForm']);

