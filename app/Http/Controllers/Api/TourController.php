<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Auth;
use Hash;
use Cloudder;
use App\Tour;

class TourController extends Controller
{

    public function all()
    {
        $tours = Tour::with('tourSegments.story.author')->get();
        return $tours;
    }

    public function user($userId)
    {
        $tour = Tour::find($userId)->with('tourSegments.story.author')->first();
        return $tour;

    }

}
