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
Route::get('/marketing', function () {
    return view('marketing');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/login/{social}','Auth\LoginController@socialLogin')->where('social','twitter|facebook|linkedin|google|github|bitbucket');
Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|linkedin|google|github|bitbucket');

// Route::get('/', 'PostController@index')->name('home');
Route::get('/posts/feed', 'PostFeedController@index')->name('posts.feed');
Route::resource('posts', 'PostController')->only('show');
Route::resource('users', 'UserController')->only('show');
Route::get('newsletter-subscriptions/unsubscribe', 'NewsletterSubscriptionController@unsubscribe')->name('newsletter-subscriptions.unsubscribe');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/logout', 'LogoutController@logout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
