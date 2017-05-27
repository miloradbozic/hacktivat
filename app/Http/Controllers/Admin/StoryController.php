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
        $stories = Story::all(); //@todo fix
        return view('admin.story.pending')
            ->withStories($stories);
    }

    public function details($id)
    {
        $story = Story::find($id);
        return view('admin.story.details')->withStory($story);

    }

    public function approve(Request $request)
    {
        $storyId = $request->get('storyId');
        $story = Story::find($storyId);
        $story->status = Story::STATUS_APPROVED;
        $story->save();

        $request->session()->flash('alert-success', 'Znamenitost je odobrena!');
        return redirect()->route("admin.pendingStories");
    }

    public function decline(Request $request)
    {
        $storyId = $request->get('storyId');
        $story = Story::find($storyId);
        $story->status = Story::STATUS_DECLINED;
        return redirect()->route("photo.pendingStories");
    }
}
