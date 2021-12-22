<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//pages routes
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');;
Route::get('/aboutus', [\App\Http\Controllers\HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [\App\Http\Controllers\HomeController::class, 'references'])->name('references');
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/faq', [\App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
Route::post('/sendmessage', [\App\Http\Controllers\HomeController::class, 'sendmessage'])->name('send-message');
Route::get('/notContent/{id}/{slug}', [\App\Http\Controllers\HomeController::class, 'notContent'])->name('notContent');
Route::get('/categorycontents/{id}/{slug}', [\App\Http\Controllers\HomeController::class, 'categorycontents'])->name('categorycontents');


//admin routes
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::middleware('admin')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

        #Category
        Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
        Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
        Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
        Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
        Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

        #Content
        Route::prefix('content')->group(function (){
            Route::get('/', [\App\Http\Controllers\Admin\ContentController::class, 'index'])->name('admin_content');
            Route::get('create', [\App\Http\Controllers\Admin\ContentController::class, 'create'])->name('admin_content_add');
            Route::post('store', [\App\Http\Controllers\Admin\ContentController::class, 'store'])->name('admin_content_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\ContentController::class, 'edit'])->name('admin_content_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ContentController::class, 'update'])->name('admin_content_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ContentController::class, 'destroy'])->name('admin_content_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ContentController::class, 'show'])->name('admin_content_show');
        });

        #Image
        Route::prefix('image')->group(function (){
            //Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->name(admin_image');
            Route::get('create/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
            Route::post('store/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
        });

        #Messages
        Route::prefix('messages')->group(function (){
            Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
            Route::get('show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');
        });

        #Setting
        Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

        #User
        Route::prefix('user')->group(function (){
            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');

        });

    });#admin
}); #auth


//user routes
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');
    Route::get('/user-profile', [\App\Http\Controllers\UserController::class, 'userProfile'])->name('user-profile');

    #Content
    Route::prefix('content')->group(function (){
        Route::get('/', [\App\Http\Controllers\ContentController::class, 'index'])->name('user_content');
        Route::get('create', [\App\Http\Controllers\ContentController::class, 'create'])->name('user_content_add');
        Route::post('store', [\App\Http\Controllers\ContentController::class, 'store'])->name('user_content_store');
        Route::get('edit/{id}', [\App\Http\Controllers\ContentController::class, 'edit'])->name('user_content_edit');
        Route::post('update/{id}', [\App\Http\Controllers\ContentController::class, 'update'])->name('user_content_update');
        Route::get('delete/{id}', [\App\Http\Controllers\ContentController::class, 'destroy'])->name('user_content_delete');
        Route::get('show', [\App\Http\Controllers\ContentController::class, 'show'])->name('user_content_show');
    });

    #Image
    Route::prefix('image')->group(function (){
        //Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->name(admin_image');
        Route::get('create/{content_id}', [\App\Http\Controllers\ImageController::class, 'create'])->name('user_image_add');
        Route::post('store/{content_id}', [\App\Http\Controllers\ImageController::class, 'store'])->name('user_image_store');
        Route::get('delete/{id}', [\App\Http\Controllers\ImageController::class, 'destroy'])->name('user_image_delete');
        Route::get('show', [\App\Http\Controllers\ImageController::class, 'show'])->name('user_image_show');
    });
});


Route::get('/admin/login', [\App\Http\Controllers\HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/check', [\App\Http\Controllers\HomeController::class, 'check'])->name('admin_check');
Route::get('/admin/logout', [\App\Http\Controllers\HomeController::class, 'logout'])->name('admin_logout');






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
