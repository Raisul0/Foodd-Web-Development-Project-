<?php
	include("Base_Top.php");
?>
	
<?php
	include_once("../Data/Orders_access.php");
	$result=getUserOrder($_SESSION['user']['uname']);
	$total=count($result);
	
				if($total==0){echo"No History Found";}
        else{
	for($i=0;$i<$total;$i++){
		$orderitem=getOrdersbyid($result[$i]['orderid']);
		
		echo '<div class="OrderHistoryDiv">
		<a href="give_rating.php?dboy='.$result[$i]["dboy"].'" class="fill-div" />
				<table>
					<tbody>
						<tr>
							<td><b>Restaurant Name</b></td>
							<td><b>:</b></td>
							<td>'.$result[$i]["bname"].'</td>
						</tr>
						<tr>
							<td><b>Items</b></td>
							<td><b>:</b></td>
							<td>';
				for($j=0;$j<$result[$i]['countorder'];$j++){	
					echo   $orderitem[$j]["iname"]." x".$orderitem[$j]["quantity"].",";	
					
				}		
					echo  '
 
</td>
						</tr>
						<tr>
							<td><b>Time</b></td>
							<td><b>:<b></td>
							<td>'.$result[$i]["ordertime"].'</td>
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
						<tr>
							<td><b>Total</b></td>
							<td><b>:</b></td>
							<td>'.$result[$i]["total"].'</td>
						</tr>
						
					</tbody>
				</table>
				</a>
			</div>';
		
		}}

?>
	
<?php
	include("Base_Bot.php");
?>