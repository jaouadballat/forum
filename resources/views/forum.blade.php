@extends('layouts.app')

@section('content')
	
	@foreach($discussions as $discussion)
		<div class="panel panel-default">
                <div class="panel-heading">
                	<img src="{{ $discussion->user->avatar }}" height="50px" width="50px">
                	<span>{{ $discussion->user->name }}, <b>{{ $discussion->created_at->diffForHumans() }}</b></span>
                	<a href="{{ route('discussion', ['slug' => $discussion->slug]) }}" class="btn btn-default pull-right">View</a>
                </div>

                <div class="panel-body">
                	<h4 class="text-center">{{ $discussion->title }}</h4>
                	<hr>
                    {{ str_limit($discussion->content, 400) }}...
                	
                </div>
                <div class="panel-footer">
                	{{ count($discussion->replies) }} Replies 
                </div>
            </div>
	@endforeach

	<div class="text-center">{{ $discussions->links() }}</div>
            
@endsection
