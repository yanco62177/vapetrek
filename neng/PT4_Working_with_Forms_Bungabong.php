
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Grade Average</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- custom css file link  -->


<style>
.center {
  margin: auto;
  width: 30%;
  border: 3px solid #73AD21;
  padding: 10px;
}
.center2 {
  margin: auto;
  width: 99%;
  border: 3px solid #73AD21;
  padding: 10px;
}
</style>

    </head>

    <body>

</br></br>
            <div class="center">
                        
                    <form id="insert"  method="post" action="">
					
					<div class="center2">
                        <p><input type="number" class="input-field" name="quart1" placeholder="Enter 1st Quarter Grade " required /></p>
						<p><input type="number" class="input-field" name="quart2" placeholder="Enter 2nd Quarter Grade " required /></p>
						<p><input type="number" class="input-field" name="quart3" placeholder="Enter 3rd Quarter Grade" required /></p>
						<p><input type="number" class="input-field" name="quart4" placeholder="Enter 4th Quarter Grade" required /></p>
                        <p><button name="submit" class="submit-btn">Submit</button>
						</div>
						
                    </form>
                
            
        
        
            
   <!--        <script>
                var y = document.getElementById("insert");
                var z = document.getElementById("btn");
        
                function insert() {
                    x.style.left = "-400px";
                    y.style.left = "50px";
                    z.style.left = "110px";
                }
        
            </script>-->


<?php

if (isset($_POST['submit'])) {
	$quart1 = $_POST['quart1'];
	$quart2 = $_POST['quart2'];
	$quart3 = $_POST['quart3'];
	$quart4 = $_POST['quart4'];
	$qnum = 4;
	$total = $quart1 + $quart2 + $quart3 + $quart4;
	$average = $total / $qnum;
	
	if($average >= 95 && $average <=98){
				echo "<h4>The average grade is =  $average </h4>";
				echo "<h4>Excellent!!</h4>";
	}
	else if($average >= 90 && $average <=94){
				echo "<h4>The average grade is =  $average </h4>";
				echo "<h4>Outstanding!!</h4>";
	}
	else if($average >= 85 && $average <=89){
				echo "<h4>The average grade is =  $average </h4>";
				echo "<h4>Very Good!!</h4>";
	}
	else if($average >= 80 && $average <=84){
				echo "<h4>The average grade is =  $average </h4>";
				echo "<h4>Good!!</h4>";
	}
	else if($average >= 75 && $average <=79){
				echo "<h4>The average grade is =  $average </h4>";
				echo "<h4>Not bad!!</h4>";
	}
	else {
				echo "<h4>The average grade is =  $average </h4>";
				echo "<h4>Failed!!</h4>";
	}
			
}

?>


</div>

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- magnific popup js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- aos js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- custom js link  -->

</body>
</html>
