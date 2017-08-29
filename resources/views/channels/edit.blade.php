@extends('layouts.app')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">Edit Channel: <span class="text-danger">{{$channel->title}}</span></div>

                <div class="panel-body">
                    <form  action="{{ route('channels.update', ['id' => $channel->id]) }}"
                      method="post">
                      {{csrf_field()}}
                      {{method_field('PUT')}}
                      <div class="form-group">
                        <input type="text" value="{{$channel->title}}" name="title" class="form-control">
                      </div>
                      <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Update</button>
                      </div>
                    </form>
                </div>
            </div>

@endsection
