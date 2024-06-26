<?php

use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

    Route::resource('officers', OfficerController::class)
        ->only(['index', 'create', 'edit']);

    Route::resource('users', UserController::class)
        ->only(['index', 'create', 'edit']);

    Route::resource('enquiries', EnquiryController::class)->only(['index', 'create']);
    Route::get('enquiries/print/{enquiry}', [EnquiryController::class, 'print'])->name('enquiries.print');
    Route::get('enquiries/print/preparing/{enquiry}', [EnquiryController::class, 'preparing'])->name('enquiries.print-preparing');
});
