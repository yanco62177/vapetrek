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
if (isset($_SESSION['uname'])) {
    //header("Location: land.php");
}
    // When form submitted, check and create user session.
    if (isset($_POST['uname'])) {
        $uname = stripslashes($_REQUEST['uname']);    // removes backslashes
        $uname = mysqli_real_escape_string($con, $uname);
        $pass = stripslashes($_REQUEST['pass']);
        $pass = mysqli_real_escape_string($con, $pass);
        // Check user is exist in the database
        $sql    = "SELECT * FROM `Person` WHERE uname='$uname'
                     AND pass='$pass'";
        $result = mysqli_query($con, $sql) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['uname'] = $uname;
            // Redirect to user dashboard page
            header("Location: land.php");
        } else {
            echo "<script>alert('Incorrect Username/password..')</script>";
        }
    } else {
    }
?>
</br></br></br><a href="login.php"><h1>Login again.</h1></a>
</div>
</div>
</body>
</html>