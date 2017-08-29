<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Discussion extends Model
{
    protected $fillable = ['title', 'content', 'user_id', 'channel_id', 'slug'];

    public function channel()
    {
      return $this->belongsTo('App\Channel');
    }

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function replies()
    {
      return $this->hasMany('App\Replay');
    }

    public function watchers()
    {
      return $this->hasMany('App\Watcher');
    }

      function is_user_auth_watch()
    {
      foreach ($this->watchers as $watcher) {
        if($watcher->user_id == Auth::id()){
          return true;
        } 
      }
      return false;
    }
}
