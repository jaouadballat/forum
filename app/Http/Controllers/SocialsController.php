<?php

namespace App\Http\Controllers;
use SocialAuth;
use Illuminate\Http\Request;

class SocialsController extends Controller
{
    public function auth()
    {
      return SocialAuth::authorize('github');
    }

    public function callback()
    {
      SocialAuth::login('github', function($user, $details){
        $user->name = $details->full_name;
        $user->email = $details->email;
        $user->avatar = $details->avatar;
        $user->save();
      });
        return redirect()->route('forum');
    }
}
