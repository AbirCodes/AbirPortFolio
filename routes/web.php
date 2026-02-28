<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/works', [HomeController::class, 'works'])->name('works');
Route::view('/work-single', 'pages.work-single')->name('work-single');
Route::get('/works/{work}', [HomeController::class, 'workSingle'])->name('works.show');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::view('/blog-single', 'pages.blog-single')->name('blog-single');
Route::get('/blog/{blogPost:slug}', [HomeController::class, 'blogSingle'])->name('blog.show');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::prefix('admin')->group(function (): void {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

    Route::middleware('admin.auth')->group(function (): void {
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
        Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

        Route::post('/settings', [AdminDashboardController::class, 'updateSettings'])->name('admin.settings.update');

        Route::post('/services', [AdminDashboardController::class, 'storeService'])->name('admin.services.store');
        Route::put('/services/{service}', [AdminDashboardController::class, 'updateService'])->name('admin.services.update');
        Route::delete('/services/{service}', [AdminDashboardController::class, 'deleteService'])->name('admin.services.delete');

        Route::post('/works', [AdminDashboardController::class, 'storeWork'])->name('admin.works.store');
        Route::put('/works/{work}', [AdminDashboardController::class, 'updateWork'])->name('admin.works.update');
        Route::delete('/works/{work}', [AdminDashboardController::class, 'deleteWork'])->name('admin.works.delete');

        Route::post('/posts', [AdminDashboardController::class, 'storePost'])->name('admin.posts.store');
        Route::put('/posts/{post}', [AdminDashboardController::class, 'updatePost'])->name('admin.posts.update');
        Route::delete('/posts/{post}', [AdminDashboardController::class, 'deletePost'])->name('admin.posts.delete');
    });
});
