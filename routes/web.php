<?php

use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;

Route::get('', [GoogleController::class, 'getEmails'])->name('index');

Route::get('login', [GoogleController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('callback', [GoogleController::class, 'handleGoogleCallback']);
Route::get('emails', [GoogleController::class, 'getEmails'])->name('emails');
Route::get('thread/{id}', [GoogleController::class, 'getThread'])->name('thread');

Route::get('/download-attachment', [GoogleController::class, 'downloadAttachment'])->name('download.attachment');
