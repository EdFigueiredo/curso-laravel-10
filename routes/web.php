<?php

use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{SupportController};



Route::get('/forum', [SupportController::class, 'index'])->name('forum.index');

Route::get('/contato', [SiteController::class, 'contact']);


Route::get('/', function () {
    return view('welcome');
});
