<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Auth;
use Hash;
use Cloudder;
use App\Story;
use Illuminate\Http\Request;


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

    public function save(Request $request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'author_id' => 2 //$author->id
        ];

        Story::create($data);
        return 'OK';

    }
}
