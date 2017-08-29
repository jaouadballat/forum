<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
    	return view('forum', ['discussions' => 
    							\App\Discussion::orderBy('created_at', 'desc')->paginate(3)]);
    }

    public function channel($slug)
    {
    	$channel = \App\Channel::where('slug', $slug)->first();
    	return view('channel', ['discussions' => $channel->discussions]);
    }
}
