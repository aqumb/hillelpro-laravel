<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\BlogCommentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('deliverycalculator', 'DeliveryController@index');
Route::get('exchange', 'TestController@index');
Route::get('context', 'ContextController@index');
Route::get('sergeyhomeWorkSolid', 'SergeyHomeWorkSolidController@index');
Route::get('homeWorkSolid', 'HomeWorkSolidController@index');

Route::get('/blog/addCategory/{categoryName}', [BlogCategoryController::class, 'addCategory']);
Route::get('/blog/updatePost/{postId}/{title}/{content}', [BlogPostController::class, 'updatePost']);
Route::get('/blog/deleteComment/{commentId}', [BlogCommentController::class, 'deleteComment']);

Route::get('/blog', [BlogController::class, 'getBlog']);
Route::get('/blog/{categoryId}', [BlogCategoryController::class, 'getCategories']);
Route::get('/blog/{categoryId}/{postId}', [BlogPostController::class, 'getPosts']);
