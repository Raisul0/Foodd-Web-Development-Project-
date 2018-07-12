<?php
	include("Base_Top_admin.php");
?>	
	
	<div id="pending_order">
	Pending Orders : (Click on Orders for Approval)
	</div>
	
<?php
include_once("../Data/order_access.php");
		
	$result=getUserOrder();
	$total=count($result);
			if($total==0){echo"No Pending Orders for Approval !";}
        else{
	
	for($i=0;$i<$total;$i++){
		$orderitem=getOrdersbyid($result[$i]['orderid']);
		
		echo '<div class="OrderHistoryDiva">
		<a href="Approve_Orders.php?orderid='.$result[$i]["orderid"].'" class="fill-div" />
				<table>
					<tbody>
					<tr>
							<td><b> orderid</b></td>
							<td><b>:</b></td>
							<td>'.$result[$i]["orderid"].'</td>
						</tr>
						<tr>
							<td><b>Customer Name</b></td>
							<td><b>:</b></td>
							<td>'.$result[$i]["uname"].'</td>
						</tr>
						<tr>
							<td><b>Restaurant Name</b></td>
							<td><b>:</b></td>
							<td>'.$result[$i]["bname"].'</td>
						</tr>				
					</tbody>
				</table>
				</a>
			</div>'
			
			;
		
	}
		}
?>
	
		
	
	
	

<?php
	include("Base_Bot_admin.php");
?>