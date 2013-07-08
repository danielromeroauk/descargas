@extends('master')
@section('content')
	@if(Auth::check())
		<?php $newdatetime = new DateTime(); ?>
		<?php "<p>" . $newdatetime->format('Y-m-d H:i:s') . "<p>"; ?>
		<hr />
		<h3>Descargas Disponibles</h3>

		<?php $user = User::find(Auth::user()->id); ?>

		<ul>
			@foreach($user->adds as $add)
				<?php $download = Download::find($add->download_id); ?>
				 <li>{{ HTML::link('file/'.$download->did.'/'.Str::random(50), $download->dname) }}</li>
			@endforeach
		</ul>

		<h3>Todas las descargas</h3>
		@foreach($downloads as $download)
			<li>{{ $download->dname }}</li>
		@endforeach
	@else
		<div class="error">
			<h1>{{ HTML::link('/', 'Iniciar Sesión') }}</h1>
		</div>
	@endif
@stop