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
    return view('pages.index');
});
Route::get('about', function () {
    return view('pages.about');
});
Route::get('properties', function () {
    return view('pages.properties');
});
Route::get('blog', function () {
    return view('pages.blog');
});
Route::get('contact', function () {
    return view('pages.contact');
});

Route::get('property-detail', function () {
    return view('pages.property-detail');
});
Route::get('blog-post', function () {
    return view('pages.blog-post');
});