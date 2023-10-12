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
    return view('welcome');
});
Route::get('/quem-somos', function () {
    return view('quem-somos');
});
Route::get('/auditoria', function () {
    return view('auditoria');
});
Route::get('/tributario', function () {
    return view('tributario');
});
Route::get('/consultoria', function () {
    return view('consultoria');
});
Route::get('/consultoria-de-rh', function () {
    return view('consultoria-de-rh');
});
Route::get('/bps', function () {
    return view('bps');
});
Route::get('/contato', function () {
    return view('contato');
});
Route::get('/clientes', function () {
    return view('clientes');
});

