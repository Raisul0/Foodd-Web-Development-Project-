<?php
	include("Business_Top.php");
?>
	<div id="restaurantname"><h3><?=$_SESSION['business']['bname'];?></h3></div>

				<div id="addmenu">
					<div id="addtable">	
						<form method="post">
						<table>
							<tbody>
								<tr>
									<td><b>Search Name</b></td>
										<td>:</td>
										<td>
											<select name="itname">
												<?php 
													include_once("../Data/business_item_access.php");
													
													$result=allItems($_SESSION['business']['bname']);
													$total=count($result);
														
													for($i=0;$i<$total;$i++){
														echo '<option>'.$result[$i]['iname'].'</option>';
													}
												?>
											</select>
									</td>
								</tr>
								<tr>
									<td><b>Price</b></td>
									<td>:</td>
									<td><input name="price" type="number" name="price"/>Tk</td>
								</tr>
								<tr>
									<th colspan='3'  ><input type="submit"class="regbut" value="Update"/></th>
								</tr>
							</tbody>
						</table>
						</form>
					</div>	
				</div>

<?php
	include("Base_Bot.php");
?>


<?php
	
	if($_SERVER["REQUEST_METHOD"]=='POST'){
		
		if(isset($_REQUEST['price'])){
		
			$result=updateItem($_SESSION['business']['bname'],$_REQUEST['itname'],$_REQUEST['price']);
			
			if($result==true){
				echo "Done";
			}else{
				echo "Server issue";
			}
			
		}else{
			echo "Price must not be empty";
		}
		
		
		
		
		
		
	}
	

?>