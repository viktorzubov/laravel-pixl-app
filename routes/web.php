<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{profile:handle}', [ProfileController::class, 'show'])->name('profiles.show');

Route::get('/feed', function () {
    // TODO: Fetch feed items from the database
    $feedItems = json_decode(json_encode([
        [
            'profile' => [
                'name' => 'Michael',
                'avatar' => '/images/michael.png',
                'handle' => '@michael',
            ],
            'postedDateTime' => '3h',
            'replies' => [
                [
                    'profile' => [
                        'name' => 'Allesia',
                        'avatar' => '/images/alessia.png',
                        'handle' => '@allesia',
                    ],
                    'postedDateTime' => '2d',
                ],
            ],
        ],
    ]));

    return view('feed', ['feedItems' => $feedItems]);
})->name('feed');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
