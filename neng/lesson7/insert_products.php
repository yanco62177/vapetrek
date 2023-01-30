
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New Product</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- custom css file link  -->
        <link rel="stylesheet" href="style2.css">
        <link rel="stylesheet" href="style.css">

<style>
.center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
}
</style>

    </head>

    <body>
<header>

<div class="container">

    <a href="#" class="logo"><span>B</span>ungabong<span>S</span>tationaries<span>S</span>upply</a>

<div class="dropdown">
  <button class="dropbtn">Main Menu</button>
  <div class="dropdown-content">
  
            <a href="insert_customer.php">Add New Customer</a>
            <a href="list_products.php">View Product List</a>

			
	</div>
	</div>
            
                <div class="fas fa-bars"></div>
            
            </div>

</header>
            
                
            
            </div>
            <div class="center">
                        
                    <form id="insert" class="input-group" method="post" action="">
					<p>New Product</p>
                        <input type="text" style="text-transform: lowercase" class="input-field" name="pro_name" placeholder="Product Name " required />
						<input type="text" style="text-transform: lowercase" class="input-field" name="pro_desc" placeholder="Product Description " required />
						<input type="text" style="text-transform: lowercase" class="input-field" name="pro_price" placeholder="Product Price" required />
                        <button name="submit" class="submit-btn">Add Product</button>
                    </form>
                
            </div>
        
        
            
            <script>
                var y = document.getElementById("insert");
                var z = document.getElementById("btn");
        
                function insert() {
                    x.style.left = "-400px";
                    y.style.left = "50px";
                    z.style.left = "110px";
                }
        
            </script>


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
	
			$query = "INSERT into `product` (pro_name, pro_desc, pro_price)
                     VALUES ('$pro_name', '$pro_desc', '$pro_price')";
			$result = mysqli_query($con, $query);
			if ($result) {
				echo "<script>alert('New Product Added!! " . $pro_name . "')</script>";
				} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
}

?>




<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- magnific popup js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- aos js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- custom js link  -->
<script src="main.js"></script>

</body>
</html>
