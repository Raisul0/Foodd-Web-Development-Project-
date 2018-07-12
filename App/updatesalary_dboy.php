<?php
	include("account_top.php");
?>	

					<div id="rating_details_4">
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
							<td> <?=$_GET['uname']?> </td>
						</tr>
							<tr>
							<td>Previous Salary</td>
							<td>:</td>
							<td><?=$_GET['basicsalary']?></td>
							<td>Tk</td>
						</tr>
						<tr>
							<td>New Salary</td>
							<td>:</td>
							<td><input name="amount" required /></br></td>
							<td>Tk</td>
						</tr>
						<tr></tr><tr> </tr><tr> </tr>
						<tr> 
							<td>  </td>
							
							<td colspan="3" ><a id="underline" href="http://127.0.0.1/foodd_01/App/Salary_dboy.php"><input class="regbut" name="cancle" type="button" value="Cancle"/></a></td>			
							<td colspan="3" ><input type="submit" class="regbut" value="Add Salary"/></td>
							
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
		
		include_once("../Data/dboy_access.php");
	
					
			$basicsalary=$_REQUEST['amount'];
			
			
			$totalsalary=$_REQUEST['amount']+$_GET['currentbonus'];
		  
			
			
			if(updatesalary($basicsalary,$totalsalary,$_GET['uname'])){
				echo "Insert Successfull";
				header("location: salary_dboy.php");
			}else{
				echo "Server issue's try again later";
			}
	}		
?>