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
							<li>{{ HTML::link('users/logout', 'Logout') }}</li>
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
		<div class="container">
		    <div class="row">
		        <div class="col-xs-12"></div>
		        <div class="col-xs-9 col-sm-8"></div>
		        <div class="col-xs-3 col-sm-4">
		        	<h1>Dashboard</h1>
 
					<p>Welcome to your Dashboard. You rock!</p>
		        </div>
		        <div class="col-xs-12"></div>
		        <div class="col-sm-3"></div>
		        <div class="col-sm-3"></div>
		        <div class="col-sm-3"></div>
		        <div class="col-sm-3"></div>
		        <div class="col-xs-12"></div>
		    </div>
		</div>
	</body>
</html>