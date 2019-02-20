<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Montserrat:700" rel="stylesheet">
</head>
<body>
<div style="min-width: 1050px; margin: 0 auto;">
	<div class="sidebar">
		<h4 id="page-title">Dashboard</h4><br><br>
		<div class="dashboard">
			<form action="/dashboard" method="POST">
				@csrf
				<input type="submit" value="Add Post" id="add" name="add"><br><br>
				<input type="submit" value="Manage Posts" id="manage" name="manage"><br><br>
				<input type="submit" value="Log Out" id="logout" name="logout">
			</form>
		</div>
	</div>

	<div class="container">
		<h1 id="title">Welcome Back, {{Auth::user()->name}}</h1>
	</div>
</body>
</html>