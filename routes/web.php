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
    return view('index',[
        'name'=>'Akombo Neville'
    ]);
});

Route::get('/hello',function () {
    return 'Hello World';
})->name('hello');
Route::get('/greet/{name}',function($name){
    return 'Welcome '. $name .'!';
});
Route::get('/redirect-hello',function(){
    return redirect()->route('hello');
});

Route::fallback(function(){
    return 'Page not found 404';
});