<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('home');
    
})->name('home');

Route::get('/jobs', function () {
    return view('jobs' 
    ,[ 
        'jobs' => [
           [
            'title' => 'Software Engineer',
            'salary' => '$100,000 - $130,000'
           ],
           [
            'title' => 'Frontend Developer',
            'salary' => '$80,000 - $110,000'
           ],
           [
            'title' => 'Backend Developer',
            'salary' => '$90,000 - $120,000'
           ]
        ],
    ]);
})->name('jobs');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');





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
