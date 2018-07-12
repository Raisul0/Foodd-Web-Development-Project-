<?php
	include("account_top.php");
?>	
<div id="expenses_div ">
	<p><b>Expenses Details:</b></p>
<?php	
include_once("../Data/account_access.php");
			
			$result=allexpenses();
			
			$total=count($result);
			
			for($i=0;$i<$total;$i++){
				echo '<div class="DivPlaceOrderei" >
						
							<div class="divordertext" >
								Expenses Name:'.$result[$i]["expenses_name"].'</br>
								Cost:'.$result[$i]["cost"].'</br>
								Date:'.$result[$i]["date_ex"].'

							</div>
					
					  </div>';
			} 
			
		
			
			
			
			
?>
	</div>
	
	
		
<?php
	include("account_bottom.php");
?>	