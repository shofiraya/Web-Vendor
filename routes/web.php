<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorCompController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('welcome');
});

// routes/web.php
Route::get('/vendorcomp/dashboard', function () {
    return view('vendor.dashboard');
});


// routes/web.php
Route::get('/vendorcomp/dashboard', [VendorCompController::class, 'dashboard']);
Route::get('/vendorcomp/permintaan', [VendorCompController::class, 'permintaan']);
Route::get('/vendorcomp/negosiasi', [VendorCompController::class, 'negosiasi']);
Route::get('/vendorcomp/riwayat', [VendorCompController::class, 'riwayat']);
