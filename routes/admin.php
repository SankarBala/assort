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
Route::put('/site-update/{site}', [AdminController::class, 'site_update'])->name('site-update');
Route::get('/site-logo', [AdminController::class, 'site_logo'])->name('site-logo');
Route::put('/site-logo', [AdminController::class, 'site_logo_update'])->name('site-logo-update');

Route::resource('project', ProjectController::class)->names('project');
Route::get('/project/{project:slug}/photo', [ProjectController::class, 'photo'])->name('project.photo.show');
Route::post('/project/{project:slug}/photo', [ProjectController::class, 'photo_update'])->name('project.photo.store');
Route::delete('/project/{project:slug}/photo', [ProjectController::class, 'photo_delete'])->name('project.photo.delete');

Route::get('/project/{project:slug}/photos/all', [ProjectController::class, 'all_photos'])->name('project.photos.all');
Route::post('/project/{project:slug}/photos/add', [ProjectController::class, 'add_photo'])->name('project.photos.add');
Route::delete('/project/{project:slug}/photos/{gallery}/delete', [ProjectController::class, 'delete_photo'])->name('project.photos.photo.delete');


Route::resource('gallery', GalleryController::class)->names('gallery');


Route::resource('user', UserController::class)->names('user');
Route::resource('project-type', ProjectTypeController::class)->names('project-type');
Route::resource('area', AreaController::class)->names('area');
Route::resource('location', LocationController::class)->names('location');
