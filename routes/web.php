<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\employee\ActionController;
use App\Http\Controllers\employee\DashboardController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');


Route::prefix('employee')->name('employee.')->middleware('auth', 'employee')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('device', DeviceController::class);
    Route::controller(ActionController::class)->prefix("action")->name("action.")->group(function () {
        Route::post('sentToRepair', 'sentToRepair')->name("sent.to.repair");
        Route::post('complete', 'complete')->name("complete");
    });
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
