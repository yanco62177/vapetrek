<html>
<head>
</head>
<body><?php
	
	date_default_timezone_set("Asia/Manila");

	// time() function displays the information about the current date in time in seconds format.
	// the time() functions starts from January 1, 1970 12:00:00MN

	echo "Timestamp: ". time();

	$datetime_array = time();

	/*
		getdate() function displays the date and time using keys
	*/
	echo "<pre>";
	/*print_r(getdate($datetime_array));*/
	echo "</pre>";

	$getdate = getdate($datetime_array);

	/*
		use the getdate variable to access the value from the getdate() function
	*/

	echo "Date today is " . $getdate['weekday'] . ", " . $getdate['month'] . " " . $getdate['mday'] . ", " . $getdate['year'];

	echo "<br>Time is " . $getdate['hours'] . ":" . $getdate['minutes'] . ":" . $getdate['seconds'];

	echo "<hr>";



	echo "Current date is: " . date("l, F d, Y", time());
	echo "<br> Current time is: " . date("h:i:s A", time());
	echo "<hr>";
	/*
		Database date and time format: YYYY-MM-DD HH:II:SS
	*/

	echo "Database date and time: " . date("Y-m-d H:i:s", time());
	?>
	</body>
	</html>