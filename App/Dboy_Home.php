<?php
	include("Base_Top_Dboy.php");
?>

	<div id="dBOY_order1">
	My Orders :
	</div>
	
	<?php
include_once("../Data/order_access.php");

		
	$result=getcorderofdboy($_SESSION['user']['uname']);
	$total=count($result);
	
	$total=count($result);
			if($total==0){echo"No Current Order for Delivary for you !";}
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
				if($result[$i]["orderstatus"]=="Ready"){
					echo '<script>
					alert("Your Order is ready !! Hurry");
					
					</script>';
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
						<tr>
							<td><b>Mobile No</b></td>
							<td><b>:</b></td>
							<td>'.$user["mblno"].'</td>
						</tr>
					</tbody>
				</table>
			</div>';
		
	}
	?>
		<div   id="insidedBOY_order21">
			<a href="updatedboyorder.php?uname=<?=$_SESSION['user']['uname'];?>&orderid=<?= $result[0]["orderid"]; ?>"> Done </a>
		</div>
		<?php
		}

?>
	
	

	

<?php
	include("Base_Bot_Dboy.php");
	include_once("../Data/dboy_access.php");
	$_SESSION['dboy']=searchUser_dboy($_SESSION['user']['uname']);
?>