<?php
require_once ("../../include/initialize.php");
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }


		if(isset($_POST['save'])){


		if ($_POST['U_NAME'] == "" OR $_POST['U_USERNAME'] == "" OR $_POST['U_PASS'] == "") {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	
			$owner = New owner();
			// $user->USERID 		= $_POST['user_id'];
			$owner->name 		= $_POST['U_NAME'];
			$owner->username		= $_POST['U_USERNAME'];
			$owner->pass			=($_POST['U_PASS']);
			$owner->street 		= $_POST['street'];
			$owner->barangay		= $_POST['barangay'];
			$owner->municipality		= $_POST['municipality'];
			$owner->province		= $_POST['province'];
			$owner->email		= $_POST['email'];
			$owner->contact_no		= $_POST['contact_no'];
			$owner->create();

						// $autonum = New Autonumber(); 
						// $autonum->auto_update(2);

			message("New -- ". $_POST['U_NAME'] ." -- created successfully!", "success");
			redirect("index.php");
			
		}
		}

	