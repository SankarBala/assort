<?php

use App\Http\Controllers\AuthController;
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
Route::get('land-wanted', [BaseController::class, 'land_wanted'])->name('land-wanted');
Route::post('land-wanted', [BaseController::class, 'store_land_wanted'])->name('store-land-wanted');
Route::get('flat-buy-sale', [BaseController::class, 'flat_buy_sale'])->name('flat-buy-sale');
Route::post('flat-buy-sale', [BaseController::class, 'store_flat_buy_sale'])->name('store-flat-buy-sale');

Route::get('project-type/{project_type:slug}', [BaseController::class, 'project_type'])->name('project-type');
Route::get('projects', [BaseController::class, 'projects'])->name('projects');
Route::get('project/{project:slug}', [BaseController::class, 'project'])->name('project');
Route::get('search', [BaseController::class, 'search'])->name('search');
// Route::resource('gallery', GalleryController::class)->names('gallery');



// Auth routes


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');