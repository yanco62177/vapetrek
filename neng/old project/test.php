
<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "adrian";
$dbName = "cafeteakudasai";

try {
  $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
  $pdo = new PDO($dsn, $dbUser, $dbPassword);
} catch(PDOException $e) {
  echo "DB Connection Failed: " . $e->getMessage();
}

$status = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$pay = $_POST['ord'];
	$int = (int)$pay;
	
	echo "<script>alert(' hi ". $_POST['ord'] ."')</script>";

			}			


?>