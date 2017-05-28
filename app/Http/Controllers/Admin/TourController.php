<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tour;

class TourController extends Controller
{
    public function index()
    {
        return $this->approved();
    }

    public function all()
    {
        $tours = Tour::all();
        return view('admin.tour.list')
            ->withTours($tours);
    }

    public function details($id)
    {
        $tour = Tour::find($id);

//       / dd($tour->tourSegments);
        return view('admin.tour.details')->withTour($tour);
    }

}
