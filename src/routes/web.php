<?php

Route::group(['namespace' => 'devbook\siswa\Http\Controllers'], function () {
    Route::get('siswa','SiswaController@index');
    Route::post('siswa', 'SiswaController@send')->name('siswa-post');
});





