<?php

use App\Http\Controllers\SmsController;
use Illuminate\Support\Facades\Route;


Route::controller(SmsController::class)->group(function () {
    Route::get('/', 'sms_form')->name('sms.form');
    Route::post('/sms-send', 'sms_send')->name('sms.send');
});
