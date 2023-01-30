<?php
include("func_list.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product List</title>


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

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
  
            <a href="insert_products.php">Add New Product</a>
            <a href="insert_customer.php">Add New Customer</a>

			
	</div>
	</div>
</header>
            
            </div>
            <div class="center"></br></br></br></br></br></br></br></br>
			<table>
  <tr>
    <th>Product ID</th>
	<th>Product Name</th>
    <th>Product Description</th>
    <th>Price</th>
  </tr>
  
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $data['pro_id']??''; ?></td>
      <td><?php echo $data['pro_name']??''; ?></td>
      <td><?php echo $data['pro_desc']??''; ?></td>
      <td><?php echo $data['pro_price']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
<table>




            </div>

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
