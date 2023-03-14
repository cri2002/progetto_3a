<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\LoginController;
use App\Models\Article;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/prodotto', function () {
    return view('prodotto');
});

Route::get('/sport', function () {
    return view('sport');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/categoria', function (){
    return view('categoria');
});
