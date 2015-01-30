@extends('layout/default')

@section('content')

<h2>Usuários {{ link_to('usuario/add', 'Adicionar', ['class' => 'btn btn-primary pull-right']) }}</h2>

<br />

@if (Session::has('flash_message_error'))
	<div class="alert alert-danger">
		{{ Session::get('flash_message_error') }}
	</div>
@endif

@if (Session::has('flash_message_success'))
	<div class="alert alert-success">
		{{ Session::get('flash_message_success') }}
	</div>
@endif


<table class="table">
	<thead>
		<tr>
			<td>#</td>
			<td>Username</td>
			<td>Criado em</td>
			<td colspan="2"></td>
		</tr>
	</thead>
	<tbody>
		@if ($usuarios)
			@foreach ($usuarios as $usuario)
				<tr>
					<td>{{ $usuario->id }}</td>
					<td>{{ $usuario->username }}</td>
					<td>{{ $usuario->created_at }}</td>
					<td>{{ link_to('usuario/edit/'. $usuario->id, 'Editar', ['class' => 'btn btn-primary']) }}</td>
					<td>{{ Form::delete('usuario/delete/' . $usuario->id, 'Excluir', ['class' => 'btn btn-danger']) }}</td>			
				</tr>
			@endforeach
		@endif
	</tbody>
</table>

@stop