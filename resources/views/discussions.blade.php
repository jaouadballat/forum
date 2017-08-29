@extends('layouts.app')

@section('content')

  <div class="panel panel-default">
      <div class="panel-heading text-center">Create a New Discussion</div>

      <div class="panel-body">
          <form action="{{route('discussions.store')}}" method="post">
            {{ csrf_field() }}
            
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
              <label for="channel">Channel</label>
              <select class="form-control" name="channel_id">
                @foreach ($channels as $channel)
                  <option value="{{$channel->id}}">{{$channel->title}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="content">Content</label>
              <textarea name="content" rows="8" cols="8" class="form-control"></textarea>
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-success">Create Discussion</button>
            </div>
          </form>
      </div>
  </div>

@endsection
