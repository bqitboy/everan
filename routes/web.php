<?php

Auth::routes();

Route::group(['namespace' => 'Everan'], function () {

    Route::get('/', 'PagesController@root')->name('root');

    Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);

});
