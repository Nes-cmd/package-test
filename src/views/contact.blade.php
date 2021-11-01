<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
</head>
<body>
	<h2>Contact Form</h2>
	<form action="{{ route('contact.submit')}}" method="post">
		@csrf
		<label for="name">Name:</label>
		<input type="name" id="name" required name="name" autofocus="true"><br><br>
		<label for="email">Email:</label>
		<input type="email" required name="email"><br><br>
		<label for="message">Phone</label>
		<input type="phone" required name="phone"><br><br>
		<label for="phone">Message:</label>
		<textarea cols="40" rows="6" name="message" required id="message"></textarea><br><br>
		<button type="submit">Submit</button>
	</form>
</body>
</html>