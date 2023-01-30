
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CafeTeaKudasai</title>


  
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

</head>
<body>
    

<!-- header section starts  -->

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

    <a href="index.php" class="logo"><span>C</span>afe<span>T</span>ea<span>K</span>udasai</a>


	  
<div class="dropdown">
  <button class="dropbtn"><?php echo "<h1>Welcome " . $str2 . "</h1>"; ?></button>
  <div class="dropdown-content">
  
            <a href="index.php">Home</a>
            <a href="menuloged.php">Menu</a>
			<a href="logout.php">logout</a>
	</div>
	</div>
            
                <div class="fas fa-bars"></div>
            
            </div>

</header>

<!-- header section ends  -->

<!-- home section starts  -->

<section class="home" id="home">

<div class="container">

    <div class="row min-vh-100 align-items-center text-center text-md-left">

        <div class="col-md-6 pr-md-5" data-aos="zoom-in">
            <img src="images/home-img2.png" width="100%" alt="">
        </div>

        <div class="col-md-6 pr-md-5" data-aos="zoom-in">
            <img src="images/home-img3.jpeg" width="110%" alt="">
        </div>
  
        </div>

    </div>
	
</div>

</section>


<!-- home section ends -->


<!-- facility section starts  -->


<section class="facility" id="facility">

<div class="container">

<h1 class="heading"><span>'</span> our food <span>'</span></h1>

<div class="box-container">

    <div class="box"  >
        <a href="food/1.jpg" title="">
            <img src="food/1.jpg" alt="">
        </a>
    </div>
	
	<div class="box"  >
        <a href="food/2.jpg" title="">
            <img src="food/2.jpg" alt="">
        </a>
    </div>
	
	<div class="box"  >
        <a href="food/3.jpg" title="">
            <img src="food/3.jpg" alt="">
        </a>
    </div>
	
	<div class="box"  >
        <a href="food/4.jpg" title="">
            <img src="food/4.jpg" alt="">
        </a>
    </div>
	
	<div class="box"  >
        <a href="food/5.jpg" title="">
            <img src="food/5.jpg" alt="">
        </a>
    </div>
	
	<div class="box"  >
        <a href="food/6.jpg" title="">
            <img src="food/6.jpg" alt="">
        </a>
    </div>
	
    

</div>

</div>

</section>

<!-- facility section ends -->


<!-- footer section starts  -->

<section class="footer">

 

    <h1 class="credit text-center mx-auto">created by <span>Adrian Cary Bejoc</span> | all rights reserved.</h1>

</section>

<!-- footer section ends -->

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- magnific popup js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- aos js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- custom js link  -->
<script src="main.js"></script>


<script>

AOS.init({
    duration:1000,
    delay:400
});

</script>

</body>
</html>