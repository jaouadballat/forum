<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LikesController extends Controller
{
    public function like($id)
    {
    	\App\Like::create([
    		'user_id' 	=> Auth::id(),
    		'replay_id' => $id
    	]);

    	return redirect()->back();
    }

    public function unlike($id)
    {
    	$like = \App\Like::where('replay_id', $id)->where('user_id', Auth::id())->first();
    	$like->delete();
    	 return redirect()->back();

    }
}
