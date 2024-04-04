<?php

use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/enquiries/{id}/{code}', function ($id, $code) {
    Enquiry::find($id)->update(['code' => $code]);
    return 'تم تحديث الكود بنجاح';
});
