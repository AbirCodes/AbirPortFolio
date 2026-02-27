<?php

use App\Http\Controllers\AdminContentController;
use App\Http\Controllers\AdminAuthController;
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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('admin')->group(function (): void {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

    Route::middleware('admin.auth')->group(function (): void {
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

        Route::get('/', [AdminContentController::class, 'index'])->name('admin.content.index');
        Route::get('/settings', [AdminContentController::class, 'settingsPage'])->name('admin.content.settings.page');
        Route::get('/portfolio-items', [AdminContentController::class, 'portfolioPage'])->name('admin.content.portfolio-items.page');
        Route::get('/breaking-news', [AdminContentController::class, 'breakingNewsPage'])->name('admin.content.breaking-news.page');
        Route::get('/blog-posts', [AdminContentController::class, 'blogPostsPage'])->name('admin.content.blog-posts.page');
        Route::get('/recent-post-links', [AdminContentController::class, 'recentLinksPage'])->name('admin.content.recent-post-links.page');

        Route::post('/settings', [AdminContentController::class, 'updateSettings'])->name('admin.content.settings.update');

        Route::post('/portfolio-items', [AdminContentController::class, 'storePortfolioItem'])->name('admin.content.portfolio-items.store');
        Route::put('/portfolio-items/{portfolioItem}', [AdminContentController::class, 'updatePortfolioItem'])->name('admin.content.portfolio-items.update');
        Route::delete('/portfolio-items/{portfolioItem}', [AdminContentController::class, 'deletePortfolioItem'])->name('admin.content.portfolio-items.delete');

        Route::post('/breaking-news', [AdminContentController::class, 'storeBreakingNews'])->name('admin.content.breaking-news.store');
        Route::put('/breaking-news/{breakingNews}', [AdminContentController::class, 'updateBreakingNews'])->name('admin.content.breaking-news.update');
        Route::delete('/breaking-news/{breakingNews}', [AdminContentController::class, 'deleteBreakingNews'])->name('admin.content.breaking-news.delete');

        Route::post('/blog-posts', [AdminContentController::class, 'storeBlogPost'])->name('admin.content.blog-posts.store');
        Route::put('/blog-posts/{blogPost}', [AdminContentController::class, 'updateBlogPost'])->name('admin.content.blog-posts.update');
        Route::delete('/blog-posts/{blogPost}', [AdminContentController::class, 'deleteBlogPost'])->name('admin.content.blog-posts.delete');

        Route::post('/recent-post-links', [AdminContentController::class, 'storeRecentPostLink'])->name('admin.content.recent-post-links.store');
        Route::put('/recent-post-links/{recentPostLink}', [AdminContentController::class, 'updateRecentPostLink'])->name('admin.content.recent-post-links.update');
        Route::delete('/recent-post-links/{recentPostLink}', [AdminContentController::class, 'deleteRecentPostLink'])->name('admin.content.recent-post-links.delete');
    });
});
