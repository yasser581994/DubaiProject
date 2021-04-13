<?php

use Illuminate\Support\Facades\Route;









/*
 * new admin routes
 * */

Route::middleware('web')->group(function(){
    // guest to send a message
    Route::resource('/messages','Admin\Messages');
    Route::get('/{lang?}', function () {
        if(App()->getLocale() ==='en')
        {
            return view('welcome');
        }
        elseif (App()->getLocale()=='ar')
        {
            return view('welcomeAr');

        }
    })->name('welcome.index')->middleware('language');



});
Route::middleware('guest')->group(function(){
    Route::get('admin/login','Admin\AuthController@login')->name('login.admin');
    Route::post('admin/login','Admin\AuthController@submitLogin')->name('login.submit');
});

Route::middleware('admin')->group(function(){

    Route::get('admin/messages','Admin\Messages@getMessages')->name('message.index');
    Route::delete('admin/messages','Admin\Messages@deleteMessage')->name('delete.message');
    Route::PUT('admin/messages','Admin\Messages@readMessage')->name('read.message');
    Route::get('admin/messages/{id}','AccountController\Messages@readMessageMail')->name('read.message.mail');
    Route::get('admin/account','Admin\AccountController@getAccount')->name('admin.account');
    Route::post('admin/account','Admin\AccountController@editAccount')->name('admin.edit.account');
    Route::PUT('admin/account-password','Admin\AccountController@editAdminPassword')->name('admin.edit.password');
    Route::get('/admin/settings','Admin\SettingsController@getSettings')->name('admin.get.settings');
    Route::post('/admin/settings','Admin\SettingsController@editSettings')->name('admin.edit.settings');
    Route::get('/logout','Admin\authController@logout')->name('admin.logout');

});
