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

  Route::get('discussions/{slug}', [
      'uses' => 'DiscussionsController@show',
      'as' => 'discussion'
    ]);

  Route::get('channel/{slug}', [
    'uses' => 'ForumController@channel',
    'as' => 'channel'
  ]);

Route::group(['middleware' => 'auth'], function(){

  Route::resource('channels','ChannelsController');

  Route::post('/discussions/store', [
    'uses' => 'DiscussionsController@store',
    'as' => 'discussions.store'
  ]);

  Route::get('/discussions/create/new',[
  'uses' => 'DiscussionsController@create',
  'as' => 'discussions.create'
]);


  Route::post('/discussions/replay/{id}', [
      'uses' => 'DiscussionsController@replay',
      'as' => 'discussion.replay'
    ]);

  Route::get('/discussion/{id}/watcher', [
      'uses' => 'WatchersController@watch',
      'as' => 'discussion.watch'
    ]);

  Route::get('/discussion/{id}/unwatcher', [
      'uses' => 'WatchersController@unwatch',
      'as' => 'discussion.unwatch'
    ]);

  Route::get('/replay/like/{id}', [
      'uses' => 'LikesController@like',
      'as'   => 'replay.like'
    ]);

  Route::get('/replay/unlike/{id}', [
    'uses' => 'LikesController@unlike',
    'as'   => 'replay.unlike'
  ]);

});

Route::get('/github/auth', [
  'uses' => 'SocialsController@auth',
  'as' => 'github.auth'
]);

Route::get('/github/redirect', [
  'uses' => 'SocialsController@callback',
  'as' => 'social.callback'
]);

Route::get('/forum', 'ForumController@index')->name('forum');
