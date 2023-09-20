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

use Modules\Dashboard\Http\Controllers\AdminController;
use Modules\Dashboard\Http\Controllers\ClientController;
use Modules\Dashboard\Http\Controllers\DashboardController;
use Modules\Dashboard\Http\Controllers\SampleController;
use Modules\Dashboard\Http\Controllers\TestimonialController;
use Modules\Dashboard\Http\Controllers\WorkController;

Route::prefix('dashboard')->group(function() {




    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.loginForm');

    Route::get('/register', [DashboardController::class, 'register'])->name('dashboard.register');


    Route::post('/logout', [AdminController::class, 'logout'])->name('dashboard.logout');
    Route::post('/login', [AdminController::class, 'login'])->name('dashboard.login');



    Route::get('/home', [DashboardController::class, 'home'])->name('dashboard.home');



    //Testimonial Route
    Route::get('/testimonials/list', [TestimonialController::class, 'index'])->name('dashboard.testimonials');
    Route::get('/testimonials/new', [TestimonialController::class, 'create'])->name('dashboard.newTestimonial');
    Route::post('/testimonials/add', [TestimonialController::class, 'store'])->name('dashboard.addTestimonial');


    //Get IT Support Route

    Route::get('/support/list', [DashboardController::class, 'getSupport'])->name('dashboard.getSupport');


    Route::get('/support/unSendSupport/{id}', [DashboardController::class, 'unSendSupport'])->name('dashboard.unSendSupport');
    Route::get('/support/viewDetails/{id}', [DashboardController::class, 'viewDetails'])->name('dashboard.viewSupportDetails');

    Route::post('/support/reply', [DashboardController::class, 'sendReply'])->name('dashboard.supportReply');


//Client Data Route

    Route::get('/client/list', [ClientController::class, 'index'])->name('dashboard.clientList');


    //Members Router

    Route::get('/members/list', [AdminController::class, 'memberList'])->name('dashboard.members');
    Route::post('/registration', [AdminController::class, 'registration'])->name('dashboard.registration');
    Route::get('/member/view/{id}', [AdminController::class, 'detailsMember'])->name('dashboard.viewMember');


    //All Sample Route List
    Route::get('/member/list', [SampleController::class, 'index'])->name('dashboard.sampleList');
    Route::get('/member/delete/{id}', [SampleController::class, 'destroy'])->name('dashboard.deleteSample');
    Route::post('/member/add', [SampleController::class, 'store'])->name('dashboard.addSample');




    //All Previous Work Route
    Route::get('/previous/work/list', [WorkController::class, 'index'])->name('dashboard.workList');
    Route::post('/previous/work/add', [WorkController::class, 'store'])->name('dashboard.addWork');
    Route::get('/previous/work/delete/{id}', [WorkController::class, 'destroy'])->name('dashboard.deleteWork');

});
