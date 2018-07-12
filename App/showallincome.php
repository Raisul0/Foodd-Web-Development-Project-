<?php
	include("account_top.php");
?>	
<div id="expenses_div ">
	<p><b>Income Details:</b></p>
<?php	
include_once("../Data/account_access.php");
			
			
			$result=allincome();
			
			$total=count($result);
			
			for($i=0;$i<$total;$i++){
				echo '<div class="DivPlaceOrderei" >
						
							<div class="divordertext" >
								Income Name:'.$result[$i]["income_name"].'</br>
								Cost:'.$result[$i]["income_cost"].'</br>
								Date:'.$result[$i]["date_income"].'
							</div>
					
					  </div>';
			}
			
			
			
?>
	</div>
	
	
		
<?php
	include("account_bottom.php");
?>	