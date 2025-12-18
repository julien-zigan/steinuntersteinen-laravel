<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageBoardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/message-board', [MessageBoardController::class, 'index'])->name('message-board');
