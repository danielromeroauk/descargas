@extends('master')
@section('login')
    {{ Form::open(array('url' => 'login')) }}
        {{ Form::text('username', null, array('placeholder' => 'Usuario')) }}
        {{ Form::password('password', array('placeholder' => 'Contraseña')) }}
        {{ Form::submit('Ingresar', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
@stop