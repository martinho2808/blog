<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DbController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\Contect_MessageController;

/*insert data route */
Route::post('/submit', [DataController::class, 'event_submit'])->name('event_submit');

Route::post('/game/record', [GameController::class, 'insertGameRecord'])->name('game_record');

Route::post('/contect_request', [Contect_MessageController::class, 'contect_request'])->name('contect_request');

/* admin/manager.page route */
Route::get('/download-pdf/{db}/{order}/{search}', [DbController::class, 'downloadPdf'])->name('downloadPdf');
Route::get('/download-all-tables', [DbController::class, 'downloadAllTables'])->name('downloadAllTables');
Route::post('/admin/manager/delete/{db}/{id}', [DbController::class, 'deleteData'])->name('deleteData');
Route::post('/admin/manager/updateData/{db}/{id}', [DbController::class, 'updateData'])->name('updateData');
