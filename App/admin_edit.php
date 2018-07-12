<?php
	include("Base_Top_admin.php");
?>
				<form method="post" align="center">	
					<table align="center">
						<tbody>
							<tr>
								<td><b>Name</b></td>
								<td>:</td>
								<td><input name="name"required value="<?= $_SESSION['user']['name']; ?> " /></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							     <td colspan="2" align="center"><input name="cancle" class="passbut" type="button" value="Change Password" onclick="PasswordClick()"/></td>

							</tr>
							<tr>
								<td><b>Email</b></td>
								<td>:</td>
								<td><input name="email" required  value ="<?= $_SESSION['user']['email']; ?>"/></td>
							</tr>
							<tr>
								<td><b>Address</b></td>
								<td>:</td>
								<td><input name="address" required value="<?= $_SESSION['user']['address']; ?>" /></td>
							</tr>
							<tr>
								<td><b>Mobile No </b></td>
								<td>:</td>
								<td><input name="mblno" required value="<?= $_SESSION['user']['mblno']; ?>"/></td>
							</tr>
							<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

							<tr>
								<td colspan="2" align="center"><input name="cancle" class="regbut"type="button" value="Cancle" onclick="cancleClick()"/></td>
								<td colspan="3" align="center"><input type="submit" class="regbut" value="Save" /></td>
							</tr>
						</tbody>
					</table>
				</form>
<?php
	include("Base_Bot_admin.php");
?>	

<?php
	
	if($_SERVER["REQUEST_METHOD"]=='POST'){
		$flag=0;
		if(str_word_count($_REQUEST['name']<2)){
			echo "Name must contain 2 words";
			$flag=1;
		}
		
		if(filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
			   
			}else
			{
				 echo "Invalid email format </br>";
				 $flag=1;
			}
		if(!isset($_REQUEST['address'])){
			$flag=1;
			echo "Address must not be empty";
		}	
		if(!isset($_REQUEST['mblno'])){
			$flag=1;
			echo "Address must not be empty";
		}	
			
	
		
		if($flag!=1){
			$uname=$_SESSION['user']['uname'];
			$name=$_REQUEST['name'];
			$email=$_REQUEST['email'];
			$mblno=$_REQUEST['mblno'];
			$add=$_REQUEST['address'];
			
			include_once("../Data/user_access.php");
			 $result=updateUser($uname,$name,$email,$mblno,$add);
			 $_SESSION['user']=$result;
			 header("location: Admin_home.php");
		}else{
			echo "Fix All Errors";
		}
		
		
		
		
		
	}

 
?>


<script>
	
	function cancleClick(){
		window.location.href = "http://127.0.0.1/foodd_01/App/Admin_home.php";
	}
	function PasswordClick(){
		window.location.href = "http://127.0.0.1/foodd_01/App/password_admin.php?uname=<?= $_SESSION['user']['uname'];?> ";
	}
</script>	