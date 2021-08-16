<?php

use Illuminate\Support\Facades\Route;

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

//LARAVEL METHOD TYPES

Route::get('/', function () { //welcome url / index page  USING GET METHOD
    return view('welcome');
});
Route::post('/contact', function (){ // POST METHOD
    return 'This is contact page';
});

Route::put('/admin/dashboard', function (){ // PUT METHOD
    return '<h3>Admin Dashboard</h3>';
});

Route::patch('/user/profile', function (){ // PATCH METHOD
    return '<h3>Admin Dashboard</h3>';
});

Route::delete('/user/login', function (){ // DELETE METHOD
    return '<h3>Admin Dashboard</h3>';
});
Route::options('/user/registration', function (){ // OPTIONS METHOD
    return '<h3>Admin Dashboard</h3>';
});

// BASIC ROUTINGS
Route::get('my/profile', function (){
   return redirect()->route('user-profile');
});

Route::get('/profile/details', function (){
    return redirect()->route('member-profile');
});


// NAME ROUTING

Route::get('/user/profile', function (){
    return '<h3>User Profile</h3>';
})->name('user-profile');

Route::get('/silver/member', function (){
    return '<h3>Goldern/Silver/Platinum</h3>';
})->name('member-profile');

















