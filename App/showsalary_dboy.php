<?php
	include("account_top.php");
?>
<div id="rating_details_4" >
<form method="post" align="center" >
				<table align="center" border='0' color="red" cellpadding='20'cellspacing='0'>
					<thead>
						<tr>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> Delivary Boy Name </td>
							<td> : </td>
							<td><input type="hidden"name="ename" value="salary_<?=$_GET['uname']?>"required /></br></td>
							<td> <?=$_GET['uname']?> </td>
						</tr>
						
						<tr>
							<td>Salary</td>
							<td>:</td>
							<td><input type="hidden"name="amount" value="<?=$_GET['totalsalary']?>"required /></br></td>
							<td><?=$_GET['totalsalary']?></td>
							<td>Tk</td>
						</tr>
						<tr>
							<td> late Paid Date </td>
							<td> : </td>
							<td><input type="hidden"name="lpdate" value="<?=$_GET['date_salpaid']?>"required /></br></td>
							<td> <?=$_GET['date_salpaid']?> </td>
						</tr>
						
						<tr>
							<td>Total Paid amount</td>
							<td>:</td>
							<td><input type="hidden"name="tpamount" value="<?=$_GET['totalsal_paid']?>"required /></br></td>
							<td><?=$_GET['totalsal_paid']?></td>
							<td>Tk</td>
						</tr>
						<tr></tr><tr> </tr><tr> </tr>
						<tr> 
							<td>  </td>
							
							
							<td colspan="3" ><a id="underline" href="http://127.0.0.1/foodd_01/App/Salary_dboy.php"><input class="regbut" name="cancle" type="button" value="Cancle"/></a></td>
							
							
							<td colspan="3" ><input type="submit" class="regbut" value="Paid Salary"/></td>
							
						</tr>
					</thead>
						
					
				</table>
		</form>
		</div>
<?php
	include("account_bottom.php");
?>	
<?php
	
	if($_SERVER["REQUEST_METHOD"]=='POST'){
		
		include_once("../Data/account_access.php");
	
					
			$expenses_name=$_REQUEST['ename'];
			$cost=$_REQUEST['amount'];
			$date_ex=date("Y/m/d");
			
			
			$total_amount_paid=$_REQUEST['tpamount']+$_REQUEST['amount'];
		  
			
			
			if(addexpense($expenses_name,$cost,$date_ex)& updatedboysal($_GET['uname'],$total_amount_paid,$date_ex)){
				echo "Insert Successfull";
				header("location: salary_dboy.php");
			}else{
				echo "Server issue's try again later";
			}
	}		
?>