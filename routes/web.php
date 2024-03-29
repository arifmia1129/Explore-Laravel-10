<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('store', [HomeController::class, 'store'])->name('store');

Route::get('delete', [HomeController::class, 'delete'])->name('delete');

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
// Route::middleware('auth')->group(function(){
//     Route::get('dashboard', function() {
//         return 'Dashboard';
//     });
//     Route::get('profile', function() {
//         return 'Profile';
//     });
// });

// group route with prefix

// Route::prefix('admin')->group(function(){
//     Route::get('profile', function (){
//         return 'Admin profile';
//     });
//     Route::get('dashboard', function (){
//         return 'Admin dashboard';
//     });
// });


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


// Regular expression constraints

Route::get('/student/{id}', function ($id){
    return 'Student id is:'.' '.$id;
})->where('id','[0-9]+');

Route::get('username/{name}', function($name){
    return 'Valid username: '.$name;
})->where('name', '[a-zA-Z0-9]+');



// Example route for testing global expression constraints

Route::get('employee/{id}', function($id){
    return 'Employee id is: '.$id;
});

// nested views directories
Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('customer/dashboard', function () {
    return view('customer.dashboard');
});


Route::get('person', function() {
    // return view('person',['name'=>'Md. Arif Mia', 'age'=>'30', 'gender'=>'Male']);
    // return view('person')->with('name', 'Md. Arif Mia')->with('age', '30')->with('gender', 'male');
    // return view('person')->with(['name'=>'Md. Arif Mia', 'age'=>'30', 'gender'=>'Male']);

    $name = 'Md. Arif Mia';
    $age = '32';
    $gender = 'Male';

    return view('person', compact('name', 'age', 'gender'));

});



// Route::get('/', function (){
//     $data = '';
//     return view('person',compact('data'));
// });

Route::get('/blade-directive', function () {
    $city = 'Gaibandha';
    $country = 'Bangladesh';

    $name = '';

    return view('directive', compact('city', 'country', 'name'));

});


Route::get('admin', function () {
    return view('admin.home');
});

Route::get('admin/settings', function () {
    return view('admin.settings');
});


Route::get('user/{id}', [UserController::class, 'index']);


Route::resource('teacher', TeacherController::class);


Route::get('blog', BlogController::class)->middleware('test_route');


Route::get('/admission', [AdmissionController::class, 'index'])->middleware('test_route');

Route::post('/admission/store', [AdmissionController::class,'store']);


Route::group(['middleware'=>'custom'], function () {
    Route::get('/book', [BookController::class, 'index']);
    Route::get('/book/{id}', [BookController::class, 'book_details']);
});

Route::get('/store-session-data', function (Request $request) {

    $request->session()->put([
        'username'=>'mdarifmia',
        'role'=>'admin'
    ]);


    session([
        'username'=>'mdarifmia',
        'role'=>'admin',
        'token'=> 'test_token',
        'mobile'=> '01849676331',
        'email'=>'arif.vtti@gmail.com'
    ]);

    $request->session()->flash('success', 'true');

});


Route::get('get-session-data', function (Request $request) {
    // dd(session()->all());

    // echo $request -> session() -> get('username');
    // echo '<br>';
    // echo $request -> session () -> get('role');

    // echo session('username');
    // echo '<br>';
    // echo session('role');

    // if($request->session()->has('mobile')) {
    //     echo $request->session()->get('mobile');
    // }else{
    //     echo 'There is no mobile session field';
    // }


    dd($request -> session()->all());

});


Route::get('delete-session-data', function (Request $request) {
    // $request -> session() -> forget('username');

    $request -> session() -> flush();
});


Route::get('contact', [ContactController::class, 'index']);
Route::post('contact/store', [ContactController::class, 'store'])->name('contact_store');


Route::get('post', [PostController::class, 'index']);

Route::post('/create-post', [PostController::class, 'store'])->name('post_store');
