<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Montserrat:700" rel="stylesheet">
</head>
<body>
<div style="min-width: 1050px; margin: 0 auto;">
	<div class="sidebar">
		<h1>Login</h1>
		<form id="log-in" action="{{Route('login')}}" method="POST">
			<input type="text" id="name" name="name" placeholder="Username"><br><br>
			<input type="password" id="password" name="password" placeholder="Password"><br><br>
			<input type="submit" value="Login" name="login" id="submit">
			{{ csrf_field() }}
		</form>
		@foreach($errors->all() as $error)
			{{$error}}</br>
		@endforeach
	</div>

    </br></br>
    <div class="sidebar2">
        <a href="/showPosts"><h1>View Posts</h1></a>
    </div>

	<div class="container">
		<h1 id="title">Sign up</h1>
		<form  action="{{Route('register')}}" method="POST">
			<label for="user">Username:</label>
			<input type="text" id="name" name="name"><br><br>
			<label for="user">E-Mail:</label>
			<input type="text" id="email" name="email"><br><br>
			<label for="user">Password:</label>
			<input type="password" id="password" name="password"><br><br>
			<label for="user">Confirm Password:</label>
			<input type="password" id="password-confirm" name="password_confirmation"><br><br>
			<input type="submit" value="Sign Up" name="signup" id="signup">
			{{ csrf_field() }}
		</form>
		@foreach($errors->all() as $error)
		{{$error}}</br>
		@endforeach
	</div>
</div>
</body>
</html>