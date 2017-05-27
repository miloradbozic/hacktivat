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

    public function upload(Request $request)
    {
        $url = \Config::get('app.url');
        $imageName = $this->generateRandomString(14) . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(
            base_path() . '/public/images/story/', $imageName
        );

        return $url . '/images/story/' . $imageName;
    }

    public function save(Request $request)
    {
//        if (empty($request->username)) {
//            return response('Username not sent', 422);
//        }

        $user = User::where('username', $request->username)->first();
        if ($user == null) {
            $user = User::first();
            //return response('User not found', 422);
        }

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'author_id' => $user->id //$author->id
        ];

        Story::create($data);
        return 'OK';
    }

    private function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
