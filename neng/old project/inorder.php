<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login & Registration Form</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- custom css file link  -->
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="style.css">
<style>
h1 {
  text-align: center;
}
</style>

    </head>
<body>

<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "adrian";
$dbName = "cafeteakudasai";

$con = mysqli_connect("localhost","root","adrian","cafeteakudasai");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
session_start();
    // When form submitted, check and create user session.
if (isset($_SESSION['uname'])) {
$str = $_SESSION['uname'];
}

if (isset($_POST['submit'])) {
	$amt = ($_POST['ord']);
	
	$ordDate = date("Y-m-d H:i:s");
	

			$query = "INSERT into `orders`( uname, amt, ordDate)
                     VALUES ('$str ', '$amt', '$ordDate')";
			$result = mysqli_query($con, $query);
			if ($result) {
				echo "<script>alert('Order Completed. Your order amount: " . $amt . "')</script>";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}			
}

?>
</br></br></br><a href="menuloged.php"><h1>Order again.</h1></a>
</br></br></br><a href="land.php"><h1>Back to Home.</h1></a>
</div>
</body>
</html>



