<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Route untuk halaman utama portofolio
Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');

// Route baru untuk halaman detail proyek
Route::get('/project/{id}', [PortfolioController::class, 'showProject'])->name('project.detail');