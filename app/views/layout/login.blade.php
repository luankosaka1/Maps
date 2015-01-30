<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">		
	</head>
	<body style="padding-top: 70px; background: #eee;">

		<div class="col-md-2 col-md-offset-5 thumbnail" style="padding: 5px 15px">
			{{ Form::open(['url' => 'login', 'class' => 'form-signin']) }}
				<h2 class="form-signin-heading text-center">Login</h2>

				{{ Form::label('username', 'Username', ['class' => 'sr-only']) }}
				{{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username', 'autofocus' => '', 'required' => 'true']) }}

				{{ Form::label('password', 'Senha', ['class' => 'sr-only']) }}
				{{ Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'true']) }}

				<div class="checkbox">
					<label>
						{{ Form::checkbox('remember-me') }} Lembrar-me
					</label>
				</div>

				{{ Form::submit('Acessar', ['class' => 'btn btn-lg btn-primary btn-block']) }}
			{{ Form::close() }}
		</div>

		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	</body>
</html>