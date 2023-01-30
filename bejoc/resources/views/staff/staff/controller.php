<?php
require_once ("../../include/initialize.php");
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."staff/index.php");
     }


		if(isset($_POST['save'])){


		if ($_POST['U_NAME'] == "" OR $_POST['U_USERNAME'] == "" OR $_POST['U_PASS'] == "") {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	
			$staff = New staff();
			// $user->USERID 		= $_POST['user_id'];
			$staff->name 		= $_POST['U_NAME'];
			$staff->username		= $_POST['U_USERNAME'];
			$staff->pass			=($_POST['U_PASS']);
			$staff->street 		= $_POST['street'];
			$staff->barangay		= $_POST['barangay'];
			$staff->municipality		= $_POST['municipality'];
			$staff->province		= $_POST['province'];
			$staff->email		= $_POST['email'];
			$staff->contact_no		= $_POST['contact_no'];
			$staff->create();

						// $autonum = New Autonumber(); 
						// $autonum->auto_update(2);

			message("New Staff -- ". $_POST['U_NAME'] ." -- created successfully!", "success!");
			redirect("index.php");
			
		}
		}

	