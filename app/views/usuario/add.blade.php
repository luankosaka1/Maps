@extends('layout/default')

@section('content')

<h3>Adicionar</h3>

@if (isset($flash_message_success))
	<div class="alert alert-success">
		{{ $flash_message_success }}
	</div>
@endif

@if (isset($flash_message_error))
	<div class="alert alert-danger">
		{{ $flash_message_error }}
	</div>
@endif

@foreach ($errors->all('<div class="alert alert-danger">:message</div>') as $message)
	{{ $message }}
@endforeach

{{ Form::open(['url' => 'usuario/add']) }}

	<div class="form-group">
		{{ Form::label('usuario[username]', 'Username', ['class' => 'control-label']) }}
		{{ Form::text('usuario[username]', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
	</div>

	<div class="form-group">
		{{ Form::label('usuario[password]', 'Senha', ['class' => 'control-label']) }}
		{{ Form::password('usuario[password]', ['placeholder' => 'Senha', 'class' => 'form-control']) }}
	</div>

	{{ link_to('usuario', 'Voltar', ['class' => 'btn btn-link']) }}
	{{ Form::submit('Adicionar', ['class' => 'btn btn-primary']) }}

{{ Form::close() }}

@stop