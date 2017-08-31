<?php

Route::group(['middleware' => 'web', 'prefix' => 'cv', 'namespace' => 'Modules\CV\Http\Controllers'], function()
{
    Route::get('/', 'CVController@index');
});
