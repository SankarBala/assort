<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectTypeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [AdminController::class, 'home'])->name('home');
Route::get('/site-details', [AdminController::class, 'site_details'])->name('site-details');
Route::get('/site-edit', [AdminController::class, 'site_edit'])->name('site-edit');
Route::get('/site-logo', [AdminController::class, 'site_logo'])->name('site-logo');
// Route::get('term-of-use', [BaseController::class, 'term_of_use'])->name('term-of-use');
// Route::get('about-us', [BaseController::class, 'about_us'])->name('about-us');
// Route::get('contact-us', [BaseController::class, 'contact_us'])->name('contact-us');
// Route::get('message-from-md', [BaseController::class, 'message_from_md'])->name('message-from-md');

Route::resource('project', ProjectController::class)->names('project');
Route::resource('gallery', GalleryController::class)->names('gallery');
Route::resource('user', UserController::class)->names('user');
Route::resource('project-type', ProjectTypeController::class)->names('project-type');
Route::resource('area', AreaController::class)->names('area');
Route::resource('location', LocationController::class)->names('location');
