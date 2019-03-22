<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h3 align="center">
			Login succes
		</h3>
		@if (isset(Auth::user()->email))
			<div class="alert alert-danger success-block">
				<strong>Welcome {{Auth::user()->email}}</strong>
				<a href="{{url('/main/logout')}}">Logout</a>
			</div>
		<!-- else -->
		<!-- <script>
			window.location="/main";
		</script> -->
		@endif
	</div>
</body>
</html>