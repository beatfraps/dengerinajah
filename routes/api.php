<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//members
Route::get('/members','membersController@getAll');
Route::get('/member/{id}','membersController@showMember');
Route::post('/member/{id}','membersController@createMember');

//artist
Route::get('/artists','artistsController@getAll');
Route::get('/artist/{id}','artistsController@showArtist');

//songs
Route::get('/song/{artist_id}', 'songsController@index');

//subscription
Route::get('/subscription/{member_id}','subscriptionsController@getAll');
Route::post('/subscription/{member_id}/lagu/{artist_id}','subscriptionsController@create');
Route::get('/subscription/{member_id}/hapus/{artist_id}','subscriptionsController@destroy');