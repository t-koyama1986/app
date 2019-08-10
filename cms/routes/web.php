<?php
use App\Admin;
use App\Article;
use App\Nuser;
use Illuminate\Http\Request;


// admins.blade.phpの表示
Route::get('/', function () {
    return view("top");
});


// admins.blade.phpの表示
Route::get('/', function () {
    return view("home");
});


Route::get('/admins', 'SampleController@request');

// Route::get('/admins', function () {
//     return view("admins");
// });



Route::get('sample', 'SampleController@add') ;;
Route::post('sample', 'SampleController@create')->name('sample_create');;

Route::get('/sample-list', 'SampleController@list');
Route::get('/sample-edit/{id}', 'SampleController@edit')->name('sample_edit');;
Route::post('/sample-edit', 'SampleController@update')->name('sample_editpost');;


// articles.blade.phpの表示　これから編集
Route::post('/articles', function (Request $request) {
    //
});

// nusers.blade.phpの表示　これから編集
Route::post('/nusers', function (Request $request) {
    //
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
