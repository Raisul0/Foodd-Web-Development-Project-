<?php
	include("Business_Top.php");
?>

<?php
	include_once("../Data/Orders_access.php");
		include_once("../Data/business_info_access.php");
	$result=myBusiness($_SESSION['user']['uname']);
	$_SESSION['bser']=$result['bname'];
	$result=getmyorderhistory($result['bname']);
    

	$total=count($result);	
	if($total==0){echo"No History Found";}
        else{
	for($i=0;$i<$total;$i++){
		$orderitem=getOrdersbyid($result[$i]['orderid']);
		
		echo '<div class="OrderHistoryDivbde">
				<table>
					<tbody>
						<tr>
							<td><b>Restaurant Name</b></td>
							<td><b>:</b></td>
							<td>'.$_SESSION['bser'].'</td>
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
