<?php

Route::group(['namespace' => 'Everan'], function () {
    Route::get('/', 'PagesController@root')->name('root');
});
