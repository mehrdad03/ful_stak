<?php

use App\Http\Controllers\uploadVideo as adminCourseVideoUpload;
use App\Livewire\Admin\Ck\Upload as adminVideoCkUpload;
use App\Livewire\Client\Category\RoadMap;
use App\Livewire\Client\Home\Index;
use App\Livewire\Client\Pricing\Index as pricingIndex;
use App\Livewire\Client\Course\Index as courseIndex;
use App\Livewire\Client\Auth\Index as authIndex;
use App\Livewire\Client\Basket\Index as basketIndex;
use App\Livewire\Client\Payment\Index as paymentIndex;
use App\Livewire\Client\Profile\Comments;
use App\Livewire\Client\Profile\Dashboard;
use App\Livewire\Client\Profile\Financial;
use App\Livewire\Client\Profile\Messages;
use App\Livewire\Client\Profile\MyCourses;
use App\Livewire\Client\Profile\Questions;
use App\Livewire\Admin\Auth\Index as adminAuthIndex;
use App\Livewire\Admin\Dashboard\Index as adminDashboardIndex;
use App\Livewire\Admin\Course\Index as adminCourseIndex;
use App\Livewire\Admin\Course\Section as adminCourseSection;
use App\Livewire\Admin\Course\Lecture as adminCourseLecture;
use App\Livewire\Admin\Course\Create as adminCourseCreate;
use App\Livewire\Admin\Course\Seo as adminCourseSeo;
use App\Livewire\Admin\User\Index as adminUserIndex;
use App\Livewire\Admin\Order\Index as adminOrderIndex;
use App\Livewire\Admin\Transaction\Index as adminTransactionIndex;
use App\Livewire\Admin\Comment\Index as adminCommentIndex;
use App\Livewire\Admin\Comment\Answer as adminCommentAnswer;
use Illuminate\Support\Facades\Route;


/*********** Client  *************/

Route::get('/', Index::class)->name('client.home');
Route::get('/pricing', pricingIndex::class)->name('client.pricing');
Route::get('/course/{course:url_slug}', courseIndex::class)->name('client.course');
Route::get('/auth/client/logout', [authIndex::class, 'clientLogout'])->name('client.logout')->middleware('auth:web');
Route::get('/road-map/{category:url_slug}', RoadMap::class)->name('client.category.road-map');
Route::get('/cart', basketIndex::class)->name('client.basket')->middleware('auth');
Route::get('/payment/verify', [basketIndex::class, 'zarinPalPayment'])->name('client.zarinpal.verify')->middleware('auth');
Route::get('/payment/status', paymentIndex::class)->name('payment.status');


Route::post('/upload/story', [\App\Livewire\Client\Course\Index::class, 'uploadTempFileStory'])->name('upload.story')->middleware('auth');
Route::delete('/upload/story', [\App\Livewire\Client\Course\Index::class, 'deleteTempleFile'])->name('upload.story.delete')->middleware('auth');

/*********** Client Login  & Register *************/

Route::group(['prefix' => 'auth', 'middleware' => 'guest:web'], function () {

    Route::name('auth.client')->group(function () {
        Route::get('/client', authIndex::class);
        Route::get('/gmail', [authIndex::class, 'redirectToProvider'])->name('.gmail');
        Route::get('/gmail/callback', [authIndex::class, 'handleProviderCallback'])->name('.gmail.callback');
        //Route::get('/github', [\App\Livewire\Client\Auth\Index::class, 'redirectToGithubProvider'])->name('.github');
        //Route::get('/github/callback', [\App\Livewire\Client\Auth\Index::class, 'handleGithubProviderCallback'])->name('.github.callback');

    });

});

/*********** Client Profile  *************/

Route::group(['prefix' => 'profile', 'middleware' => 'auth'], function () {

    Route::name('client.profile.')->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('dashboard');
        Route::get('/my-courses', MyCourses::class)->name('my-courses');
        Route::get('/questions', Questions::class)->name('questions');
        Route::get('/financial', Financial::class)->name('financial');
        Route::get('/messages', Messages::class)->name('messages');

    });
});

/*********** ADMIN PANEL *************/

Route::get('auth/admin/logout', [adminAuthIndex::class, 'adminLogout'])->name('auth.admin.logout')->middleware('auth:admin');
Route::get('on5H)D;ES;EWWJ&/auth', adminAuthIndex::class)->name('auth.admin');

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {

    Route::name('admin.')->group(function () {
        Route::get('/dashboard', adminDashboardIndex::class)->name('dashboard');
        Route::get('/courses', adminCourseIndex::class)->name('course.index');
        Route::get('/course/{courseId}/section', adminCourseSection::class)->name('course.section');
        Route::get('/course/section/{sectionId}/lecture', adminCourseLecture::class)->name('course.section.lecture');
        Route::get('/course/create', adminCourseCreate::class)->name('course.create');
        Route::get('/course/{courseId}/seo', adminCourseSeo::class)->name('course.seo');
        Route::post('/ck-upload', [adminVideoCkUpload::class, 'upload'])->name('ck-upload');
        Route::get('/users', adminUserIndex::class)->name('users');
        Route::get('/orders', adminOrderIndex::class)->name('orders');
        Route::get('/transactions', adminTransactionIndex::class)->name('transactions');
        Route::get('/comments', adminCommentIndex::class)->name('comments');
        Route::get('/comments/{comment}/answer', adminCommentAnswer::class)->name('comments.answer');
        Route::post('/upload-video/{courseId?}/{lectureId?}/{sectionId?}', [adminCourseVideoUpload::class, 'uploadVideo'])->name('upload-video');
    });
});
