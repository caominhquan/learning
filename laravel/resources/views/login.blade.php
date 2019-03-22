<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h3 align="center">Simple Login</h3>
		<!-- @if(isset(Auth::user()->email))
			<script>
				window.location="/main/successlogin";
			</script>
		@endif -->
		@if ($message = Session::get('error'))
		<div class="alert alert-danger alert-block">
			<button type='button' class="close" data-dismiss="alert">x</button>
			<strong>{{$message}}</strong>
		</div>
		@endif
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<form method='post' action="{{url('/main/checklogin')}}">
			{{ csrf_field() }}
			<div class="form-group">
				<label>Enter email</label>
				<input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Enter pass</label>
				<input type="password" name="password" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" name="login" class="btn btn-primary" value="Login">
			</div>
		</form>
	</div>
</body>
</html>
