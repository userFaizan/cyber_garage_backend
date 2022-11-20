<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\subscriptionController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\HomeListController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\AdminSubscriptionController;
use App\Http\Controllers\AdminAppController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\PrivacyController;


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

// Route::get('/', function () {
//     return view('/index');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
 Route::get('/admin/user',[UserController::class,'users'])->name('admin.user');
 Route::get('/user/{id}',[UserController::class,'destory'])->name('users.destroy');
 Route::get('/user_show', [UserController::class, 'data'])->name('userdatashow');
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

Route::get('/',[UserController::class,'index'])->name('index');
Route::get('/about_us',[UserController::class,'about_us'])->name('about_us');
Route::get('/management',[UserController::class,'management'])->name('management');
Route::get('/app',[UserController::class,'app'])->name('app');
Route::get('/videos',[UserController::class,'videos'])->name('videos');
Route::get('/subscription',[UserController::class,'subscription'])->name('subscription');
Route::get('/blog',[UserController::class,'blog'])->name('blog');
Route::get('/blog_single/{id}',[UserController::class,'blog_single'])->name('blog_single');
Route::post('/add_user',[UserController::class,'add_user'])->name('store.userdetails');
Route::post('/subscription',[subscriptionController::class,'subscription_store'])->name('subscription.store');
Route::get('/privacy',[UserController::class,'privacy'])->name('privacy');
Route::get('/terms',[UserController::class,'terms'])->name('terms');

// Route::post('/subscription',[subscriptionController::class,'subscription'])->name('subscription');
Route::get('/home',[subscriptionController::class,'home'])->name('home');
Route::post('/handlePost', [StripeController::class, 'handlePost'])->name('handlePost');

//front end home page dynamic routes
Route::get('/home/index/',[SettingController::class,'home_index'])->name('home.index');
Route::post('/home/index',[SettingController::class,'home_update'])->name('home.update');
Route::get('/home/index_2',[SettingController::class,'home_index_2'])->name('home.index.2');
Route::post('/home/index_2',[SettingController::class,'home_update_2'])->name('home.update.2');
Route::get('/home/index_3',[SettingController::class,'home_index_3'])->name('home.index.3');
Route::post('/home/inde_3',[SettingController::class,'home_update_3'])->name('home.update.3');
Route::get('/home/index_4',[SettingController::class,'home_index_4'])->name('home.index.4');
Route::post('/home/index_4',[SettingController::class,'home_update_4'])->name('home.update.4');
Route::get('/home/index_5',[SettingController::class,'home_index_5'])->name('home.index.5');
Route::post('/home/index_5',[SettingController::class,'home_update_5'])->name('home.update.5');
Route::get('/home/index_6',[SettingController::class,'home_index_6'])->name('home.index.6');
Route::post('/home/index_6',[SettingController::class,'home_update_6'])->name('home.update.6');
Route::get('/home/index_7',[SettingController::class,'home_index_7'])->name('home.index.7');
Route::post('/home/index_7',[SettingController::class,'home_update_7'])->name('home.update.7');
Route::get('/home/index_8',[SettingController::class,'home_index_8'])->name('home.index.8');
Route::post('/home/index_8',[SettingController::class,'home_update_8'])->name('home.update.8');

//front end home page lists dynamic routes

Route::get('/home/list_2',[HomeListController::class,'home_list_2'])->name('home.list.2');
Route::get('/list_2',[HomeListController::class,'index_home_list_2'])->name('index.home.list.2');
Route::post('/list_2/add',[HomeListController::class,'add_home_list_2'])->name('list.2.add');
Route::get('/list_2/edit/{id}',[HomeListController::class,'edit_home_list_2'])->name('list.2.edit');
Route::post('/list_2/edit',[HomeListController::class,'update_home_list_2'])->name('list.2.update');
Route::get('/delete/list_1/{id}',[HomeListController::class,'destory_list_1'])->name('list.1.destroy');
Route::get('/home/list_5',[HomeListController::class,'home_list_5'])->name('home.list.5');
Route::get('/list_5',[HomeListController::class,'index_home_list_5'])->name('index.home.list.5');
Route::post('/list_5/add',[HomeListController::class,'add_home_list_5'])->name('list.5.add');
Route::get('/list_5/edit/{id}',[HomeListController::class,'edit_home_list_5'])->name('list.5.edit');
Route::post('/list_5/edit',[HomeListController::class,'update_home_list_5'])->name('list.5.update');
Route::get('/delete/list_5/{id}',[HomeListController::class,'destory_list_5'])->name('list.5.destroy');
Route::get('/home/list_8',[HomeListController::class,'home_list_8'])->name('home.list.8');
Route::get('/list_8',[HomeListController::class,'index_home_list_8'])->name('index.home.list.8');
Route::post('/list_8/add',[HomeListController::class,'add_home_list_8'])->name('list.8.add');
Route::get('/list_8/edit/{id}',[HomeListController::class,'edit_home_list_8'])->name('list.8.edit');
Route::post('/list_8/edit',[HomeListController::class,'update_home_list_8'])->name('list.8.update');
Route::get('/delete/list_8/{id}',[HomeListController::class,'destory_list_8'])->name('list.8.destroy');

//front end about us page lists dynamic routes
Route::get('/about/index_1',[AboutController::class,'about_index_1'])->name('about.index.1');
Route::post('/about/index_1',[AboutController::class,'about_update_1'])->name('about.update.1');
Route::get('/about/index_2',[AboutController::class,'about_index_2'])->name('about.index.2');
Route::post('/about/index_2',[AboutController::class,'about_update_2'])->name('about.update.2');

//management  page

Route::get('/management/index_1',[ManagementController::class,'management_index_1'])->name('management.index.1');
Route::post('/management/index_1',[ManagementController::class,'management_update_1'])->name('management.update.1');
Route::get('/management/index_2',[ManagementController::class,'management_index_2'])->name('management.index.2');
Route::post('/management/index_2',[ManagementController::class,'management_update_2'])->name('management.update.2');
Route::get('/management/index_3',[ManagementController::class,'management_index_3'])->name('management.index.3');
Route::post('/management/index_3',[ManagementController::class,'management_update_3'])->name('management.update.3');
//management list routes
Route::get('/managementlist_1',[ManagementController::class,'index_management_list_1'])->name('index.management.list.1');
Route::get('/managementlistadd',[ManagementController::class,'add_management_list_1'])->name('add.management.list.1');
Route::post('/managementlistadd',[ManagementController::class,'add_management'])->name('management.1.add');
Route::get('/managementlist_1/edit/{id}',[ManagementController::class,'edit_management_list_1'])->name('management.1.edit');
Route::post('/managementlist_1/edit',[ManagementController::class,'update_management_list_1'])->name('management.1.update');
Route::get('/management/delete/list_1/{id}',[ManagementController::class,'management_destory_list_1'])->name('management.1.destroy');


//subscriton section 1
Route::get('/subscriton/index/',[AdminSubscriptionController::class,'subscriton_index'])->name('subscriton.index');
Route::post('/subscriton/index',[AdminSubscriptionController::class,'subscriton_update'])->name('subscriton.update');
//subscriton section 1 list
Route::get('/subscritonlist_1',[AdminSubscriptionController::class,'index_subscriton_list_1'])->name('index.subscriton.list.1');
Route::get('/subscritonlistadd',[AdminSubscriptionController::class,'add_subscriton_list_1'])->name('add.subscriton.list.1');
Route::post('/subscritonlistadd',[AdminSubscriptionController::class,'add_subscriton'])->name('subscriton.1.add');
Route::get('/subscritonlist_1/edit/{id}',[AdminSubscriptionController::class,'edit_subscriton_list_1'])->name('subscriton.1.edit');
Route::post('/subscritonlist_1/edit',[AdminSubscriptionController::class,'update_subscriton_list_1'])->name('subscriton.1.update');
Route::get('/subscriton/delete/list_1/{id}',[AdminSubscriptionController::class,'subscriton_destory_list_1'])->name('subscriton.1.destroy');

//apps section dynamic routes
Route::get('/app/index_1',[AdminAppController::class,'app_index_1'])->name('app.index.1');
Route::post('/app/index_1',[AdminAppController::class,'app_update_1'])->name('app.update.1');
Route::get('/app/index_2',[AdminAppController::class,'app_index_2'])->name('app.index.2');
Route::post('/app/index_2',[AdminAppController::class,'app_update_2'])->name('app.update.2');
Route::get('/app/index_3',[AdminAppController::class,'app_index_3'])->name('app.index.3');
Route::post('/app/index_3',[AdminAppController::class,'app_update_3'])->name('app.update.3');
Route::get('/app/index_4',[AdminAppController::class,'app_index_4'])->name('app.index.4');
Route::post('/app/index_4',[AdminAppController::class,'app_update_4'])->name('app.update.4');

Route::get('/applist_1',[AdminAppController::class,'index_app_list_1'])->name('index.app.list.1');
Route::get('/applistadd',[AdminAppController::class,'add_app_list_1'])->name('add.app.list.1');
Route::post('/applistadd',[AdminAppController::class,'add_app'])->name('app.1.add');
Route::get('/applist_1/edit/{id}',[AdminAppController::class,'edit_app_list_1'])->name('app.1.edit');
Route::post('/applist_1/edit',[AdminAppController::class,'update_app_list_1'])->name('app.1.update');
Route::get('/app/delete/list_1/{id}',[AdminAppController::class,'app_destory_list_1'])->name('app.1.destroy');

Route::get('/applist_2',[AdminAppController::class,'index_app_list_2'])->name('index.app.list.2');
Route::get('/applistadd_2',[AdminAppController::class,'add_app_list_2'])->name('add.app.list.2');
Route::post('/applistadd_2',[AdminAppController::class,'add_app_2'])->name('app.2.add');
Route::get('/applist_2/edit/{id}',[AdminAppController::class,'edit_app_list_2'])->name('app.2.edit');
Route::post('/applist_2/edit',[AdminAppController::class,'update_app_list_2'])->name('app.2.update');
Route::get('/app/delete/list_2/{id}',[AdminAppController::class,'app_destory_list_2'])->name('app.2.destroy');

Route::get('/applist_3',[AdminAppController::class,'index_app_list_3'])->name('index.app.list.3');
Route::get('/applistadd_3',[AdminAppController::class,'add_app_list_3'])->name('add.app.list.3');
Route::post('/applistadd_3',[AdminAppController::class,'add_app_3'])->name('app.3.add');
Route::get('/applist_3/edit/{id}',[AdminAppController::class,'edit_app_list_3'])->name('app.3.edit');
Route::post('/applist_3/edit',[AdminAppController::class,'update_app_list_3'])->name('app.3.update');
Route::get('/app/delete/list_3/{id}',[AdminAppController::class,'app_destory_list_3'])->name('app.3.destroy');

Route::get('/applist_4',[AdminAppController::class,'index_app_list_4'])->name('index.app.list.4');
Route::get('/applistadd_4',[AdminAppController::class,'add_app_list_4'])->name('add.app.list.4');
Route::post('/applistadd_4',[AdminAppController::class,'add_app_4'])->name('app.4.add');
Route::get('/applist_4/edit/{id}',[AdminAppController::class,'edit_app_list_4'])->name('app.4.edit');
Route::post('/applist_4/edit',[AdminAppController::class,'update_app_list_4'])->name('app.4.update');
Route::get('/app/delete/list_4/{id}',[AdminAppController::class,'app_destory_list_4'])->name('app.4.destroy');

//front end video page dynamic routes
Route::get('/video/index/',[VideoController::class,'video_index'])->name('video.index');
Route::post('/video/index',[VideoController::class,'video_update'])->name('video.update');
Route::get('/video/videolist',[VideoController::class,'videolist'])->name('videolist');
Route::get('/video/editvideo/{id}',[VideoController::class,'editvideo'])->name('editvideo');
Route::post('/video/editvideo/',[VideoController::class,'update_video'])->name('update.video');
Route::get('/video/index_2',[VideoController::class,'video_index_2'])->name('video.index.2');
Route::post('/video/index_2',[VideoController::class,'video_update_2'])->name('video.update.2');
Route::get('/video/videolist/{id}',[VideoController::class,'destory_video'])->name('video.destroy');


//terms 
Route::get('/terms/index_1',[TermController::class,'terms_index_1'])->name('terms.index.1');
Route::post('/terms/index_1',[TermController::class,'terms_update_1'])->name('terms.update.1');


//privacy
Route::get('/privacy/index_1',[PrivacyController::class,'privacy_index_1'])->name('privacy.index.1');
Route::post('/privacy/index_1',[PrivacyController::class,'privacy_update_1'])->name('privacy.update.1');

//privacy  dynamic list
Route::get('/privacylist_1',[PrivacyController::class,'index_privacy_list_1'])->name('index.privacy.list.1');
Route::get('/privacylistadd',[PrivacyController::class,'add_privacy_list_1'])->name('add.privacy.list.1');
Route::post('/privacylistadd',[PrivacyController::class,'add_privacy'])->name('privacy.1.add');
Route::get('/privacylist_1/edit/{id}',[PrivacyController::class,'edit_privacy_list_1'])->name('privacy.1.edit');
Route::post('/privacylist_1/edit',[PrivacyController::class,'update_privacy_list_1'])->name('privacy.1.update');
Route::get('/privacy/delete/list_1/{id}',[PrivacyController::class,'privacy_destory_list_1'])->name('privacy.1.destroy');

Route::get('/privacylist_2',[PrivacyController::class,'index_privacy_list_2'])->name('index.privacy.list.2');
Route::get('/privacylistadd_2',[PrivacyController::class,'add_privacy_list_2'])->name('add.privacy.list.2');
Route::post('/privacylistadd_2',[PrivacyController::class,'add_privacy_2'])->name('privacy.2.add');
Route::get('/privacylist_2/edit/{id}',[PrivacyController::class,'edit_privacy_list_2'])->name('privacy.2.edit');
Route::post('/privacylist_2/edit',[PrivacyController::class,'update_privacy_list_2'])->name('privacy.2.update');
Route::get('/privacy/delete/list_2/{id}',[PrivacyController::class,'privacy_destory_list_2'])->name('privacy.2.destroy');

Route::get('/privacylist_3',[PrivacyController::class,'index_privacy_list_3'])->name('index.privacy.list.3');
Route::get('/privacylistadd_3',[PrivacyController::class,'add_privacy_list_3'])->name('add.privacy.list.3');
Route::post('/privacylistadd_3',[PrivacyController::class,'add_privacy_3'])->name('privacy.3.add');
Route::get('/privacylist_3/edit/{id}',[PrivacyController::class,'edit_privacy_list_3'])->name('privacy.3.edit');
Route::post('/privacylist_3/edit',[PrivacyController::class,'update_privacy_list_3'])->name('privacy.3.update');
Route::get('/privacy/delete/list_3/{id}',[PrivacyController::class,'privacy_destory_list_3'])->name('privacy.3.destroy');

Route::get('/privacylist_4',[PrivacyController::class,'index_privacy_list_4'])->name('index.privacy.list.4');
Route::get('/privacylistadd_4',[PrivacyController::class,'add_privacy_list_4'])->name('add.privacy.list.4');
Route::post('/privacylistadd_4',[PrivacyController::class,'add_privacy_4'])->name('privacy.4.add');
Route::get('/privacylist_4/edit/{id}',[PrivacyController::class,'edit_privacy_list_4'])->name('privacy.4.edit');
Route::post('/privacylist_4/edit',[PrivacyController::class,'update_privacy_list_4'])->name('privacy.4.update');
Route::get('/privacy/delete/list_4/{id}',[PrivacyController::class,'privacy_destory_list_4'])->name('privacy.4.destroy');

require __DIR__.'/auth.php';
