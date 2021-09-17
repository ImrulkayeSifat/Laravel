<?php
use App\Http\Controllers\HomeController;

use App\Http\Controllers\SessionController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//database
use App\Http\Controllers\PostController;

// for frontend design
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SesmanagementController;
use App\Http\Controllers\StumanagementController;
use App\Http\Controllers\UsergroupController;
use App\Http\Controllers\UserManaController;
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

// for frontend design
Route::get('/front',[FrontController::class,'create'])->name('front.create');
Route::get('/front/dashboard',[DashboardController::class,'create'])->name('dashboard.create');
Route::get('/front/stumanagement',[StumanagementController::class,'create'])->name('stumanagement.create');
Route::get('/front/users',[UserManaController::class,'create'])->name('users.create');
Route::get('/front/usergroup',[UsergroupController::class,'create'])->name('usergroup.create');
Route::get('/front/sesmanagement',[SesmanagementController::class,'create'])->name('sesmanagement.create');
//
Route::get('/',[ProductController::class,'index'])->name('product.index');
Route::get('/home/{name?}',[HomeController::class,'index'])->name('home.index');
Route::get('/user',[UserController::class,'index'])->name('user.index');
Route::get('/posts',[ClientController::class,'getAllPost'])->name('posts.getallpost');

Route::get('/posts/{id}',[ClientController::class,'getPostById'])->name('posts.getpostbyid');
Route::get('/add-post',[ClientController::class,'addPost'])->name('posts.addpost');
Route::get('/update-post',[ClientController::class,'updatePost'])->name('posts.updatepost');
Route::get('/delete-post/{id}',[ClientController::class,'deletePost'])->name('posts.deletepost');
Route::get('/fluent-string',[FluentController::class,'index'])->name('fluents.index');
Route::get('/login',[LoginController::class,'index'])->name('login.index')->middleware('checkuser');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');
Route::get('/session/get',[SessionController::class,'getSessionData'])->name('session.get');
Route::get('/session/set',[SessionController::class,'storeSession'])->name('session.set');
Route::get('/session/remove',[SessionController::class,'deleteSessionData'])->name('session.remove');

//database
Route::get('/posts',[PostController::class,'getAllPost'])->name('post.getAllPost');