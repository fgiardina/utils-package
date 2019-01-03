<?php

Route::group(['namespace'=> 'fernandogiardina\utils\Http\Controllers'], function() {
    Route::get('utils', 'UtilsController@index');
});
