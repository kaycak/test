Add Movie
<br><br>
@include('alerts.messages')

@if(!isset($chair))
	{!! Form::open(['url' => '/add-chair', 'method' => 'POST']) !!}
@else
	{!! Form::model($chair, ['url' => 'add-chair', 'method' => 'PUT']) !!}
@endif
	{!! Form::label('number*') !!}
	{!! Form::text('number') !!}
	<br>
	<br>
	{!! Form::hidden('room_id', $id) !!}
	{!! Form::submit('add chair') !!}
{!! Form::close() !!}