<?php
	include("account_top.php");
?>	
<div class="assigndboy">
<form method="post" align="center" >
				<table align="center" border='0' color="red" cellpadding='20'cellspacing='0'>
					<thead>
						<tr>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> Expenses Name </td>
							<td> : </td>
							<td><input name="ename" placeholder="Expenses Name ...."required /></br></td>
						</tr>
						
						<tr>
							<td>amount</td>
							<td>:</td>
							<td><input name="amount" required placeholder="Expenses Amount ...."/></br></td>
							<td>Tk</td>
						</tr>
						<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
							<tr >
							<td> </td><td> </td>
							<td colspan="3" ><input type="submit" class="regbut" value="Add Expense"/></td>
							
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
		  
          if($cost>0){
			
			
			if(addexpense($expenses_name,$cost,$date_ex)){
				echo "Insert Successfull";
				header("location: Account.php");
			}else{
				echo "Server issue's try again later";
			}
		}
		 else
				{
				echo "Invalid Cost !!!";

               }
	}		
?>