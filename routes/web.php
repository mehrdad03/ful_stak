<?php

use Illuminate\Support\Facades\Route;


/*********** Client  *************/

Route::get('/', \App\Livewire\Client\Home\Index::class)->name('client.home');
Route::get('/pricing', \App\Livewire\Client\Pricing\Index::class)->name('client.pricing');
Route::get('/course', \App\Livewire\Client\Course\Index::class)->name('client.course');



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
        Route::get('/courses', App\Livewire\Admin\Course\Index::class)->name('course.index');
        Route::get('/course/{courseId}/section', App\Livewire\Admin\Course\Section::class)->name('course.section');
        Route::get('/course/section/{sectionId}/lecture', App\Livewire\Admin\Course\Lecture::class)->name('course.section.lecture');
        Route::get('/course/create', App\Livewire\Admin\Course\Create::class)->name('course.create');
        Route::get('/course/{courseId}/seo', App\Livewire\Admin\Course\Seo::class)->name('course.seo');
        Route::post('/ck-upload', [\App\Http\Livewire\Admin\Ck\Upload::class, 'upload'])->name('ck-upload');
        Route::get('/users', \App\Livewire\Admin\User\Index::class)->name('users');
        Route::post('/upload-video/{courseId}/{lectureTitle}/{lectureId}', [\App\Http\Controllers\uploadVideo::class, 'uploadVideo'])->name('upload-video');
    });
});
