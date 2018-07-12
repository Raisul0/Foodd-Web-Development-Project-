<?php
	include("Business_Top.php");
?>

<?php 
		include_once("../Data/business_item_access.php");
			$result=allItems($_SESSION['business']['bname']);
			
			$total=count($result);
			if($total==0){echo"No menu for showw,Add Menu Please !";}
        else{
			
			for($i=0;$i<$total;$i++){
				echo '<div class="DivPlaceOrder" >
							<div class="divorderimagecontainer">
								<div id="divimage">
									<img src="../Image/Items/'.$result[$i]["itempic"].'" alt="Error">
								</div>
							</div>
							<div class="divordertext" >
								<b>Item Name:</b>'.$result[$i]["iname"].'</br>
								<b>Price:</b>'.$result[$i]["price"].'Tk
							</div>
					  </div>';
			}
		}

?>

<?php
	include("Base_Bot.php");
?>
