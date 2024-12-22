<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\adminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InpageController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return "Cache Cleared Successfully!";
});
Route::post('/payments/initiate', [PaymentController::class, 'initiatePayment'])->name('payments.initiate');
Route::any('/payments/callback', [PaymentController::class, 'handleCallback'])->name('payments.callback');
Route::post('/payments/webhookhandler', [PaymentController::class, 'webhookhandler'])->name('payments.webhookhandler');

Route::controller(InpageController::class)->group(function(){
    Route::get('/',  'home')->name('home.index'); // dashboard.admin
    Route::get('/contact',  'contact')->name('home.contact'); // dashboard.admin
    Route::get('/about',  'about')->name('home.about'); // dashboard.admin
    Route::get('/gallery',  'gallery')->name('home.gallery'); // dashboard.admin
    Route::get('/youtube',  'telecast')->name('home.telecast');
    Route::post('/savecontact',  'savecontact')->name('home.savecontact');
});


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::controller(adminController::class)->group(function(){
        Route::get('/dashboard',  'dashboard')->name('admin.dashboard'); // dashboard.admin
        Route::get('/createbanners',  'createbanners')->name('admin.createbanners'); // create banner
        Route::post('/savebanner',  'savebanner')->name('admin.savebanner'); // save banner
        Route::get('/getbanners',  'getbanners')->name('admin.getbanners');  // get banner 
        Route::post('/updatebanner',  'updatebanner')->name('admin.banners.update');  // update banner
        Route::get('/bannerview/{id}',  'bannerview')->name('admin.banners.view');  // update banner
        Route::delete('/banners/delete/{id}', 'destroybanner')->name('admin.banners.delete');  // delete banner
        Route::get('/massrequest',  'massrequest')->name('dashboard.massrequest'); // dashboard.admin


        // create posts
        Route::get('/createpost', 'createpost')->name('admin.createpost'); 
        Route::post('/savepost', 'savepost')->name('admin.savepost'); 
        Route::get('/getposts',  'getposts')->name('admin.getposts');  
        Route::get('/viewpost/{id}',  'viewpost')->name('admin.viewpost');  
        Route::post('/updatepost',  'updatepost')->name('admin.updatepost');  
        Route::delete('/posts/delete/{id}',  'destroypost')->name('admin.destroypost');  
        // get post
        
        //create youtube 
        Route::get('/createyoutube', 'createyoutube')->name('admin.createyoutube'); 
        Route::post('/saveyoutube', 'saveyoutube')->name('admin.saveyoutube'); 
        Route::get('/getyoutube',  'getyoutube')->name('admin.getyoutube'); 
        Route::get('/viewyoutube/{id}',  'viewyoutube')->name('admin.viewyoutube');  
        Route::post('/updateyoutube',  'updateyoutube')->name('admin.updateyoutube');  
        Route::delete('/youtube/delete/{id}',  'destroyotube')->name('admin.destroyotube');  

        //create ParishPrist
        Route::get('/createparishprist', 'createparishprist')->name('admin.createparishprist'); 
        Route::post('/saveparishprist', 'saveparishprist')->name('admin.saveparishprist'); 
        Route::get('/parishpristlist',  'parishpristlist')->name('admin.parishpristlist'); 
        Route::get('/viewprists/{id}',  'viewprists')->name('admin.viewprists');
        Route::post('/updateprist',  'updateprist')->name('admin.updateprist');  

 
     


        Route::get('/contactlist', 'contactlist')->name('admin.contactlist'); 
        Route::delete('/contact/delete/{id}', 'destroycontactlist')->name('admin.destroycontactlist'); 





    });

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
