<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;

Route::get('/', [DonationController::class, 'index'])
    ->name('home');

Route::get('/donasi/create/{id}', [DonationController::class, 'create'])
    ->name('donasi.create');

Route::post('/donasi', [DonationController::class, 'store'])
    ->name('donasi.store');

Route::get('/donasi', [DonationController::class, 'index'])
    ->name('donasi.index');

Route::view('/profil', 'profil.index')
    ->name('profil');

Route::view('/kontak', 'kontak.index')
    ->name('kontak');

Route::view('/terima-kasih', 'donasi.terimakasih')
    ->name('terimakasih');