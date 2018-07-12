<?php
	include("Base_Top.php");
?>
<?php
	$dboy=$_GET['dboy'];
	if($dboy=="Unassinged"){
		header("location:Order_History.php");
	}
	
?>

				<div id="addmenu">
					<div id="addtable">	
						<form method="post" enctype="multipart/form-data">
							<table>
								<tbody>
									<tr>
									<td >  </td>
									<td >  </td>
									<td >  </td>
										<td > Rate <?=$dboy;?> </td>
									</tr>
									<tr>
									
										
										<td >	<input name="rate" class="radio-btn" value="1" type="radio" checked />1</br>
												<input name="rate" class="radio-btn" value="2" type="radio"/>2</br>
												<input name="rate"  class="radio-btn" value="3" type="radio"/>3</br>
												<input name="rate"  class="radio-btn"value="4" type="radio"/>4</br>
												<input name="rate" class="radio-btn"value="5" type="radio"/>5</br>
										</td>
										<td >  </td>
										<td >  </td><td >  </td>
										<tr>
										<td >  </td>
										<td >  </td><td >  </td>
							         <td><input class="regbut"type="submit" value="Rate <?=$dboy;?>  "/></td>
							
						</tr>
									</tr>
							</table>
						</form>
					</div>	
				</div>


<?php

	if($_SERVER["REQUEST_METHOD"]=='POST'){
			
		$flag=0;
		$rate=0;

		if($_REQUEST['rate']=='1')
		{
			
			$rate=1;
			echo "<br/>";
		}
		else if($_REQUEST['rate']=='2')
		{
			
			$rate=2;
			echo "<br/>";
		}
       else if($_REQUEST['rate']=='3')
		{
            echo "1";
			$rate=3;			
			echo "<br/>";
		}
		else if($_REQUEST['rate']=='4')
		{
			echo "1";
			$rate=4;
			echo "<br/>";
		}
		else if($_REQUEST['rate']=='5')
		{
			echo "1";
			$rate=5;
			echo "<br/>";
		}
		else
		{	
			echo "None";
			$flag=1;
			
		}
		if($flag!=1){
		require_once("../Data/dboy_access.php");
		$result=searchUser_dboy($_GET['dboy']);
		$pr=$result['currentrating'];
		$ar=($pr+$rate)/2;
		
		if(updaterating($ar,$_GET['dboy'])){
			header("location: User_Home.php");
		}	
		}
		else
		{
			header("location:Order_History.php");
		}
		
	}


?>
	
<?php
	include("Base_Bot.php");
?>