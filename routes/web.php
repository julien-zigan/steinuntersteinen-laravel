<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageBoardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/message-board', [MessageBoardController::class, 'index'])->name('message-board');
Route::post('/message-board', [MessageBoardController::class, 'store'])->name('message-board.store');

Route::get('/message-board/{message}/edit', [MessageBoardController::class, 'index'])->name('messages.edit');
Route::put('/message-board/{message]', [MessageBoardController::class, 'update'])->name('messages.update');
Route::delete('/messages/{message}', [MessageBoardController::class, 'destroy'])->name('messages.destroy');
