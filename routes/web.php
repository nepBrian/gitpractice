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
