<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Page\CompanyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\KitController;
use App\Http\Controllers\Page\ExamController;
use App\Http\Controllers\Page\HistoricController;
use App\Http\Controllers\Page\UserController;
use App\Http\Controllers\Page\RecordController;
use App\Http\Controllers\Page\MessageController;
use App\Http\Controllers\Page\ReportController;
use App\Http\Controllers\Query\QueryController;


Route::get('/',                 [LoginController::class, 'index'])->name('login');
Route::post('/auth',            [LoginController::class, 'auth'])->name('auth');
Route::post('/logout',          [LoginController::class, 'logout'])->name('logout');

Route::get('/record',           [RecordController::class, 'index'])->name('record');
Route::get('/message',          [MessageController::class, 'index'])->name('message');
Route::get('/exam',             [ExamController::class, 'index'])->name('exam');
Route::get('/company',          [CompanyController::class, 'index'])->name('company');
Route::get('/reportEsocial',    [ReportController::class, 'index'])->name('reportEsocial');
Route::get('/historic',         [HistoricController::class, 'index'])->name('historic');
Route::get('/user',             [UserController::class, 'index'])->name('user');
Route::get('/print/{id}',       [KitController::class, 'index'])->name('print');

Route::get('/save-one',         [QueryController::class, 'saveOne'])->name('save-one');
Route::get('/save-zero',        [QueryController::class, 'saveZero'])->name('save-zero');
Route::get('/save-six',         [QueryController::class, 'saveSix'])->name('save-six');
