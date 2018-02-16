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
    return view('home');
});

Route::get('/temp', function(){
	return view('temp');
});
///////////////////BLOG///////////////////
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{id}', 'BlogController@showPost');
//////////////////ADMIN///////////////////
Route::get('/admin', 'AdminController@index');
Route::get('/admin/anggota', 'AdminController@showAnggota');
Route::get('/admin/donatur', 'AdminController@showDonatur');
Route::get('/admin/posting', 'AdminController@showposting');
Route::get('/admin/blog', 'AdminController@blog');
Route::get('/admin/blog/create', 'AdminController@createBlog');
Route::get('/admin/blog/edit', 'AdminController@editBlog');
Route::get('/admin/timeline', 'AdminController@timeline');
Route::get('/admin/keuangan', 'AdminController@keuangan');
Route::get('/admin/chat', 'AdminController@chat');
/////////////////ANGGOTA//////////////////
Route::get('/anggota', 'AnggotaController@timeline');
Route::get('/anggota/timeline', 'AnggotaController@timeline');
Route::get('/anggota/blog', 'AnggotaController@blog');
Route::get('/anggota/keuangan', 'AnggotaController@keuangan');
Route::get('/anggota/chat', 'AnggotaController@chat');

////////////////DONATUR///////////////////
Route::get('/donatur', 'DonaturController@timeline');
Route::get('/donatur/timeline', 'DonaturController@timeline');
///////////LOGIN LOGOUT REGISTER////////////////
Route::post('/masuk','AnggotaController@login');
Route::post('/simpandatauser','AnggotaController@savebiouser');
Route::get('/logout',function(){
	Auth::logout();
	return redirect('/');
});
Route::get('/home', 'HomeController@index')->name('home');
