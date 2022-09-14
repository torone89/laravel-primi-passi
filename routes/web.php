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

Route::get('/', function () {
    $students = ['francesco tovani', 'francesco tovani', 'francesco tovani'];
    return view('home', compact('students'));
})->name('/');


Route::get('/paginadue', function () {
    return view('test');
})->name('test');


Route::get('/paginatre', function () {
    return view('paginatre');
})->name('paginatre');
