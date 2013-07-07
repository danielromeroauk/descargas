@extends('master')
@section('content')
	<div class="account">
		{{ HTML::link('/', 'Regresar') }}
		<h1>Profile {{ $user->username }}</h1>
		{{ Form::open() }}
			{{ Form::text('username', $user->username) }}
			{{ Form::text('email', $user->email) }}
			{{ Form::hidden('user_id', $user->id) }}
			{{ Form::password('password', array('placeholder' => 'Nueva Contraseña')) }}
			{{ Form::submit('Update') }}
		{{ Form::close() }}
	</div>
@stop