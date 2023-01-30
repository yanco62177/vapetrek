<?php
    echo "<p>Welcome <b>".$_POST["user"]."</b>!</p>";
    
    echo "<p>Your product choices are:<br/>";
        //condition, if dili empty ang products, then execute true block
    if (!empty($_POST["products"])) {
        // Sonic Screwdriver and ORAC AI are saved as an array of $_POST['products']
    	echo "<ul>";
    	foreach ($_POST["products"] as $value) {
    		echo "<li>$value</li>"; //loop block
    	}
    	echo "</ul>";
    }
    
    /*
        if(condition) {
            true block
        } else {
            false block
        }
    */
?>
