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
        $stories = Tour::with('tourSegments.story')->get();
        return $stories;

//        $tour = Tour::find(1);
//        $seg = $tour->tourSegments;
//        $first = $seg[1];
//
//        dd($first->story);

    }

}
