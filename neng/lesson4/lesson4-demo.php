<html>
<head>
<title>A simple HTML form</title>
</head>
<body>
    <!-- 
        ACTION -> where to send the form data
    -->
<form action="send_simpleform.php" method="POST">
	<p>
	    <strong>Name:</strong><br/>
	    <input type="text" name="user"/>
	</p>
	<p>
	    <strong>Message:</strong><br/>
	    <textarea name="message" rows="5" cols="40"></textarea>
	</p>
	<p>
	    <input type="submit" value="Submit form data"/>
	</p>
</form>
</body>
</html>
