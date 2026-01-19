<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\ImageGallery;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/academic/kindergarten', [HomeController::class, 'kindergarten'])->name('academic/kindergarten');
Route::get('/academic/primary_school', [HomeController::class, 'primarySchool'])->name('academic/primary_school');
Route::get('/academic/high_school', [HomeController::class, 'highSchool'])->name('academic/high_school');

Route::get('/about_us', [HomeController::class, 'aboutUs'])->name('about_us');
Route::get('/school_profile', [HomeController::class, 'schoolProfile'])->name('school_profile');
Route::get('/vision_mission', [HomeController::class, 'visionMission'])->name('vision_mission');
Route::get('/curriculum', [HomeController::class, 'curriculum'])->name('curriculum');

Route::get('/flagship_program', [HomeController::class, 'flagshipProgram'])->name('flagship_program');

Route::get('/admissions', [HomeController::class, 'admissions'])->name('admissions');
Route::get('/contact_us', [HomeController::class, 'contactUs'])->name('contact_us');
Route::post('/contact', [HomeController::class, 'storeMessage'])
    ->middleware('throttle:10,1') // max 10 submissions per minute
    ->name('contact.submit');

Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');
Route::get('/photo_gallery', [HomeController::class, 'photoGallery'])->name('photo_gallery');
Route::get('/news_events', [HomeController::class, 'newsEvents'])->name(' news_events');
Route::get('/news_events/{id}', [HomeController::class, 'newsEventDetail'])->name('news_event_detail');
Route::get('/articles', [HomeController::class, 'articles'])->name('articles');
Route::get('/articles/{id}', [HomeController::class, 'articleDetail'])->name('article_detail');
Route::get('/what_makes_us_different', [HomeController::class, 'whatMakesUsDifferent'])->name('what_makes_us_different');


// Routes admin

Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.login');

Route::post('/admin/login', [LoginController::class, 'login']);

Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');




Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [Dashboard::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/image', [ImageGallery::class, 'index'])->name('admin.image');
    Route::get('/admin/image/create', [ImageGallery::class, 'create'])->name('admin.image.create');
    Route::post('/admin/image/store', [ImageGallery::class, 'store'])->name('admin.image.store');
    Route::delete('/admin/image/{gallery}', [ImageGallery::class, 'destroy'])->name('admin.image.destroy');
    Route::get('/admin/image/edit', [ImageGallery::class, 'edit'])->name('admin.image.edit');

    Route::get('/admin/articles', [Dashboard::class, 'index'])->name('admin.articles');
});
