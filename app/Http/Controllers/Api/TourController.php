<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Auth;
use Hash;
use Cloudder;
use App\Tour;
use App\User;
use Illuminate\Http\Request;

class TourController extends Controller
{

    public function all()
    {
        $tours = Tour::with('tourSegments.story.author')->with('author')->get();
        return $tours;
    }

    public function user($userId)
    {
        $tour = Tour::find($userId)->with('tourSegments.story.author')->with('author')->first();
        return $tour;

    }

    public function save(Request $request)
    {
        $user = $this->getUser($request);
        return 'OK';
    }

    /**
     * @param Request $request
     */
    public function getUser(Request $request)
    {
        $user = User::where('email', $request->username)->first();
        if ($user == null) {
            $user = User::first();
            //return response('User not found', 422);
        }

        return $user;
    }

}
