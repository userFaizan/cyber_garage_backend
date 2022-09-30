<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;
use App\http\Controllers\subscriptionController;
use App\http\Controllers\StripeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
 Route::get('/admin/user',[UserController::class,'admin_user'])->name('admin.user');
 Route::get('/user/{id}',[UserController::class,'user'])->name('users.destroy');
 Route::get('/useredit/{id}',[UserController::class,'useredit'])->name('user.edit');
 Route::post('/user_edit',[UserController::class,'usere_dit'])->name('user_edit');
 Route::get('/show.subcription',[subscriptionController::class,'show_subcription'])->name('show.subcription');
 Route::get('/usersdetail/{id}',[subscriptionController::class,'usersdetail_destroy'])->name('usersdetail.destroy');
 

// Route::get('/user', function () {
//     return view('user');show.user
// })->middleware(['auth'])->name('user');
// Route::middleware(['auth'])->group(function(){
// Route::get('/user',[UserController::class,'user'])->name('user');

// });
// Route::middleware(['auth'])->group(function(){
// Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');
// Route::get('/user',[UserController::class,'user'])->name('user');
// });

Route::get('/index',[\App\http\Controllers\UserController::class,'index'])->name('index');
Route::get('/about_us',[UserController::class,'about_us'])->name('about_us');
Route::get('/management',[UserController::class,'management'])->name('management');
Route::get('/app',[UserController::class,'app'])->name('app');
Route::get('/videos',[UserController::class,'videos'])->name('videos');
Route::get('/subscription',[UserController::class,'subscription'])->name('subscription');
Route::get('/blog',[UserController::class,'blog'])->name('blog');


Route::get('/blog_single/{id}',[UserController::class,'blog_single'])->name('blog_single');
Route::post('/add_user',[UserController::class,'add_user'])->name('store');
Route::post('/subscription',[subscriptionController::class,'subscription_store'])->name('subscription.store');
// Route::post('/subscription',[subscriptionController::class,'subscription'])->name('subscription');
Route::get('/home',[subscriptionController::class,'home'])->name('home');
Route::post('/handlePost', [StripeController::class, 'handlePost'])->name('handlePost');

require __DIR__.'/auth.php';
