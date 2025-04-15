<?php

use Livewire\Livewire;
use App\Livewire\ShowFaq;
use App\Livewire\ShowTeam;
use App\Livewire\ShowAbout;
use App\Livewire\ShowHomePage;
use Illuminate\Support\Facades\Route;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ShowHomePage::class)->name('home');
Route::get('/about', ShowAbout::class)->name('about');
Route::get('/team', ShowTeam::class)->name('team');
Route::get('/faq', ShowFaq::class)->name('faq');