<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Notifications\NewReplay;
class DiscussionsController extends Controller
{

  public function create()
  {
    return view('discussions');
  }

  public function store(Request $request){
      $this->validate($request, [
        'title' => 'required',
        'content' => 'required',
        'channel_id' => 'required'
      ]);
      $discussion = \App\Discussion::create([
        'title' => $request->title,
        'content' => $request->content,
        'channel_id' => $request->channel_id,
        'user_id' => Auth::id(),
        'slug' => str_slug($request->title)
      ]);

      return redirect()->route('discussion', ['slug' => $discussion->slug]);
  }

  public function show($slug)
  {
   
    return view('discussion.show', ['discussion' => 
                            \App\Discussion::where('slug', $slug)->first()]);
  }

  public function replay($id)
  {
    \App\Replay::create([
        'discussion_id' => $id,
        'user_id' => Auth::id(),
        'content' => request('replay')
      ]);

      /*$discussion = \App\Discussion::find($id);
      foreach ($discussion->watchers as $watcher) {
        $watcher->user->notify(new NewReplay($discussion));
      }*/

      return redirect()->back();
  }

}
