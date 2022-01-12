<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\KitController;
use App\Http\Controllers\Page\ExamController;
use App\Http\Controllers\Page\UserController;
use App\Http\Controllers\Page\RecordController;
use App\Http\Controllers\Page\MessageController;


Route::get('/record',       [RecordController::class, 'index'])->name('record');
Route::get('/message',      [MessageController::class, 'index'])->name('message');
Route::get('/exam',         [ExamController::class, 'index'])->name('exam');
Route::get('/user',         [UserController::class, 'index'])->name('user');
Route::get('/print/{id}',   [KitController::class, 'index'])->name('print');
