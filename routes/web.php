<?php

use App\Livewire\Estate\CreateEstatePage;
use App\Livewire\Estate\EditEstatePage;
use App\Livewire\Estate\ShowEstatePage;
use App\Livewire\HomePage;
use App\Livewire\LandingPage;
use Illuminate\Support\Facades\Route;


Route::get('/', LandingPage::class)->name('index');
Route::get('/dashboard', HomePage::class)->name('estate.index');
Route::get('/estate/{house}', ShowEstatePage::class)->name('estate.show');
Route::get('/create/estate', CreateEstatePage::class)->name('estate.create');
Route::get('/estate/{house}/edit', EditEstatePage::class)->name('estate.edit');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
