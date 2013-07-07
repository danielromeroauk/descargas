@extends('master')
@section('content')
	@if(Auth::check())
		<?php 	/*
				$download->adds()->first()->did_id
				$download->did == Add::where('did_id', '=', $download->did)->lists('did_id')[0]
				*/
				// echo $_SERVER['DOCUMENT_ROOT'];
				// echo $HTTP_SERVER_VARS['DOCUMENT_ROOT'];
				die(var_dump($downloads));
		?>

		<?php $newdatetime = new DateTime(); ?>
		<?php echo "<p>".$newdatetime->format('Y-m-d H:i:s')."<p>"; ?>
		<hr>
		<h3>Descargas Disponibles</h3>
		@foreach($downloads as $download)
			@if($download->did == $download->adds()->first()->did_id)
				{{ $download->did }} - {{ $download->dname }} - para descargar<br>
			@else
				{{ $download->did }} - {{ $download->dname }} - NO descarga<br>
			@endif
		@endforeach
		<hr>
		<h3>Todas las descargas</h3>
		@foreach($downloads as $download)
			<li>{{ HTML::link('file/'.$download->did.'/'.Str::random(50), $download->dname) }}</li>
		@endforeach
	@else
		<div class="error">
			<h1>{{ HTML::link('/', 'Iniciar Sesión') }}</h1>
		</div>
	@endif
@stop

<!-- 
DB: dls
Tabla: users[id | email | username | password | role | created_at | updated_at]
Tabla: downloads[id | did | dname | created_at | updated_at]
Tabla: adds[id | user_id | did_id | created_at | updated_at]
 -->