<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/product', function () {
    return "Halaman Product";
});

Route::get('/detail-product', function () {
    return "Halaman detail Product";
});

Route::get('/contact', function () {
    return "Halaman Contact";
});

Route::get('/about', function () {
    return "Halaman About";
});

Route::get('/cart', function () {
    return "Halaman Keranjang";
});

Route::get('/profil', function () {
    return "Halaman profil";
});


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
