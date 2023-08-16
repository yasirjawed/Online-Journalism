<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
    
Route::get('/correspondents', [App\Http\Controllers\Frontend\FrontendController::class, 'correspondent']);
Route::get('/collections', [App\Http\Controllers\Frontend\FrontendController::class, 'collections']);
Route::get('/listen', [App\Http\Controllers\Frontend\FrontendController::class, 'listen']);
Route::get('/founding_principles', [App\Http\Controllers\Frontend\FrontendController::class, 'founding_principles']);
Route::get('/about_us', [App\Http\Controllers\Frontend\FrontendController::class, 'about_us']);
Route::get('/terms_condition', [App\Http\Controllers\Frontend\FrontendController::class, 'terms_condition']);
Route::get('/privacy_policy', [App\Http\Controllers\Frontend\FrontendController::class, 'privacy_policy']);
Route::get('/values_rules', [App\Http\Controllers\Frontend\FrontendController::class, 'values_rules']);
Route::get('/faq_list', [App\Http\Controllers\Frontend\FrontendController::class, 'faq_list']);
Route::get('/Contact_us', [App\Http\Controllers\Frontend\FrontendController::class, 'Contact_us']);
Route::get('/profile/{user_id}', [App\Http\Controllers\Frontend\FrontendController::class, 'profile']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tutorial/{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewCategoryPost']);
Route::get('/tutorial/{category_slug}/{post_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewPost']);


Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('approvalRequest', [App\Http\Controllers\Admin\ApprovalRequest::class, 'index']);
    Route::get('journalistapprovalRequest', [App\Http\Controllers\Admin\ApprovalRequest::class, 'UserApproval']);
    Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    // Route::get('delete-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);
    Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'index']);
    Route::put('/update-profile', [App\Http\Controllers\Admin\ProfileController::class, 'update']);
    Route::post('delete-category', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);
    Route::get('post', [App\Http\Controllers\Admin\PostController::class, 'index']);
    Route::get('add-post', [App\Http\Controllers\Admin\PostController::class, 'create']);
    Route::post('add-post', [App\Http\Controllers\Admin\PostController::class, 'store']);
    Route::get('post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'edit']);
    Route::get('approval/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'process']);
    Route::put('update-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'update']);
    Route::put('update-post-approval/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'update_process']);
    Route::post('delete-post', [App\Http\Controllers\Admin\PostController::class, 'destroy']);
    Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('users/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::put('update-user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'update']);
});
Route::prefix('journalist')->middleware('auth','isJournalist')->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Journalist\DashboardController::class, 'index']);
    Route::get('/profile', [App\Http\Controllers\Journalist\ProfileController::class, 'index']);
    Route::put('/update-profile', [App\Http\Controllers\Journalist\ProfileController::class, 'update']);
    Route::get('post', [App\Http\Controllers\Journalist\PostController::class, 'index']);
    Route::get('pending_post', [App\Http\Controllers\Journalist\PostController::class, 'pending_post']);
    Route::get('rejected_post', [App\Http\Controllers\Journalist\PostController::class, 'rejected_post']);
    Route::get('add-post', [App\Http\Controllers\Journalist\PostController::class, 'create']);
    Route::post('add-post', [App\Http\Controllers\Journalist\PostController::class, 'store']);
    Route::get('post/{post_id}', [App\Http\Controllers\Journalist\PostController::class, 'edit']);
    Route::put('update-post/{post_id}', [App\Http\Controllers\Journalist\PostController::class, 'update']);
    Route::post('delete-post', [App\Http\Controllers\Journalist\PostController::class, 'destroy']);
});

