<?php
		include("Base_Top.php");
?>
	
		<form method="POST" align="center" >
				<table align="center"  color="red" cellpadding='25'cellspacing='0'>
					<thead>
					</thead>
					<tbody>
					   <tr>
							<td>Current Password</td>
							<td>:</td>
							<td><input name="cpass" type="password" required /></br></td>
						</tr>				
						<tr>
							<td>New Password</td>
							<td>:</td>
							<td><input name="npass" type="password" required /></br></td>
						</tr>
						<tr>
							<td> New Confirm Password</td>
							<td>:</td>
							<td><input name="ncpass" type="password" required /></br></td>
						</tr>
                          <tr></tr><tr></tr><tr></tr>
						
					</tbody>
					<thead>
						<tr>
							<th colspan="2" ><a id="underline" href="http://127.0.0.1/foodd_01/App/User_Home.php"><input name="cancle" class="regbut"type="button" value="Cancle"/></a></th>
							<th colspan="3" ><input type="submit"class="regbut" value="Changed"/></th>
							
						</tr>
					</thead>
						
					
				</table>
		</form>
<?php
	
	if($_SERVER["REQUEST_METHOD"]=='POST'){
	
	
			$cpass=$_REQUEST['cpass'];
			$npass=$_REQUEST['npass'];
			$ncpass=$_REQUEST['ncpass'];
			
			
			include_once("../Data/user_access.php");
			$result=searchUser($_GET['uname']);
			if(($result['pass']==base64_encode($cpass))||$result['pass']==$cpass){
				if($npass==$ncpass){
					if(strlen($npass)>=8){
					updatepassword($_GET['uname'],base64_encode($npass));
					 header("location: User_Home.php");
					}
					else{echo"password need to 8 characters";}
				}
			}
			else
			{
				echo"password didn't match";
			}
				
		
	}
	?>
<?php
			
	 include("Base_Bot.php");
?>
