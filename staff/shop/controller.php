<?php
require_once ("../../include/initialize.php");

if(isset($_POST['save'])){
		
	 

			$errofile = $_FILES['image']['error'];
			$type = $_FILES['image']['type'];
			$temp = $_FILES['image']['tmp_name'];
			$myfile =$_FILES['image']['tmp_name'];
			$hays = $_POST['image'];
		 	$location="uploaded_photos/".$hays;


		if ( $errofile > 0) {
				message("No Image Selected!", "error");
				redirect("index.php?view=add");
		}else{
	 
				@$file=$_FILES['image']['tmp_name'];
				@$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
				@$image_name= addslashes($_FILES['image']['tmp_name']); 
				@$image_size= getimagesize($_FILES['image']['tmp_name']);

			
					//uploading the file
					move_uploaded_file($temp,"uploaded_photos/" . $hays);

		if ($_POST['shop_name'] == "" OR $_POST['owner'] == "" ) {
			$messageStats = false;
			message("All field is required!","error");

		}else{	
			$shop = New shop(); 
			// $user->USERID 		= $_POST['user_id'];
			$shop->shop_name 		= $_POST['shop_name'];
			$shop->shop_img 		= $location; 
			$shop->owner_id 		= $_POST['owner'];
			$shop->staff_id 		= $_POST['owner'];
			$shop->create();
			
			message("New [". $_POST['shop_name'] ."] created successfully!", "success");
			redirect("index.php");
			}
				
			}
	}
		



/*require_once ("../../include/initialize.php");

if(isset($_POST['save'])){
		
	 

			$errofile = $_FILES['image']['error'];
			$type = $_FILES['image']['type'];
			$temp = $_FILES['image']['tmp_name'];
			$myfile =$_FILES['image']['name'];
		 	$location="uploaded_photos/".$myfile;


		if ( $errofile > 0) {
				message("No Image Selected!", "error");
				redirect("index.php?view=add");
		}else{
	 
				@$file=$_FILES['image']['tmp_name'];
				@$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
				@$image_name= addslashes($_FILES['image']['name']); 
				@$image_size= getimagesize($_FILES['image']['tmp_name']);

			
					//uploading the file
					move_uploaded_file($temp,"uploaded_photos/" . $myfile);
		 	
					if ($_POST['shop_name'] == "" OR $_POST['owner'] == "" ) {
					$messageStats = false;
					message("All fields are required!","error");
					redirect('index.php?view=add');
					}else{	
			$shop = New shop(); 
			// $user->USERID 		= $_POST['user_id'];
			$shop->shop_name 		= $_POST['shop_name'];
			$shop->shop_img 		= $location; 
			$shop->owner_id 		= $_POST['owner'];
			$shop->staff_id 		= $_POST['owner'];
			$shop->create();
			
			message("New [". $_POST['shop_name'] ."] created successfully!", "success");
			redirect("index.php");
						}
							
					
			}
			 
		  }*/
		
?>

