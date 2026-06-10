<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dev/login', function () {
    $user = User::inRandomOrder()->first();

    Auth::login($user);
    request()->session()->regenerate();

    return redirect()->intended(route('profiles.show', $user->profile));
});

Route::get('/dev/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->intended('/feed');
});

Route::get('/{profile:handle}', [ProfileController::class, 'show'])->name('profiles.show');
Route::get('/{profile:handle}/with_replies', [ProfileController::class, 'replies'])->name('profiles.replies');

Route::scopeBindings()->group(function () {
    Route::get('/{profile:handle}/status/{post}', [PostController::class, 'show'])->name('post.show');
});

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
