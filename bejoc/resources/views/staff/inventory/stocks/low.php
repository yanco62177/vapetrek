<?php 
	 if (!isset($_SESSION['U_ROLE'])=='Administrator'){
      redirect(web_root."staff/index.php");
     } 
?>



<div class="row" style="margin:0;text-align:center;">
<form  action="index.php" method="post">  
	 
   
   <div class="col-lg-2">  
 	    <div class="row">
		  <div class="col-md-12">
			 <div class="form-group input-group" style="margin-top:25px;">  
                <button class="btn btn-primary btn-sm" name="submit" type="submit" >Generate <i class="fa fa-search"></i>
                </button> 
            </div>
		   </div>  
	    </div> 
	 </div>

</form>
</div>




<div class="row">
<span id="printout">
	<div class="col-md-12" >
	<div class="page-header" style="text-align:center;" ><h1>List of Low Stocks Products</h1></div>
		 
<form class="" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		<table class="table table-bordered table-hover" align="center" cellspacing="10px">
		<thead>
			<tr bgcolor="skyblue" style="font-weight: bold;"> 

				<!-- <td >Customer</td> -->
				<td >Product</td>
				<td >Price</td>
				<td >Quantity</td> 
			</tr>

		</thead>
		<tbody>		
<?php
	$low = 5;
if(isset($_POST['submit'])){
 // 	$_SESSION['date_pickerfrom']=$_POST['date_pickerfrom'];
	// $_SESSION['date_pickerto']=$_POST['date_pickerto'];	

 // echo date_format(date_create($_POST['date_pickerfrom']),'Y-m-d');
// echo $_POST['txtSearch'];
// $query = "SELECT  *  FROM  `tblcustomer` c,  `tblsummary` s WHERE  c.`CUSTOMERID` = s.`CUSTOMERID` AND  ORDEREDSTATS='Confirmed' AND date(ORDEREDDATE)>='". date_format(date_create($_POST['date_pickerfrom']), "Y-m-d")."' AND date(ORDEREDDATE) <='". date_format(date_create($_POST['date_pickerto']), "Y-m-d")."'";
// $query="SELECT *,SUM(ORDEREDQTY) as 'QTY'  FROM `tblproduct` P  ,`tblpromopro` PR ,`tblorder` O, `tblsummary` S ,`tblcustomer` C 
// WHERE P.`PROID`=PR.`PROID` AND PR.`PROID`=O.`PROID` AND O.`ORDEREDNUM`=S.`ORDEREDNUM` AND S.`CUSTOMERID`=C.`CUSTOMERID`  
// AND CONCAT(`PRODESC`, ' ' ,O.`ORDEREDNUM`, ' ' ,`FNAME`,' ', `LNAME`, ' ',`MNAME`) LIKE '%{$_POST['txtSearch']}%' AND DATE(ORDEREDDATE) >= '". date_format(date_create($_POST['date_pickerfrom']),'Y-m-d')."' 
// AND DATE(ORDEREDDATE) <= '". date_format(date_create($_POST['date_pickerto']),'Y-m-d')."' GROUP BY `PRODESC`
// ";

$query="SELECT *  FROM `tblproduct` P  , WHERE P.`PROQTY` <= . $low .";


// $query = "SELECT  *  FROM  `tblcustomer` c,  `tblsummary` s 
//            WHERE  c.`CUSTOMERID` = s.`CUSTOMERID` AND  ORDEREDSTATS='Confirmed' 
//            AND  date(ORDEREDDATE) >= '". date_format(date_create($_POST['date_pickerfrom']), "Y-m-d")."' 
//            date(ORDEREDDATE) <= '". date_format(date_create($_POST['date_pickerto']), "Y-m-d")."'";


			$mydb->setQuery($query);
				  		$cur = $mydb->loadResultList();

				  		
				  			foreach ($cur as $result) {
			# code...		
				  				
							echo '<tr>
									<td>'.$result->PRODESC.'</td>
									<td>'.$result->PROPRICE.'</td>
									<td>'.$result->PROQTY .'</td>
								 </tr>';
			
			
								} 
 
	}else{
			echo '<tr><td colspan="7" align="center"><h2>Please Enter Then Dates</h2></td></tr>';

	}
		 
 
?>
</tbody>

</table>
 </form>
	</div>
	</span>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-2"> 	
			<button onclick="tablePrint();" class="btn btn-primary"><i class="fa fa-print"></i> Print Report</button>
 		</div>
	  </div>
	</div>
</div>
   
<script>
function tablePrint(){  
    var display_setting="toolbar=no,location=no,directories=no,menubar=no,";  
    display_setting+="scrollbars=no,width=500, height=500, left=100, top=25";  
    var content_innerhtml = document.getElementById("printout").innerHTML;  
    var document_print=window.open("","",display_setting);  
    document_print.document.open();  
    document_print.document.write('<body style="font-family:Calibri(body);  font-size:8px;" onLoad="self.print();self.close();" >');  
    document_print.document.write(content_innerhtml);  
    document_print.document.write('</body></html>');  
    document_print.print();  
    document_print.document.close();  
    return false;  
    } 
	$(document).ready(function() {
		oTable = jQuery('#list').dataTable({
		"bJQueryUI": true,
		"sPaginationType": "full_numbers"
		} );
	});	

		
</script>