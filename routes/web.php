<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tutorial/{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewCategoryPost']);
Route::get('/tutorial/{category_slug}/{post_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewPost']);


Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('category', [App\Http\Controllers\admin\CategoryController::class, 'index']);
    Route::get('approvalRequest', [App\Http\Controllers\admin\ApprovalRequest::class, 'index']);
    Route::get('journalistapprovalRequest', [App\Http\Controllers\admin\ApprovalRequest::class, 'UserApproval']);
    Route::get('add-category', [App\Http\Controllers\admin\CategoryController::class, 'create']);
    Route::post('add-category', [App\Http\Controllers\admin\CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}', [App\Http\Controllers\admin\CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}', [App\Http\Controllers\admin\CategoryController::class, 'update']);
    // Route::get('delete-category/{category_id}', [App\Http\Controllers\admin\CategoryController::class, 'destroy']);
    Route::post('delete-category', [App\Http\Controllers\admin\CategoryController::class, 'destroy']);
    Route::get('post', [App\Http\Controllers\admin\PostController::class, 'index']);
    Route::get('add-post', [App\Http\Controllers\admin\PostController::class, 'create']);
    Route::post('add-post', [App\Http\Controllers\admin\PostController::class, 'store']);
    Route::get('post/{post_id}', [App\Http\Controllers\admin\PostController::class, 'edit']);
    Route::put('update-post/{post_id}', [App\Http\Controllers\admin\PostController::class, 'update']);
    Route::get('delete-post/{post_id}', [App\Http\Controllers\admin\PostController::class, 'destroy']);
    Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('users/{user_id}', [App\Http\Controllers\admin\UserController::class, 'edit']);
    Route::put('update-user/{user_id}', [App\Http\Controllers\admin\UserController::class, 'update']);
});
Route::prefix('journalist')->middleware('auth','isJournalist')->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Journalist\DashboardController::class, 'index']);
    Route::get('post', [App\Http\Controllers\Journalist\PostController::class, 'index']);
    Route::get('add-post', [App\Http\Controllers\Journalist\PostController::class, 'create']);
    Route::post('add-post', [App\Http\Controllers\Journalist\PostController::class, 'store']);
    Route::get('post/{post_id}', [App\Http\Controllers\Journalist\PostController::class, 'edit']);
    Route::put('update-post/{post_id}', [App\Http\Controllers\Journalist\PostController::class, 'update']);
    Route::get('delete-post/{post_id}', [App\Http\Controllers\Journalist\PostController::class, 'destroy']);
});

