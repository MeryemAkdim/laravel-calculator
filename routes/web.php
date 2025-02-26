<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

Route::get('/', [CalculatorController::class, 'index'])->name('index');

Route::get('/calculator', [CalculatorController::class, 'calculator'])->name('calculator');
Route::post('/calculate', [CalculatorController::class, 'calculate'])->name('calculate');
