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
route::get('/contact', function () {
    return view('contact');
});
route::get('/components', function () {
    return view('components');
});
