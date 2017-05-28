<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use Hash;
use Cloudder;
use App\Story;

class StoryController extends Controller
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
        return view('admin.stories')
            ->withStories($stories);
    }

    public function pending()
    {
        $stories = Story::where('status', 0)->get();
        return view('admin.story.pending')
            ->withStories($stories);
    }

    public function details($id)
    {
        $story = Story::find($id);
        return view('admin.story.details')->withStory($story);

    }

    public function approve(Request $request, $id)
    {
        $story = Story::find($id);
        $story->status = Story::STATUS_APPROVED;
        $story->save();

        $request->session()->flash('alert-success', 'Znamenitost je odobrena!');
        return redirect()->route("story.pending");
    }

    public function decline(Request $request, $id)
    {
        $story = Story::find($id);
        $story->status = Story::STATUS_DECLINED;
        return redirect()->route("story.pending");
    }
}
