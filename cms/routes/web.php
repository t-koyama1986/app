<?php
use App\Admin;
use App\Article;
use App\Nuser;
use Illuminate\Http\Request;


// admins.blade.phpの表示
Route::get('/', function () {
    return view("top");
    //top.blade.phpを読み込む
});






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
