
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
				<td width="50">Image</td>
				<td >Product</td>
				<td >Quantity</td> 
			</tr>

		</thead>
		<tbody>		
<?php

=
$query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
           					 WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID` ";

			$mydb->setQuery($query);
				  		$cur = $mydb->loadResultList();

				  		
				  			foreach ($cur as $result) {
			# code...		
				  				
							echo '<tr>
							<td style="padding:0px;">
							<a class="PROID" href="" data-target="#productmodal"  data-toggle="modal"  data-id="'.$result->PROID.'"> 
							<img  title="'.$result->PROID.'" style="width:100px;height:100px;padding:0;"  src="'. web_root.'admin/products/'.$result->IMAGES . '">
							</a></td>
									<td>'.$result->PRODESC.'</td>
									<td>'.$result->PROQTY .'</td>
								 </tr>';
							
			
								} 
 
	 
		 
 
?>
</tbody>
<tfoot>
	<tr>
		
	</tr>
</tfoot>
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