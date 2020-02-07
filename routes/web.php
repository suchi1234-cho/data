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
    $title = " เกิดไรขึ้น!!!!";
    $content = "ยินดีตอนรับสู่ Data";
    return view('welcome')->with([
        'title'=>$title,
        'content' => $content
        ]);
})->name('home');

Route::get('/contact', function () {
    $title = " มันมาแล้ว!!!!";
    $content = "ยินดีตอนรับสู่ contact";
    return view('contact')->with([
        'title'=>$title,
        'content' => $content
        ]);
})->name('contact')->middleware('auth');

Route::get('/about', function () {
    $title = " โดดีโด่!!!!";
    $content = "ยินดีตอนรับสู่ about";
    return view('about')->with([
        'title'=>$title,
        'content' => $content
        ]);
    
})->name('about');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
