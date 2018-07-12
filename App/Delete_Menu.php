<?php
	include("Business_Top.php");
?>

<?php 
		include_once("../Data/business_item_access.php");
			$result=allItems($_SESSION['business']['bname']);
			
			$total=count($result);
			if($total==0){echo"No menu for delete !";}
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
								<a id="underline" href="DeleteItem.php?bname='.$result[$i]["bname"].'&iname='.$result[$i]["iname"].'"><input type="button" value="Delete"class="regbut" style="margin-left:290px;"/></a>
							</div>
					  </div>';
			}
		}

?>

<?php
	include("Base_Bot.php");
?>
