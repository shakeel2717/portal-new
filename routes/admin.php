<?php

use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::redirect('/admin', '/admin/login');

Route::prefix('admin')->name('admin.')->middleware('auth','admin')->group(function () {
    Route::resource('dashboard', DashboardController::class);
});
