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
    $posts = App\Post::all();
    return view('welcome', compact('posts'));
});

Route::get('post/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
	return view('post', compact('post'));
});

// Commented out as auth isnt needed
//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    // Custom voyager routes
    Route::get('multibot/applications','MultibotController@applications')->middleware('admin.user');
    Route::get('multibot/applications/create','MultibotController@create')->middleware('admin.user');
    Route::post('multibot/applications/create/manual','MultibotController@save');
    Route::post('multibot/applications/handle','MultibotController@handle');

    Route::get('multibot/statistics','MultibotController@statistics')->middleware('admin.user');
});
