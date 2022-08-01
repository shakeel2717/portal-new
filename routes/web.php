<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\employee\DashboardController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');


Route::prefix('employee')->name('employee.')->middleware('auth')->group(function(){
    Route::resource('dashboard', DashboardController::class);
    Route::resource('device', DeviceController::class);
});

require __DIR__.'/auth.php';
