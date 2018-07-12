<?php
	include("Business_Top.php");
?>

<?php

	include_once("../Data/business_info_access.php");
	$_SESSION['business']=myBusiness($_SESSION['user']['uname']);


	include_once("../Data/Orders_access.php");
	$result=getallapproveOrder($_SESSION['business']['bname']);
	$total=count($result);
			if($total==0){echo"No order for your Restarunt now !";}
        else{

	
	for($i=0;$i<$total;$i++){
		$orderitem=getOrdersbyid($result[$i]['orderid']);
		
		echo '<div class="OrderHistoryDivbhmoe">
				<table>
					<tbody>
						<tr>
							<td><b>Items</b></td>
							<td><b>:</b></td>
							<td>';
				for($j=0;$j<$result[$i]['countorder'];$j++){	
					echo   $orderitem[$j]["iname"]." x".$orderitem[$j]["quantity"].",";		
				}		
					echo   '</td>
						</tr>
						<tr>
							<td><b>Time</b></td>
							<td><b>:<b></td>
							<td>'.$result[$i]["ordertime"].'</td>
							<td ><a id="underline"href="OrderReady.php?orderid='.$result[$i]['orderid'].'"><input type="button" class="regbut"value="Done" style="margin-left:200px;" /></a></td>
						</tr>
						<tr>
							<td><b>Deleivery Boy</b></td>
							<td><b>:</b></td>
							<td>'.$result[$i]["dboy"].'</td>
						</tr>
						<tr>
							<td><b>Order Status</b></td>
							<td><b>:</b></td>
							<td>'.$result[$i]["orderstatus"].'</td>
						</tr>
					</tbody>
				</table>
			</div>';
		
	}
		}
?>
<?php
	include("Base_Bot.php");
	
?>
