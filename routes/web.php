<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/carteira', function () {
    return view('wallet.view');
});
Route::get('/dividendos', function () {
    return view('dividend.view');
});
Route::get('/transacoes', function () {
    return view('transation.view');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
