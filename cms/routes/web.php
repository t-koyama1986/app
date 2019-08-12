<?php
use App\Admin;
use App\Article;
use App\Nuser;
use Illuminate\Http\Request;

Route::get('/top', 'SampleController@top');

Route::get('/', function () {
    return view("home");
});

Route::get('/admins', 'SampleController@request');


Route::get('sample', 'SampleController@add') ;;
Route::post('sample', 'SampleController@create')->name('sample_create');;

Route::get('/sample-list', 'SampleController@list');
Route::get('/sample-edit/{id}', 'SampleController@edit')->name('sample_edit');;
Route::post('/sample-edit', 'SampleController@update')->name('sample_editpost');;

Route::get('/sample-delete/{id}', 'SampleController@delete')->name('sample_delete');;
Route::post('/sample-delete', 'SampleController@deletepost')->name('sample_deletepost');;



Route::get('/article', 'ArticleController@home') ;;
Route::post('/article', 'ArticleController@create')->name('article_create');;

// nusers.blade.phpの表示　これから編集
Route::post('/nusers', function (Request $request) {
    //
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
