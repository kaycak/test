@extends('layouts.app')

@section('content')
	<div class="container">
		@include('alerts.messages')
		@forelse($rooms as $room)
			<p id="{{$room->id}}" class="room">{{$room->name}}</p>
			<div class="hide movies_{{$room->id}}">
				@forelse($room->movies as $movie)
					<p class="movie" id="{{$movie->id}}">{{$movie->name}} <br> times : {{$movie->start_time}} - {{$movie->end_time}}</p>
				@empty
					@include('alerts.no-data')
				@endforelse
				<div class="hide movie_active_chairs_{{$movie->id}}">
					free chairs for {{$movie->name}} movie in {{$room->name}} room ` 
					@forelse($room->chairs as $chair)
						@if($chair->active == 1)
							{{$chair->number}}, 
						@endif
					@empty
						@include('alerts.no-data')
					@endforelse
				</div>
			</div>
		@empty
			@include('alerts.no-data')
		@endforelse
	</div>
@endsection