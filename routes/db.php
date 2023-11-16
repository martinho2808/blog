<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DbController;

Route::post('/submit', [DataController::class, 'event_submit'])->name('event_submit');

Route::get('/admin/manager',  [DbController::class, 'db_display'])->name('db_display');