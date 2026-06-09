<?php

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('allows a profile to publish a post', function () {
    $profile = Profile::factory()->create();
    $post = Post::publish($profile, 'This is a test post.');

    expect($post->exists)->toBeTrue()
        ->and($post->profile->is($profile))->toBeTrue()
        ->and($post->parent_id)->toBeNull()
        ->and($post->repost_of_id)->toBeNull();
});

test('can reply a post', function () {
    $original = Post::factory()->create();

    $replier = Profile::factory()->create();
    $reply = Post::reply($replier, $original, 'This is a reply.');

    expect($reply->parent->is($original))->toBeTrue()
        ->and($original->replies)->toHaveCount(1);
});

test('can have multiple replies', function () {
    $original = Post::factory()->create();
    $replies = Post::factory()->count(4)->reply($original)->create();

    expect($replies->first()->parent->is($original))->toBeTrue()
        ->and($original->replies)->toHaveCount(4)
        ->and($original->replies->contains($replies->first()))->toBeTrue();
});

test('create plain repost', function () {
    $original = Post::factory()->create();

    $repostProfile = Profile::factory()->create();
    $repost = Post::repost($repostProfile, $original);

    expect($repost->repostOf->is($original))->toBeTrue()
        ->and($original->reposts)->toHaveCount(1)
        ->and($repost->content)->toBeNull();
});

test('can have multiple reposts', function () {
    $original = Post::factory()->create();
    $reposts = Post::factory()->count(4)->repost($original)->create();

    expect($reposts->first()->repostOf->is($original))->toBeTrue()
        ->and($original->reposts)->toHaveCount(4)
        ->and($original->reposts->contains($reposts->first()))->toBeTrue();
});

test('create a quote repost', function () {
    $original = Post::factory()->create();

    $repostProfile = Profile::factory()->create();
    $repost = Post::repost($repostProfile, $original, 'This is a quote repost.');

    expect($repost->repostOf->is($original))->toBeTrue()
        ->and($original->reposts)->toHaveCount(1)
        ->and($repost->content)->toBe('This is a quote repost.');
});
