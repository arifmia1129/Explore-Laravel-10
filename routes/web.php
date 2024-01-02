<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('welcome', function(){
    return view('welcome');
});

Route::get('about/{name}/{gender}', function($name, $gender){
    // return view('about',['name'=>$name, 'gender'=>$gender]);
    return view('about',compact('name', 'gender'));
});
