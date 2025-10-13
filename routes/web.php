<?php

use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reports', [ReportController::class, 'index'])->name('report.index');

Route::get('/create', [ReportController::class, 'create'])->name('report.create');
