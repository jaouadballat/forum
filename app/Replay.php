<?php

namespace App;
use Auth;
use Illuminate\Database\Eloquent\Model;

class Replay extends Model
{
    protected $fillable = ['content', 'user_id', 'discussion_id'];

    public function discussion()
    {
      return $this->belongsTo('App\Discussion');
    }

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function likes()
    {
    	return $this->hasMany('App\Like');
    }

    public function is_auth_like()
    {
    	$id = Auth::id();

    	foreach ($this->likes as $like) {
    		if($like->user_id == $id){
    			return true;
    		}
    	}

        return false;
        

    }
}
