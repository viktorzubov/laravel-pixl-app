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
    $user = User::find(5);

    // dd($user);

    Auth::login($user);
    request()->session()->regenerate();

    return redirect()->intended(route('profiles.show', $user->profile));
})->name('login');

Route::get('/dev/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->intended('/feed');
})->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [PostController::class, 'index'])->name('posts.index');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

    Route::scopeBindings()->group(function () {
        Route::post('/{profile:handle}/status/{post}/reply', [PostController::class, 'reply'])->name('posts.reply');
        Route::post('/{profile:handle}/status/{post}/repost', [PostController::class, 'repost'])->name('posts.repost');
        Route::post('/{profile:handle}/status/{post}/quote', [PostController::class, 'quote'])->name('posts.quote');
        Route::post('/{profile:handle}/status/{post}/destroy', [PostController::class, 'destroy'])->name('posts.destroy');

        Route::post('/{profile:handle}/status/{post}/like', [PostController::class, 'like'])->name('posts.like');
        Route::post('/{profile:handle}/status/{post}/unlike', [PostController::class, 'unlike'])->name('posts.unlike');
    });

    Route::post('/{profile:handle}/follow', [ProfileController::class, 'follow'])->name('profiles.follow');
    Route::post('/{profile:handle}/unfollow', [ProfileController::class, 'unfollow'])->name('profiles.unfollow');
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

Route::get('/{profile:handle}', [ProfileController::class, 'show'])->name('profiles.show');
Route::get('/{profile:handle}/with_replies', [ProfileController::class, 'replies'])->name('profiles.replies');

Route::scopeBindings()->group(function () {
    Route::get('/{profile:handle}/status/{post}', [PostController::class, 'show'])->name('post.show');
});
