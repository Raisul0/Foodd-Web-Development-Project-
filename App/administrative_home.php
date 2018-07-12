<?php
	include("administrative_top.php");
?>

	<div id="pending_order">
	<p><b>current Business :</b></p>
	</div>
	<?php	include_once("../Data/business_info_access.php");
			
			$result=allBusiness();
			
			$total=count($result);
			if($total==0){echo"Result not found !";}
        else{
			
			for($i=0;$i<$total;$i++){
				echo '<div class="DivPlaceOrder" >
							<div class="divorderimage">
								<img src="../Image/Logos/'.$result[$i]["blogo"].'" alt="Error" style="width:80px;height:80px;">
							</div>
							<div class="divordertext" >
								Name:'.$result[$i]["bname"].'</br>
								Location:'.$result[$i]["bloc"].'</br>
								<a id="underline" href="Deletebusiness.php?uname='.$result[$i]["uname"].'&bname='.$result[$i]["bname"].'"><input type="button" value="Delete"class="regbut" style="margin-left:390px;"/></a>
							</div>
						
					  </div>';
		}} ?>
			<div id="pending_order">
	<p><b>current Customers :</b></p>
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