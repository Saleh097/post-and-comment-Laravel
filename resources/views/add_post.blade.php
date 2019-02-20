<html>
<head>
	<title>Add Post</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Montserrat:700" rel="stylesheet">
</head>
<body>
<div style="min-width: 1050px; margin: 0 auto;">
	<div class="sidebar">
		<h4 id="page-title">Add Post</h4><br><br>
		<div class="dashboard">
			<form action="addPost" method="POST">
				@csrf
				<input type="submit" value="Return to Dashboard" id="return" name="return"><br><br>
				<input type="submit" value="Manage Posts" id="manage" name="manage"><br><br>
				<input type="submit" value="Log Out" id="logout" name="logout">
			</form>
		</div>
	</div>

	<div class="container">
		<h1 id="title">Add New Post</h1>
		<form action="/addPost" method="POST">
            @csrf
			<br>
			<label for="content-title">Title:</label>
 			<input type="text" id="content-title" name="contentTitle" autofocus><br><br>
 			<label for="content-title">Content:</label>
 			<textarea id="content-text" name="contentText" rows="10"></textarea><br><br>
 			<input type="submit" name="post" value="Add Post">
		</form>
	</div>
</body>
</html>