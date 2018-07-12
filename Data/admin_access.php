<?php
	if(require_once("../Data/db.php")){
		
	function search_admin($uname){
			global $conn;
			$query="SELECT * FROM user WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			return mysqli_fetch_assoc($result);
		}
		
		function addUser($name,$uname,$pass,$email,$mblno,$add,$type){
			
			global $conn;

			$query="INSERT INTO user(name, uname, pass, email, mblno, address,type) VALUES ('$name','$uname','$pass','$email','$mblno','$add','$type')";
		 	$result=mysqli_query($conn,$query);
			
			
			return $result;
		}
		
		function show_admin()
		{
			global $conn;
			$query="SELECT * FROM user where type='admin'";
			$result=mysqli_query($conn,$query);
			$num_rows = mysqli_num_rows($result);

			if($num_rows!=0){
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$dboy[$i]=$row;
			}
			return $dboy;
			}
		}
		
		
		function deleteadmin($uname)
		{
			global $conn;
			$query="DELETE FROM user WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
		     return 1;
		}
		
		
	}else{
		echo "Database not found";
	}
	
?>