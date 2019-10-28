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
    return view('backoffice.dashboard');
});

Route::get('/publicacoes', function () {
    return view('backoffice.publicacoes');
});

Route::get('/categorias', function () {
    return view('backoffice.categorias');
});

Route::get('/teste', function () {
    return view('teste');
});
