Add Movie
<br><br>
@include('alerts.messages')

@if(!isset($movie))
	{!! Form::open(['url' => '/add-movie', 'method' => 'POST']) !!}
@else
	{!! Form::model($movie, ['url' => 'add-movie', 'method' => 'PUT']) !!}
@endif
	{!! Form::label('name*') !!}
	{!! Form::text('name') !!}
	<br>
	<br>
	{!! Form::label('start time*') !!}
	{!! Form::text('start_time') !!}
	<br>
	<br>
	{!! Form::label('end time*') !!}
	{!! Form::text('end_time') !!}
	<br>
	<br>
	{!! Form::hidden('room_id', $id) !!}
	{!! Form::submit('add room') !!}
{!! Form::close() !!}