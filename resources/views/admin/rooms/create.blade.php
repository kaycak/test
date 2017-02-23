Add Room
<br><br>
@include('alerts.messages')

@if(!isset($room))
	{!! Form::open(['url' => '/add-room', 'method' => 'POST']) !!}
@else
	{!! Form::model($room, ['url' => 'add-room', 'method' => 'PUT']) !!}
@endif
	{!! Form::label('name*') !!}
	{!! Form::text('name') !!}
	<br>
	<br>
	{!! Form::submit('add room') !!}
{!! Form::close() !!}