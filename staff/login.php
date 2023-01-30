<?php
require_once("../include/initialize.php");

 ?>
  <?php
 // login confirmation
  if(isset($_SESSION['USERID'])){
    redirect(web_root."staff/index.php");
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter" >
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">

			<div class="wrap-login100">
				<form method="post" action=""  class="login100-form validate-form" >
					<div class="login100-form-avatar">
						<img src="images/log pic2.jpg" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						VAPETREK
					</span>

				 	<?php echo check_message(); ?>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text"  name="user_email"  placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="user_pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button  type="submit" name="btnLogin"  class="login100-form-btn">
							Login
						</button>
					</div>
 
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

<?php 

if(isset($_POST['btnLogin'])){
  $U_USERNAME = trim($_POST['user_email']);
  $U_PASS  = trim($_POST['user_pass']);
  $h_upass = sha1($U_PASS);
  
   if ($U_USERNAME == '' OR $U_PASS == '') {

      message("Invalid Username and Password!", "error");
      redirect("login.php");
         
    } else {
  //it creates a new objects of member
    $user = new stafflog();
    //make use of the static function, and we passed to parameters
    $res = $user::userAuthentication($U_USERNAME, $U_PASS);
    if ($res==true) {
       message("You logon as ".$_SESSION['U_USERNAME'].".","success");
      
           redirect(web_root."staff/products/index.php");
      
    }else{
      message("Please contact Administrator.", "error");
       redirect(web_root."staff/login.php"); 
    }
 }
 } 
 ?> 