<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DocumentationFileController;
use App\Http\Controllers\FeedController;

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

Route::resource('campaign', CampaignController::class);
Route::get('/feeds', [FeedController::class, 'index'])->name('feeds.index');

Route::get('/dokumentasi', [DocumentationFileController::class, 'index'])->name('documentation.index');
Route::post('/dokumentasi', [DocumentationFileController::class, 'store'])->name('documentation.store');
Route::get('/dokumentasi/download/{id}', [DocumentationFileController::class, 'download'])->name('documentation.download');