<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider and all of them will
 * | be assigned to the "web" middleware group. Make something great!
 * |
 */

//  Register Route
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
// Login Route
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Default Route
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::put('/home', [HomeController::class, 'update_pwd']);

// Admin Route
Route::resource('/admin/posts', AdminController::class)->except('show')->names('admin.posts');

// Post Route
Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/categories/{category}', [PostController::class, 'postsByCategory'])->name('posts.byCategory');
Route::get('/tags/{tag}', [PostController::class, 'postsByTag'])->name('posts.byTag');
Route::post('/{post}/comment', [PostController::class, 'comment'])->name('posts.comment');
