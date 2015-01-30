<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">		

		@section('style')
		@stop
	</head>
	<body>

		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-top">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Brand</a>
				</div>

				<div class="navbar-form navbar-right collapse navbar-collapse" id="navbar-collapse-top">
					<form class="form-inline">
						<div class="form-group">
							<label class="sr-only" for="exampleInputEmail2">Empresa</label>
							<select class="form-control">
								<option>Selecione a empresa</option>
							</select>
						</div>
						<div class="form-group">
							<label class="sr-only" for="exampleInputPassword2">Transportador</label>
							<select class="form-control">
								<option>Selecione o transportador</option>
							</select>
						</div>
						<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
					</form>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		
		@yield('content')

		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

		@section('script')
		@stop
	</body>
</html>