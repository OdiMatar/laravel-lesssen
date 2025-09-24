<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use Livewire\Volt\Volt;

$jobs = [
    [
        'id' => 1,
        'title' => 'Software Engineer',
        'salary' => '$100,000 - $130,000'
    ],
    [
        'id' => 2,
        'title' => 'Frontend Developer',
        'salary' => '$80,000 - $110,000'
    ],
    [
        'id' => 3,
        'title' => 'Backend Developer',
        'salary' => '$90,000 - $120,000'
    ]
];

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('jobs', function () use ($jobs) {
    return view('jobs', ['jobs' => $jobs]);
})->name('jobs');

Route::get('/jobs/{id}', function ($id) use ($jobs) {
    $job = Arr::first($jobs, fn ($job) => $job['id'] == $id);
    return view('job', ['job' => $job]);
});

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