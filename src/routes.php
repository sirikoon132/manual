<?php

Route::get('/index', 'Sirikoon/Manual/LoginController@index');
Route::post('/add', [
    'as' => 'add',
    'uses' => 'Sirikoon\Manual\Logincontroller@index'
]);
Route::post('/check', 'Sirikoon\Manual\Logincontroller@check')->name('check');
Route::get('/sigup', 'Sirikoon\Manual\Logincontroller@signup')->name('signup');