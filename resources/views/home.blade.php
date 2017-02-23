@extends('layouts.app')

@section('content')
<div class="container">
    @include('alerts.messages')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    You are logged in!
                    <br>
                    @foreach($rooms as $room)
                        {{$room->name}} -  <a href="{{'/rooms/'.$room->id.'/add-movie'}}">add movie</a> - <a href="{{'/rooms/'.$room->id.'/add-chair'}}">add chair</a><br>
                    @endforeach
                    <a href="{{url('/add-room')}}">add room</a>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Movies</div>
                <div class="panel-body">
                    @foreach($movies as $movie)
                        {{$movie->name}} <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
