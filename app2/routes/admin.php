<?php
// routes/admin.php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Front\UserController;

Route::middleware(['web']) // إذا كنت تستخدم أي middleware
->prefix('admin')
    ->group(function () {
        Route::get('/dashboard', function () {
            return 'Admin Dashboard';
        })->name('admin.dashboard');
    });



