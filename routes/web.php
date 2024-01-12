<?php

use Illuminate\Support\Facades\Route;


/*********** Client  *************/

Route::get('/', \App\Livewire\Client\Home\Index::class)->name('client.home');
Route::get('/pricing', \App\Livewire\Client\Pricing\Index::class)->name('client.pricing');


/*********** Client Login  & Register *************/

Route::group(['prefix' => 'auth', 'middleware' => 'guest:web'], function () {

    Route::name('auth.client')->group(function () {
        Route::get('/client', \App\Livewire\Client\Auth\Index::class);

    });

});



/*********** ADMIN PANEL *************/

Route::group(['prefix' => 'admin', /*'middleware' => 'auth:admin'*/], function () {

    Route::name('admin.')->group(function () {

        Route::get('/dashboard', App\Livewire\Admin\Dashboard\Index::class)->name('dashboard');

    });
});
