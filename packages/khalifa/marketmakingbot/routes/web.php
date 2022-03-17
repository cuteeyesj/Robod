<?php
use Illuminate\Support\Facades\Route;
use \Khalifa\MarketMakingBot\Http\Controllers\BotsController;

Route::get('/mkm_bots', [BotsController::class, 'index'])->name('bots.index');
Route::get('/mkm_bots/{post}', [BotsController::class, 'show'])->name('bots.show');
Route::post('/mkm_bots', [BotsController::class, 'store'])->name('bots.store');
