<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin', /*'middleware' => 'auth:admin'*/], function () {

    Route::name('admin.')->group(function () {

        Route::get('/dashboard', App\Livewire\Admin\Dashboard\Index::class)->name('dashboard');

    });
});
