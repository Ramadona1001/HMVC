<?php

use Illuminate\Support\Facades\Route;

$namespace = "Managers\Controllers";

Route::namespace($namespace)->group(function(){
    Route::prefix("managers")->group(function(){
        Route::get('/we', 'ManagerController@index');
    });
});

