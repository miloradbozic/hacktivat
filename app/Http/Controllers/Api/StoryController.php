<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Auth;
use Hash;
use Cloudder;
use App\Story;

class StoryController extends Controller
{

    public function all()
    {
        $stories = Story::all();
        return $stories;

    }

    public function user($userId)
    {
        $story = Story::find($userId);
        return $story;

    }
}
