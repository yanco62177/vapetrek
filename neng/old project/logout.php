<?php
    session_start();
    // Destroy session
    session_start();
	unset($_SESSION["uname"]);
    session_destroy();
        header("Location:index.php");
    
?>