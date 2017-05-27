<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use Hash;
use Cloudder;
use App\Story;

class DashboardController extends Controller
{
    protected $user;
    protected $id;

    public function __construct()
    {
        $this->user = Auth::user();
        $this->id = $this->user->id;
    }

    public function index()
    {
        $stories = Story::all();
        return view('admin.dashboard')
            ->withStories($stories);

    }
}
