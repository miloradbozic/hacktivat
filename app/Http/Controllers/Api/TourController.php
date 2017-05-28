<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\TourSegment;
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
        $data = $request->all();
        $user = User::where('email', $request->username)->first();
        if ($user == null) {
            $user = User::where('email', 'marko@mailinator.com')->first();
            //return response('User not found', 422);
        }

        $tourData = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'author_id' => $user->id
        ];

        $tour = Tour::create($tourData );

        foreach ($data['tour_segments'] as $segment)
        {
            $segmentData = [
                'description' => $segment['description'],
                'time' => $segment['time'],
                'story_id' => $segment['story_id'],
                'segment_id' => $tour['id'],
                /*'lat' => NULL,
                'long' => NULL*/
            ];

            //$dump[]= $segmentData;
            TourSegment::create($segmentData);
        }

        //var_dump($dump); die();
        return response()->json([
            'status' => 'OK',
            'message' => 'OK'
        ]);
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
