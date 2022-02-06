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
if (env('APP_ENV') === 'lokal') {
    URL::forceSchema('https');
}
Auth::routes();
Route::group([
	'middleware' => [
		'auth'
	]
], function () {

	Route::get('/','HomeController@index');
	Route::get('home','HomeController@index');
	Route::get('logout', array('uses' => 'HomeController@logout'));
	Route::get('slide','SlideController@index');
	Route::get('changePassword','HomeController@showChangePasswordForm');
	Route::post('changePassword','HomeController@changePassword')->name('changePassword');

	Route::get('profil','ProfilController@index');
	Route::post('profil', ['uses' => 'ProfilController@store']);
	Route::get('profil/{id}', ['uses' => 'ProfilController@edit']);
	Route::delete('profil/{id}', ['uses' => 'ProfilController@destroy']);

	Route::get('users','RegisterController@index');
	Route::get('chat','ChatController@index');
	Route::get('chat/from/{id}','ChatController@curr_chat');
	Route::get('chat/get_chat/{from}/{to}','ChatController@get_chat');
	Route::get('dtRegister', 'RegisterController@dt');
	Route::get('users/view/{id}','RegisterController@view');
	Route::get('users/destroy/{id}','RegisterController@destroy');

	Route::get('pengajuan','PengajuanController@index');
	Route::get('pengajuan/sign/1','PengajuanController@sign_a');
	Route::get('pengajuan/sign/2','PengajuanController@sign_b');
	Route::get('pengajuan/meetup','PengajuanController@meetup');
	Route::get('pengajuan/verified','PengajuanController@verified');
	Route::get('pengajuan/deal','PengajuanController@deal');
	Route::get('pengajuan/cancel','PengajuanController@cancel');
	Route::get('pengajuan/view/{id}','PengajuanController@view');
	Route::post('pengajuan/rjc', ['uses' => 'PengajuanController@rjc']);
	Route::get('pengajuan/reason/{id}','PengajuanController@reason');
	Route::get('pengajuan/aprv/{id}','PengajuanController@aprv');

	Route::get('dtwaiting', 'PengajuanController@dt_waiting');
	Route::get('dtverified', 'PengajuanController@dt_verified');
	Route::get('dtsign1', 'PengajuanController@dt_sign_1');
	Route::get('dtsign2', 'PengajuanController@dt_sign_2');
	Route::get('dtmeet', 'PengajuanController@dt_meet');
	Route::get('dtdeal', 'PengajuanController@dt_deal');
	Route::get('dtcancel', 'PengajuanController@dt_cancel');

	Route::get('calendar', 'CalendarController@index');
	Route::get('get_events/{start}/{end}', ['uses' => 'CalendarController@get_events']);
	Route::post('upload_slide', ['uses' => 'CalendarController@upload_slide']);
	Route::post('slider/destroy', ['uses' => 'CalendarController@destroy']);
	Route::get('getslider', ['uses' => 'CalendarController@get_slider']);

	Route::get('iklan','IklanController@index');
	Route::get('iklan/need','IklanController@need');	
	Route::get('iklan/approve','IklanController@approve');	
	Route::get('iklan/all','IklanController@all');
	Route::get('iklan/approved','IklanController@approved');
	Route::get('iklan/iklan_all','IklanController@iklan_all');
	Route::get('iklan/reject','IklanController@reject');
	Route::get('iklan/iklan_reject','IklanController@iklan_reject');
	Route::get('iklan/view/{id}','IklanController@view');
	Route::post('iklan/rjc', ['uses' => 'IklanController@rjc']);
	Route::get('iklan/aprv/{id}','IklanController@aprv');
	
	Route::get('sendbasicemail','MailController@basic_email');
	Route::get('sendhtmlemail','MailController@html_email');
	
	
});




