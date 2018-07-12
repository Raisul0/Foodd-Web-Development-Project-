<?php
	include("administrative_top.php");
?>
<div id="pending_order">
	<p><b>Customers Details:</b></p>
	</div>
	<?php	include_once("../Data/user_access.php");
			
			$result=allcustomer();
			
			$total=count($result);
			if($total==0){echo"Result not found !";}
        else{
			
			for($i=0;$i<$total;$i++){
				if($result [$i]['type']=="customer"){
				echo '<div class="DivPlaceOrder" >
								Name : '.$result[$i]["name"].' , 						
								Mobile no : '.$result[$i]["mblno"].'</br>
								Address :  '.$result[$i]["address"].'
							
							<div class="divordertext" >
					            <a id="underline"href="Deactivecustomer.php?uname='.$result[$i]["uname"].'&type='.$result[$i]["type"].'"><input type="button" value="Deactivate"class="regbut" style="margin-left:290px;"/></a></br>
					</div>
					</div>	
					 ';
				}
				else if($result [$i]['type']=="c"){
					echo '<div class="DivPlaceOrder" >
								Name : '.$result[$i]["name"].',
								Mobile no : '.$result[$i]["mblno"].'</br>
								Address :  '.$result[$i]["address"].'
								
							<div class="divordertext" >
								<a id="underline" href="Deactivecustomer.php?uname='.$result[$i]["uname"].'&type='.$result[$i]["type"].'"><input type="button" value="Active"class="passbut" style="margin-left:290px;"/></a>
                          </div>
						
					  </div>';
				}
		}} ?>
<?php
	include("administrative_bot.php");
?>