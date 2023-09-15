<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[WelcomeController::class, 'index'])->name('welcomePage');
Route::get('/about-us',[WelcomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact',[WelcomeController::class, 'contact'])->name('contact');

//Services Route
Route::get('/services/web_development',[ServiceController::class, 'webDev'])->name('webDev');
Route::get('/services/app_development',[ServiceController::class, 'appDev'])->name('appDev');
Route::get('/services/graphics_design',[ServiceController::class, 'graphics'])->name('graphics');
Route::get('/services/digital_marketing',[ServiceController::class, 'marketing'])->name('marketing');
Route::get('/services/lead_generation',[ServiceController::class, 'lead'])->name('lead');
Route::get('/services/virtual_assistant',[ServiceController::class, 'virtual'])->name('virtual');
Route::get('/services/ecommerce_solution',[ServiceController::class, 'ecommerce'])->name('ecommerce');
Route::get('/services/admin_support',[ServiceController::class, 'admin'])->name('admin');



//Products Route
Route::get('/products/all-projects',[ProductsController::class, 'webProject'])->name('products');


//Send Mail

Route::post('/mail/send',[MailController::class, 'sendMail'])->name('mailSend');


//Testimonial Route
Route::get('/testimonial',[WelcomeController::class, 'testimonial'])->name('testimonial');

//Pricing Page Route
Route::get('/pricing',[WelcomeController::class, 'pricing'])->name('pricing');

//Get IT Support
Route::get('/getSupport',[SupportController::class, 'getSupport'])->name('getItSupport');
Route::post('/getSupport/send',[SupportController::class, 'sendQuotes'])->name('sendQuotes');
