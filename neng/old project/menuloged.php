<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>menu</title>
    <link rel="stylesheet" type="text/css" href="style3.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 
     <!-- aos css file cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
 
     <!-- magnific popup css cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
 
     <!-- bootstrap cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
 
     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 
     <!-- custom css file link  -->
     <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="login.css">
    
    </head>
    
<header>
<div class="upper">
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
$str2 = strtoupper($str);
}
?>
</div>

<div class="container">

    <a href="land.php" class="logo"><span>C</span>afe<span>T</span>ea<span>K</span>udasai</a>


	  
<div class="dropdown">
  <button class="dropbtn"><?php echo "<h1>Welcome " . $str2 . "</h1>"; ?></button>
  <div class="dropdown-content">
  
            <a href="land.php">Home</a>
            <a href="menuloged.php">Menu</a>
			<a href="logout.php">logout</a>
	</div>
	</div>
            
                <div class="fas fa-bars"></div>
            
            </div>

</header>

    <h1 class="heading"><span></span>Menu<span></span></h1>
<section class="facility" id="facility">
<div class="container">

<h1 class="heading"><span>'</span> our food <span>'</span></h1>

<form method="post" action="inorder.php">
<div class="box-container">
<div class="tm-room1">
                        <div class="tm-trans"> <div><p>sandwich with salad and coffee</p></div>
                        
                        <div><p>Only for</p><p class="bold">₱99</p> </div></div>

            <img class="tm-roomimage" src="food/1.jpg" alt="">
			<input type="radio" name="ord" value="99">
	</div>
</div>

<div class="box-container">
<div class="tm-room1">
                        <div class="tm-trans"> <div><p>Choco filled waffle</p></div>
                        
                        <div><p>Only for</p><p class="bold">₱60</p> </div></div>

            <img class="tm-roomimage" src="food/2.jpg" alt="">
			<input type="radio" name="ord" value="60">
	</div>
</div>

<div class="box-container">
<div class="tm-room1">
                        <div class="tm-trans"> <div><p>Full course</p></div>
                        
                        <div><p>Only for</p><p class="bold">₱250</p> </div></div>

            <img class="tm-roomimage" src="food/3.jpg" alt="">
			<input type="radio" name="ord" value="250">
	</div>
</div>

<div class="box-container">
<div class="tm-room1">
                        <div class="tm-trans"> <div><p>Avocado toast with shake</p></div>
                        
                        <div><p>Only for</p><p class="bold">₱150</p> </div></div>

            <img class="tm-roomimage" src="food/4.jpg" alt="">
			<input type="radio" name="ord" value="150">
	</div>
</div>

<div class="box-container">
<div class="tm-room1">
                        <div class="tm-trans"> <div><p>good morning burger</p></div>
                        
                        <div><p>Only for</p><p class="bold">₱70</p> </div></div>

            <img class="tm-roomimage" src="food/5.jpg" alt="">
			<input type="radio" name="ord" value="70">
	</div>
</div>

<div class="box-container">
<div class="tm-room1">
                        <div class="tm-trans"> <div><p>blueberry pancake</p></div>
                        
                        <div><p>Only for</p><p class="bold">₱80</p> </div></div>

            <img class="tm-roomimage" src="food/6.jpg" alt="">
			<input type="radio" name="ord" value="80">
	</div>
</div>

</br></br></br></br><button name="submit" class="submit-btn"><h1>Checkout</h1></button>
</form>
</div>

</section>
<section class="footer">

 

    <h1 class="credit text-center mx-auto">created by <span>Adrian Cary Bejoc</span> | all rights reserved.</h1>

</section>

<script>

AOS.init({
    duration:1000,
    delay:400
});

</script>

</body>
</html>