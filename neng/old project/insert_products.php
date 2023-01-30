<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>


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
$dbPassword = "";
$dbName = "bungabong";

$con = mysqli_connect("localhost","root","","bungabong");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
session_start();

if (isset($_POST['submit'])) {
	$pro_name = $_POST['pro_name'];
	$pro_desc = $_POST['pro_desc'];
	$pro_price = ($_POST['pro_price']);
	
			$query = "INSERT into `products` (pro_name, pro_desc, pro_price)
                     VALUES ('$pro_name', '$pro_desc', '$pro_price')";
			$result = mysqli_query($con, $query);
			
				echo "<script>alert('New product Added!! " . $pro_name . "')</script>";
				echo "<script>alert('Your Username -> " . $uname . "')</script>";


?>
</br></br></br><a href="new_product.php"><h1>Add new Product.</h1></a>

</div>
</body>
</html>
