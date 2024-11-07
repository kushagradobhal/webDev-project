<?php

use Illuminate\Support\Facades\Route;
Route::get('/login',function (){
    return view('loginpage');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/studentLogin', function () {
    return view('studentLogin');
});

Route::get('/adminPage', function () {
    return view('adminHome');
});

Route::get('/foregtpass', function(){
    return view('forgetpass');
});

Route:: get('/studhome', function(){
    return view('studhome');
});

Route::get('/verify', function () {
    return view('construction');
});

Route::get('/adminEvent', function () {
    return view('adminEvent');
});

