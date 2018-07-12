<?php
	include("Base_Top_Dboy.php");
?>

	<div id="dBOY_order1">
	My Order History :
	</div>
	
	<?php
include_once("../Data/order_access.php");

		
	$result=getallorderofdboy($_SESSION['user']['uname']);
	$total=count($result);
	
	
	$total=count($result);
			if($total==0){echo"No Order History for you";}
        else{
	
	for($i=0;$i<$total;$i++){
		$orderitem=getOrdersbyid($result[$i]['orderid']);
		$user=searchUserforOrder($result[$i]['uname']);
		
		echo '<div class="ordershowdboy">
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
					echo   '</td>
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
						<tr>
							<td><b>Address</b></td>
							<td><b>:</b></td>
							<td>'.$user["address"].'</td>
						</tr>
					</tbody>
				</table>
			</div>';
		
		}}

?>
	
	<div id="dBOY_order2">
	About Me:
	</div>
	<div class="dBOY_History_order21" >
		<table>
						<tbody>
							<tr>
								<td><b>Name</b></td>
								<td>:</td>
								<td><?= $_SESSION['user']['name']; ?></td>
							</tr>
							<tr>
								<td><b>Email</b></td>
								<td>:</td>
								<td><?= $_SESSION['user']['email']; ?></td>
							</tr>
							<tr>
								<td><b>Address</b></td>
								<td>:</td>
								<td><?= $_SESSION['user']['address']; ?></td>
							</tr>
							<tr>
								<td><b>Mobile No</b></td>
								<td>:</td>
								<td><?= $_SESSION['user']['mblno']; ?></td>
							</tr>
							<tr>
								<td><b>Basic Salary</b></td>
								<td>:</td>
								<td><?= $_SESSION['dboy']['basicsalary']?></td>
							</tr>
							<tr>
								<td><b>Current Rating</b></td>
								<td>:</td>
								<td><?= $_SESSION['dboy']['currentrating']; ?></td>
							</tr>
							<tr>
								<td><b>Current Bouns</b></td>
								<td>:</td>
								<td><?= $_SESSION['dboy']['currentbonus']; ?></td>
							</tr>
							<tr>
								<td><b>Total Salary</b></td>
								<td>:</td>
								<td><?= $_SESSION['dboy']['totalsalary']; ?></td>
							</tr>
							<tr>
								<td><b>Last Salary Paid</b></td>
								<td>:</td>
								<td><?= $_SESSION['dboy']['date_salpaid']; ?></td>
							</tr>
							<tr>
								<td><b>Total Salary Paid</b></td>
								<td>:</td>
								<td><?= $_SESSION['dboy']['totalsal_paid']; ?></td>
							</tr>
						</tbody>
					</table>	
	</div>
<?php
	include("Base_Bot_Dboy.php");
?>