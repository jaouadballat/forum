<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class WatchersController extends Controller
{
    public function watch($id)
    {
    	\App\Watcher::create([
    		'user_id' => Auth::id(),
    		'discussion_id' => $id
    	]);

    	return back();
    }

    public function unwatch($id)
    {
    		$watcher = \App\Watcher::where('discussion_id', $id)
    				->where('user_id', Auth::id());
    	    $watcher->delete();
    	    return back();
    }
}
