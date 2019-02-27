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

// find out how to transfer .active class to navbar

route::get('/', function () {
    return view('home');
});
route::get('/components', function () {
    return view('components');
});
route::get('/privacy-policy', function () {
    return view('privacypolicy');
});
route::get('/terms-of-service', function () {
    return view('termsofservice');
});
route::get('/router', function () {
    return view('router');
});

// TEST email route -matto
Route::get('send_test_email', function(){
	Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
	{
		$message->to('matt@nepwebsites.com');
	});
});
