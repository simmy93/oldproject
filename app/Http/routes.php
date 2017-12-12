<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::post('/createevent', [
	'uses' =>'EventController@postCreateEvent',
	'as' => 'event.create']);

Route::get('/allEvents', [
	'uses' =>'EventController@getAllEvents',
	'as' => 'events.all'
	]);

Route::get('event/{id}',[
	'uses' => 'EventController@getShowEvent',
	'as' => 'event.show'
	]);

Route::get('/my', [
	'uses' =>'EventController@getMyEvents',
	'as' => 'events.my'
	]);

Route::get('/find', [
	'uses' =>'EventController@getFindEvents',
	'as' => 'events.find'
	]);

Route::post('coment/{event_id}',[
	'uses' => 'ComentController@postStoreComent',
	'as' => 'coment.store'
	]);

Route::get('/joined', [
	'uses' =>'EventController@getJoinedEvents',
	'as' => 'events.joined'
	]);

Route::get('join/{event_id}', [
	'uses' => 'MemberController@getStoreMember',
	'as' => 'member.store'
	]);

Route::get('delete/{event_id}', [
	'uses' => 'MemberController@getDeleteMember',
	'as' => 'member.delete'
	]);

Route::get('/account', [
	'uses' => 'UserController@getAccount',
	'as' => 'account'
	]);

Route::post('/updateaccount', [
	'uses' => 'UserController@postSaveAccount',
	'as' => 'account.save'
	]);

Route::get('userimage/{filename}',[
	'uses' => 'UserController@getUserImage',
	'as' => 'account.image'
	]);

Route::get('eventimage/{filename}',[
	'uses' => 'EventController@getEventImage',
	'as' => 'event.image'
	]);

Route::get('/allUsers', [
	'uses' =>'UserController@getAllUsers',
	'as' => 'users.all',
	'middleware' => 'roles',
	'roles' => ['Admin']
	]);

Route::post('/allUsers/admin-changes',[
	'uses' => 'UserController@postAdminChanges',
	'as' => 'admin.changes',
	'middleware' => 'roles',
	'roles' => ['Admin']
 	]);



Route::get('login/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

