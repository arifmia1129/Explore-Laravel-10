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
})->name('home');

Route::get('welcome', function(){
    return view('welcome');
})->name('welcome');

Route::get('about/{name}/{gender}', function($name, $gender){
    // return view('about',['name'=>$name, 'gender'=>$gender]);
    return view('about',compact('name', 'gender'));
});

Route::fallback(function(){
    return view('404');
});


// group route with middleware
Route::middleware('auth')->group(function(){
    Route::get('dashboard', function() {
        return 'Dashboard';
    });
    Route::get('profile', function() {
        return 'Profile';
    });
});

// group route with prefix

Route::prefix('admin')->group(function(){
    Route::get('profile', function (){
        return 'Admin profile';
    });
    Route::get('dashboard', function (){
        return 'Admin dashboard';
    });
});


// Redirect
Route::get('contact', function(){
    return '<h1>This is contact page</h1>';
});

Route::get('about', function(){
    return '<h1>This is about page</h1>';
    // return redirect('contact');
});

// Route::redirect('about', 'contact', 301);

Route::permanentRedirect('about', 'contact');

// Route view

Route::view('myself', 'myself',['name'=>'Md. Arif Mia']);

