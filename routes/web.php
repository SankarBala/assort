<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [BaseController::class, 'home'])->name('home');
Route::get('term-of-use', [BaseController::class, 'term_of_use'])->name('term-of-use');
Route::get('about-us', [BaseController::class, 'about_us'])->name('about-us');
Route::get('contact-us', [BaseController::class, 'contact_us'])->name('contact-us');
Route::get('message-from-md', [BaseController::class, 'message_from_md'])->name('message-from-md');

Route::resource('project', ProjectController::class)->names('project');
Route::resource('gallery', GalleryController::class)->names('gallery');
