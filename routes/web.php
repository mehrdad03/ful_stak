<?php

use App\Livewire\Client\Profile\Comments;
use App\Livewire\Client\Profile\Dashboard;
use App\Livewire\Client\Profile\Financial;
use App\Livewire\Client\Profile\Messages;
use App\Livewire\Client\Profile\MyCourses;
use App\Livewire\Client\Profile\Questions;
use Illuminate\Support\Facades\Route;


/*********** Client  *************/

Route::get('/', \App\Livewire\Client\Home\Index::class)->name('client.home');
Route::get('/pricing', \App\Livewire\Client\Pricing\Index::class)->name('client.pricing');
Route::get('/course/{course:url_slug}', \App\Livewire\Client\Course\Index::class)->name('client.course');
Route::get('/auth/client/logout', [\App\Livewire\Client\Auth\Index::class, 'clientLogout'])->name('client.logout')->middleware('auth:web');


Route::get('/road-map/{category:url_slug}', \App\Livewire\Client\Category\RoadMap::class)->name('client.category.road-map');




Route::get('/basket', App\Livewire\Client\Basket\Index::class)->name('client.basket');




/*********** Client Login  & Register *************/

Route::group(['prefix' => 'auth', 'middleware' => 'guest:web'], function () {

    Route::name('auth.client')->group(function () {
        Route::get('/client', \App\Livewire\Client\Auth\Index::class);
        Route::get('/gmail', [\App\Livewire\Client\Auth\Index::class, 'redirectToProvider'])->name('.gmail');
        Route::get('/gmail/callback', [\App\Livewire\Client\Auth\Index::class, 'handleProviderCallback'])->name('.gmail.callback');
        //Route::get('/github', [\App\Livewire\Client\Auth\Index::class, 'redirectToGithubProvider'])->name('.github');
        //Route::get('/github/callback', [\App\Livewire\Client\Auth\Index::class, 'handleGithubProviderCallback'])->name('.github.callback');

    });

});

/*********** Client Profile  *************/

Route::group(['prefix' => 'profile', /*'middleware' => 'guest:web'*/], function () {

    Route::name('client.profile')->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('dashboard');
        Route::get('/my-courses', MyCourses::class)->name('my-courses');
        Route::get('/questions', Questions::class)->name('questions');
        Route::get('/financial', Financial::class)->name('financial');
        Route::get('/messages', Messages::class)->name('messages');
        Route::get('/comments', Comments::class)->name('comments');
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
        Route::post('/upload-video/{courseId}/{lectureId}/{sectionId}', [\App\Http\Controllers\uploadVideo::class, 'uploadVideo'])->name('upload-video');
    });
});
