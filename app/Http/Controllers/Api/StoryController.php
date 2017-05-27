<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Auth;
use Hash;
use Cloudder;
use App\User;
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
        return $request->all();

//        if (empty($request->username)) {
//            return response('Username not sent', 422);
//        }
//
//        $user = User::where('username', $request->username)->first();
//        if ($user == null) {
//            return response('User not found', 422);
//        }
//
//        $data = [
//            'name' => $request->name,
//            'description' => $request->description,
//            'author_id' => $user->id //$author->id
//        ];
//
//        Story::create($data);
//        return 'OK';
    }
}
