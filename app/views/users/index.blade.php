@extends('master')

@section('content')
	@if($users)
		<div class="users">
			<ul>
				@foreach($users as $user)
					@if($user->role == 'customer')
					<li>{{ $user->email }} - {{$user-> role }}
						{{ HTML::link('/edit/'.$user->username, 'Edit Account') }} - 
						{{ HTML::link('/add/'.$user->username, 'Add Download') }}
					</li>
					@endif
				@endforeach
			</ul>
		</div>
	@else
		<div class="error">
			<h1>No se han encontrado usuarios.</h1>
		</div>
	@endif
@stop