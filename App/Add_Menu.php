<?php
	include("Business_Top.php");
?>
	<div id="restaurantname"><h3><?=$_SESSION['business']['bname'];?></h3></div>

				<div id="addmenu">
					<div id="addtable">	
						<form method="post" enctype="multipart/form-data">
							<table>
								<tbody>
									<tr>
										<td><b>Name</b></td>
										<td>:</td>
										<td><input name="name" required/></td>
									</tr>
									<tr>
										<td><b>Price</b></td>
										<td>:</td>
										<td><input type="number" name="price" required/>Tk</td>
									</tr>
									<tr>
										<td><b>Item Picture</b></td>
										<td>:</td>
										<td ><input type="file" name="itempic" accept="image/*" required> </td>
									</tr>
									<tr>
										<th colspan='3'  ><input type="submit" class="regbut" value="Add"/></th>
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
			
		$flag=0;
		if(!isset($_REQUEST['name'])){
			$flag=1;
			echo "Name must not be empty";
		}
		
		if(!isset($_REQUEST['price'])){
			$flag=1;
			echo "Price must not be empty";
		}
		
		if($flag!=1){
			include_once("../Data/business_item_access.php");
			$iname=$_REQUEST['name'];
			$price=$_REQUEST['price'];
			$bname=$_SESSION['business']['bname'];
			$itempic=$_FILES['itempic']['name'];
			
			$target = "../Image/Items/".basename($_FILES['itempic']['name']);
			
			if (move_uploaded_file($_FILES['itempic']['tmp_name'],$target)) {
					echo "Image uploaded successfully";
			}else{
					echo "Failed to upload image";
			}
			
			
			
			if(addItem($bname,$iname,$price,$itempic)){
				echo "Insert Successfull";
			}else{
				echo "Server issue's try again later";
			}
			
			
		}else{
			echo "Fix All Errors";
		}
		
		
	}


?>

					