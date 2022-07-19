<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact form</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="{{ route('contact.send') }}" method="POST">
		@csrf
		<input type="text" name="name" placeholder="Enter your name"><br>
		<input type="email" name="email" placeholder="Enter your email"><br>
		<input type="file" name="photo"><br>
		<button type="submit">Send</button>
	</form>
</body>
</html>