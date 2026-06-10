<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\Profile;
use App\Queries\ProfilePageQuery;
use App\Queries\ProfileWithRepliesQuery;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(Profile $profile)
    {
        $profile->loadCount(['followings', 'followers']);

        $posts = ProfilePageQuery::for($profile, Auth::user()?->profile)->get();

        return view('profiles.show', [
            'profile' => $profile,
            'posts' => $posts,
        ]);
    }

    public function replies(Profile $profile)
    {
        $profile->loadCount(['followings', 'followers']);

        $posts = ProfileWithRepliesQuery::for($profile, Auth::user()?->profile)->get();

        return view('profiles.replies', [
            'profile' => $profile,
            'posts' => $posts,
        ]);
    }

    public function follow(Profile $profile)
    {
        $currentProfile = Auth::user()->profile;
        $follow = Follow::createFollow($currentProfile, $profile);

        return response()->json(['Following']);

    }

    public function unfollow(Profile $profile)
    {
        $currentProfile = Auth::user()->profile;
        $success = Follow::removeFollow($currentProfile, $profile);

        return response()->json(compact('success'));

    }
}
