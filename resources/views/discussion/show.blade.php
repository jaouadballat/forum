@extends('layouts.app')

@section('content')
	<div class="panel panel-default">
        <div class="panel-heading">
        	<img src="{{ $discussion->user->avatar }}" height="50px" width="50px">
        	<span>{{ $discussion->user->name }}, <b>{{ $discussion->created_at->diffForHumans() }}</b></span>
        	@if($discussion->is_user_auth_watch())
                <a href="{{ route('discussion.unwatch', ['id' => $discussion->id]) }}" class="btn btn-default pull-right btn-xs">UnWatch</a>
            @else
                <a href="{{ route('discussion.watch', ['id' => $discussion->id]) }}" class="btn btn-danger pull-right btn-xs">Watch</a>
            @endif
        </div>

        <div class="panel-body">
        	<h4 class="text-center">{{ $discussion->title }}</h4>
        	<hr>
            {{ str_limit($discussion->content, 400) }}...
        	
        </div>
        <div class="panel-footer">
        	{{ count($discussion->replies) }} Replies 
            <a href="{{ route('channel', ['slug' => $discussion->channel->slug]) }}" 
                class="btn btn-xs btn-default pull-right">
                {{ $discussion->channel->title }}</a>
        </div>
    </div>
@foreach($discussion->replies as $replay)
	<div class="panel panel-default">
        <div class="panel-heading">
        	<img src="{{ $replay->user->avatar }}" height="50px" width="50px">
        	<span>{{ $replay->user->name }}, <b>{{ $replay->created_at->diffForHumans() }}</b></span>
        </div>
		<div class="panel-body">
	    	<p>{{ $replay->content }}</p>
	    </div>
        <div class="panel-footer">
        	@if($replay->is_auth_like())
				<a href="{{ route('replay.unlike', ['id' => $replay->id]) }}" class="btn btn-xs btn-danger">Unlike <span class="badge">{{ count($replay->likes) }}</span></a>
        	@else
				<a href="{{ route('replay.like', ['id' => $replay->id]) }}" class="btn btn-xs btn-success">Like <span class="badge">{{ count($replay->likes) }}</span></a>
        	@endif

        
        </div>
    </div>
@endforeach

@if(Auth::check())
    <div class="panel panel-default">
        <div class="panel-body">
        <form action="{{ route('discussion.replay', ['id' => $discussion->id]) }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="replay">Leave a replay...</label>
                <textarea name="replay" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success pull-right" type="submit">Leave a replay</button>
            </div>
        </form>
        </div>
    </div>
@else
    <div class="panel panel-default">
        <div class="panel-body">
            <h2 class="text-center">Sign in to leave a comment</h2>
        </div>
    </div>
@endif
@endsection

