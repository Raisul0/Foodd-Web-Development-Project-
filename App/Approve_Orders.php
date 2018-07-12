<?php
	include("Base_Top_admin.php");
?>
<?php
	
	if($_SERVER["REQUEST_METHOD"]=='POST'){
					include_once("../Data/order_access.php");

		
		if(isset($_REQUEST['sdboy'])){
		
			$result=updateorderdboy($_REQUEST['sdboy'],$_GET['orderid']);
			
			if($result==true){
				echo "Done";
				header('location:Admin_home.php');
			}else{
				echo "Server issue";
			}
			
		}else{
			echo "Price must not be empty";
		}
		
		
		
	}
?>
	<div id="order_details">
		Order Details :
	</div>

		<?php
	include_once("../Data/Order_access.php");
	$result=getUserOrderwithu($_GET['orderid']);
	$total=count($result);
	
	
	for($i=0;$i<$total;$i++){
		$orderitem=getOrdersbyid($result[$i]['orderid']);
		
		echo '<div class="assigndboy">
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
					</tbody>
				</table>
			</div>';
		
	}

?>

	
	<div id="order_details3">
			 Send To :
			 <form method='post'>
			 <label>
			 <select name='sdboy' class="sdboy">
			 <?php
			 
		include_once("../Data/dboy_access.php");
													
		$result=availabledboy();
		$total=count($result);
													
		for($i=0;$i<$total;$i++){
		echo ' <option>'.$result[$i]['uname'].'</option>';
		}
			 ?>
			 </select>
			 </label>
	
		</div>
		<?php 
		
		if($total==0){
			echo ' <div id="back_order">
			<th colspan="2" ><a href="http://127.0.0.1/foodd_01/App/Admin_home.php"><input name="cancle" class="regbut" type="button" value="Cancle"/></a></th>							
			</div>
			<div id="send_order">
							
				 <input name="send" type="button" class="regbut"value="Delivaryboy Is Not available"  disabled />
				 </form>			
			</div>';
			
		}else{
			echo' <div id="back_order">
			<th colspan="2" ><a id="underline" href="http://127.0.0.1/foodd_01/App/Admin_home.php"><input name="cancle" class="regbut" type="button" value="Cancle"/></a></th>
		
							
			</div>
			<div id="send_order">
							
				 <input name="send" type="submit" class="regbut"value="send To Delivaryboy"/>
				 </form>			
			</div>';
		}
		
			
		?>

<?php
	include("Base_Bot_admin.php");
?>
