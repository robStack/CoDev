<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
		<title>Authentication App With Laravel 4</title>
	</head>
	<body>
		<div>
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Brand</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">CoDev</a></li>
							<li>{{ HTML::link('login', 'Login') }}</li>
							<li>{{ HTML::link('register', 'Register') }}</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		 <div class="container">
		    @if(Session::has('message'))
		        <p class="alert">{{ Session::get('message') }}</p>
		    @endif
		</div>
		<div>
			<form id="login" class="form-horizontal" role="form">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							<label>
							  <input type="checkbox"> Remember me
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Sign in</button>
					</div>
				</div>
			</form>
		</div>
		<!--<div class="container">
		    <div class="row">
		        <div class="col-xs-12"></div>
		        <div class="col-xs-9 col-sm-8"></div>
		        <div class="col-xs-3 col-sm-4"></div>
		        <div class="col-xs-12"></div>
		        <div class="col-sm-3"></div>
		        <div class="col-sm-3"></div>
		        <div class="col-sm-3"></div>
		        <div class="col-sm-3"></div>
		        <div class="col-xs-12"></div>
		    </div>
		</div>-->
	</body>
</html>