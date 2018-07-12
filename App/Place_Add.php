<?php
	include("Business_Top.php");
?>

<?php
	
	if($_SERVER["REQUEST_METHOD"]=='POST'){
			include_once("../Data/account_access.php");
			include_once("../Data/addvert_access.php");
			if($_REQUEST['cost']>=2000){
			if($_REQUEST['cost']>$_REQUEST['lowest']){
				placeAdd($_SESSION['business']['bname'],$_REQUEST['cost']);
				$income_name="Place_add_".$_SESSION['business']['bname'];
				$income_cost=$_REQUEST['cost'];
				$date_income=date("Y/m/d");
						
				addincome($income_name,$income_cost,$date_income);
				header("location: Place_Add.php");
			}else{
				echo "Place greater Amount";
			}
			}
			else{echo "Place greater Amount at least 2000";}
		
	}	
?>

	<div id="restaurantnamead"><h3><?=$_SESSION['business']['bname'];?></h3></div>

	<div id="Adds">
		<div id="AddsTable">
						<table>
							<tbody>
								<?php 
									include_once("../Data/addvert_access.php");
									$result=getTop2();
									
									for($i=0;$i<2;$i++){
										echo '<tr>
												<td><b>Add</b></td>
												<td>:</td>
												<td><input name="name" value="'.$result[$i]["bname"].'" readonly/></td>
												<td><input name="price" value="'.$result[$i]["cost"].'" readonly/>Tk</td>
											 </tr>';
										
									}
								?>
							</tbody>
						</table>	
		</div>
	</div>
	<div id="placeAdd">
		<div id="placeAddTable">
					<form method="post">
						<table>
							<tbody>
								<tr>
									<td><b>Place Your Tk</b></td>
									<td>:</td>
									<td><input type="number" name="cost"/>Tk</td>
								</tr>
								<tr>
									<th colspan='2.5'  ><td><input type="submit" class="regbut" value="Place"/></td></th>
								</tr>
							</tbody>
						</table>
						<input type="hidden" name="lowest" value="<?=$result[1]["cost"]?>"/>
					</form>
		</div>
	</div>

<?php
	include("Base_Bot.php");
?>