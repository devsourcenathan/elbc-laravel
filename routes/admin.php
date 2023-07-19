<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', [DashboardController::class, 'blog']);
        Route::post('/', [DashboardController::class, 'store']);
    });

    Route::group(['prefix' => 'donations'], function () {
        Route::get('/', [DashboardController::class, 'donations']);
        Route::post('/', [DashboardController::class, 'store_donations']);
    });

    Route::group(['prefix' => 'formations'], function () {
        Route::get('/', [DashboardController::class, 'formations']);
        Route::post('/', [DashboardController::class, 'store_formations']);
    });

    Route::group(['prefix' => 'projects'], function () {
        Route::get('/', [DashboardController::class, 'projects']);
        Route::post('/', [DashboardController::class, 'store_projects']);
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [DashboardController::class, 'users']);
        Route::post('/', [DashboardController::class, 'store_users']);
    });
});
