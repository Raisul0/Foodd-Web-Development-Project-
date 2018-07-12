<?php
	include("administrative_top.php");
?>	
	
	<form method="post" align="center" enctype="multipart/form-data">
				<table align="center" border='0' color="red" cellpadding='20'cellspacing='0'>
					<thead>
						<tr>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> Name </td>
							<td> : </td>
							<td><input name="name" required /></br></td>
						</tr>
						<tr>
							<td>Username</td>
							<td>:</td>
							<td><input name="uname" required /></br></td>
						</tr>
						<tr>
							<td>Password</td>
							<td>:</td>
							<td><input name="pass" type="password" required /></br></td>
						</tr>
						<tr>
							<td>Confirm Password</td>
							<td>:</td>
							<td><input name="cpass" type="password" required /></br></td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td><input name="email" required/></br></td>
						</tr>
						<tr>
							<td>Mobile No</td>
							<td>:</td>
							<td><input name="mbl" required/></br></td>
						</tr>
						<tr>
							<td>Business Catagory</td>
							<td>:</td>
							<td> <select><option>Cafe (eg:ABC Cafe) </option> <option>Restrurent(eg: XYZ Restrurent)</option><option>Others(eg: pizaa abc)</option></select></br></td>
						</tr>
						<tr>
							<td>Business Name </td>
							<td> : </td>
							<td><input name="bname" required /></br></td>
						</tr>
						<tr>
							<td>Business Location(Area)</td>
							<td>:</td>
							<td> <select name="bloc"><option>Uttora </option> <option>Airport</option><option>Boshundora</option><option>Bonani</option><option>Gulshan1,2</option><option>Rampura</option><option>Khilgong</option><option>Danmondhi</option></select></br></td>
						</tr>
						<tr>
							<td>Business Address(Full)</td>
							<td>:</td>
							<td><input name="baddress" required /></br></td>
						</tr>
						<tr>
							<td>Business Logo</td>
							<td>:</td>
							<td ><input type="file" name="blogo" accept="image/*" required> </td>
						</tr>
					</tbody>
					<thead>
						<tr>
							
							<th colspan="2" ><a id="underline" href="http://127.0.0.1/foodd_01/App/administrative_home.php"><input class="regbut" name="cancle" type="button" value="Cancle"/></a></th>
							<th colspan="3" ><input type="submit" class="regbut" value="Submit"/></th>
							
						</tr>
					</thead>
						
					
				</table>
		</form>

<?php
	include("Base_Bot_admin.php");
?>
<?php
	
	if($_SERVER["REQUEST_METHOD"]=='POST'){
		
		var_dump($_FILES['blogo']['name']);
		
		include_once("../Data/user_access.php");
		include_once("../Data/business_info_access.php");
		
		$flag=0;
		
		$uname=$_REQUEST['uname'];
		
		if(str_word_count($_REQUEST['name']<2)){
			echo "Name must contain 2 words";
			$flag=1;
		}
		
		if(!preg_match('/[^a-zA-z_]/',$uname)){
			
			
			
			$result=searchUser($uname);
			
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
		
			
		
		  
		if(!preg_match('/[^0-9]/',$_REQUEST['mbl'])){
			}else{
				echo "<li>Invalid Characters in Mobile No </li> </br> </ol>";
				$flag=1;
			}
			
		if($flag!=1){
			
			$uname=$_REQUEST['uname'];
			$name=$_REQUEST['name'];
			$pass=base64_encode($_REQUEST['pass']);
			$email=$_REQUEST['email'];
			$mblno=$_REQUEST['mbl'];
			$bname=$_REQUEST['bname'];
			$bloc=$_REQUEST['bloc'];
			$baddress=$_REQUEST['baddress'];
			$blogo=$_FILES['blogo']['name'];
			$type="business";
			
			$target = "../Image/Logos/".basename($_FILES['blogo']['name']);
			
			if (move_uploaded_file($_FILES['blogo']['tmp_name'],$target)) {
					echo "Image uploaded successfully";
			}else{
					echo "Failed to upload image";
			}
				
				
				
			
			if(addUser($name,$uname,$pass,$email,$mblno,$bloc,$type) && addBusiness_info($uname,$bname,$bloc,$baddress,$blogo)){
				echo "Insert Successfull";
			}else{
				echo "Server issue's try again later";
			}
		}else{
			  echo " <ul> <li>Fix all the Problems And Try Again !! </li></ul>  "; 
		}	
	}
 
?>