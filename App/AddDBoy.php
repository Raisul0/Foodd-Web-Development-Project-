<?php
	include("administrative_top.php");
?>
				<form method="post">	
					<table>
						<tbody>
							<tr>
								<td><b>Name</b></td>
								<td>:</td>
								<td><input name="name"required /></td>
							</tr>
							<tr>
								<td><b>User Name</b></td>
								<td>:</td>
								<td><input name="uname" required  /></td>
							</tr>
							<tr>
							<td><b>Password</b></td>
							<td>:</td>
							<td><input name="pass" type="password" required /></br></td>
						</tr>
						<tr>
							<td><b>Confirm Password</b></td>
							<td>:</td>
							<td><input name="cpass" type="password" required /></br></td>
						</tr>
							<tr>
								<td><b>Email</b></td>
								<td>:</td>
								<td><input name="email"required /></td>
							</tr>
							<tr>
								<td><b>Address</b></td>
								<td>:</td>
								<td><input name="address"required /></td>
							</tr>
							<tr>
								<td><b>Mobile No</b></td>
								<td>:</td>
								<td><input name="mblno"required /></td>
							</tr>
							<tr>
								<td><b>Basic Salary (Tk)</b></td>
								<td>:</td>
								<td><input name="salary"required /></td>
							</tr>
							<tr>
								<td><b>Type</b></td>
								<td>:</td>
								<td> dboy<input Type="Hidden" value="dboy" name="type"/></td>
							</tr>
							<div id="cancelbutton">
							
							<a id="underline" href="http://127.0.0.1/foodd_01/App/administrative_home.php"><input class="regbut" name="cancle" type="button" value="Cancle"/></a></th>
							
							</div>
							<div id="addbutton">
							
								 <input name="addadmin" type="submit" class="regbut" value="Add Delivaryboy"/></th>
							</div>
						
						</tbody>
					</table>
				</form>
<?php
	include("Base_Bot_admin.php");
?>	

<?php
	
	if($_SERVER["REQUEST_METHOD"]=='POST'){
		
		include_once("../Data/dboy_access.php");
		
		$flag=0;
		
		$uname=$_REQUEST['uname'];
		
		if(str_word_count($_REQUEST['name']<2)){
			echo "Name must contain 2 words";
			$flag=1;
		}
		
		if(!preg_match('/[^a-zA-z_]/',$uname)){
			
			
			
			$result=searchUser_dboy($uname);
			
			if($result==null){
			}else{
				echo " <ol> <li>Username already in use </li></br>";
				$flag=1;
			}
			
		}else{
			echo " <li>Invalid Characters in UserName</li> </br>";
			$flag=1;
		}
		
		if(filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
		   
        }else
		{
			 echo "<li>Invalid email format</li> </br>";
			 $flag=1;
		}
		
		if(strlen($_REQUEST['pass'])>=8){
			
			if($_REQUEST['pass']==$_REQUEST['cpass'] ){
			}else{
				echo "<li>Password Didn't Match</li> </br>";
				$flag=1;
			}
		}else{
			echo "<li>Password Needs to be 8 Character long </li></br>";
			$flag=1;
		}
		
			
		
		  
		if(!preg_match('/[^0-9]/',$_REQUEST['mblno'])){
			}else{
				echo "<li>Invalid Characters in Mobile No </li> </br> </ol>";
				$flag=1;
			}
			
		if(!preg_match('/[^0-9]/',$_REQUEST['salary'])){
			}else{
				echo "<li>Invalid Characters in salary </li> </br> </ol>";
				$flag=1;
			}
			
		if($flag!=1){
			$uname=$_REQUEST['uname'];
			$name=$_REQUEST['name'];
			$pass=base64_encode($_REQUEST['pass']);
			$email=$_REQUEST['email'];
			$mblno=$_REQUEST['mblno'];
			$add=$_REQUEST['address'];
			$type="dboy";
			$basicsalary=$_REQUEST['salary'];
			$currentrating=1;
			$currentbonus=0;
			$totalsalary=$_REQUEST['salary']+$currentbonus;
			$stage="available";
			
			
			
			if(addUser($name,$uname,$pass,$email,$mblno,$add,$type) && adddboy_info($uname,$basicsalary,$currentrating,$currentbonus,$totalsalary,$stage)){
				echo '<script>
					alert("Insert Successfull");					
					</script>';
				header("location: administrative_home.php");
			}else{
				echo "Server issue's try again later";
			}
						
		}else{
			  echo " <ul> <li>Fix all the Problems And Try Again !! </li></ul>  "; 
		}	
	}
 
?>