<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use App\Models\Profile;
use App\Queries\TimelineQuery;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $profile = Auth::user()->profile;

        $posts = TimelineQuery::forViewer($profile)->get();

        return view('posts.index', [
            'posts' => $posts,
            'profile' => $profile,
        ]);
    }

    public function store(CreatePostRequest $request)
    {
        $profile = Auth::user()->profile;

        $post = Post::publish($profile, $request->content);

        return redirect()->route('posts.index');
    }

    public function show(Profile $profile, Post $post)
    {
        $post->load([
            'replies' => fn ($q) => $q
                ->withCount(['likes', 'replies', 'reposts'])
                ->with([
                    'profile',
                    'parent.profile',
                    'replies' => fn ($q) => $q
                        ->withCount(['likes', 'replies', 'reposts'])
                        ->with(['profile', 'parent.profile'])
                        ->oldest(),
                ])
                ->oldest(),
        ])->loadCount(['likes', 'replies', 'reposts']);

        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function reply(Profile $profile, Post $post, CreatePostRequest $request)
    {
        $currentProfile = Auth::user()->profile;

        Post::reply($currentProfile, $post, $request->content);

        return redirect()->route('posts.index');
    }
}
