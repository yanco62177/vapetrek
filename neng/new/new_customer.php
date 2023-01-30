
<!DOCTYPE html>
<html lang="en">
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

    <a href="index.php" class="logo"><span>B</span>ungabong<span>S</span>tationaries<span>S</span>upply</a>

<div class="dropdown">
  <button class="dropbtn">Main Menu</button>
  <div class="dropdown-content">
  
            <a href="index.php">Add New Customer</a>
            <a href="menu.php">View Product List</a>

			
	</div>
	</div>
            
                <div class="fas fa-bars"></div>
            
            </div>

</header>
            
                
            
            </div>
            <div class="center">
                        
                    <form id="insert" class="input-group" method="post" action="insert_products.php">
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
