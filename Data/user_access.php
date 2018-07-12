<?php
	if(require_once("../Data/db.php")){
	
		function searchUser($uname){
			global $conn;
			$query="SELECT * FROM user WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			
			return mysqli_fetch_assoc($result);
		}
		
		function addUser($name,$uname,$pass,$email,$mblno,$add,$type){
			
			global $conn;

			$query="INSERT INTO user(name, uname, pass, email, mblno, address, type) VALUES ('$name','$uname','$pass','$email','$mblno','$add','$type')";
		 	$result=mysqli_query($conn,$query);
			
			
			return $result;
		}
		function updateUser($uname,$name,$email,$mblno,$add){
			global $conn;
			$query="UPDATE user SET name='$name', email='$email', mblno='$mblno', address='$add' WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			
			return searchUser($uname);
		
		}
		
		function deleteUser($uname){
			global $conn;
			$query="delete FROM user WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			
			return $result;
		}
		
		function updatepassword($uname,$pass){
			global $conn;
			$query="UPDATE user SET pass='$pass' WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);	
			return 1;
		
		}
		function allcustomer()
		{
			global $conn;
			$query="SELECT * FROM user WHERE type='customer' OR type='c'";
			$result=mysqli_query($conn,$query);
			$num_rows = mysqli_num_rows($result);

			if($num_rows!=0){
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$customer[$i]=$row;
			}
			return $customer;
			}
		}
		
		function Businesstype($uname)
		{
			global $conn;
			$query="SELECT * FROM user WHERE WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			$customer;
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$customer[$i]=$row;
			}
			return $customer;
		}
		
		function updatedeactive($uname){
			global $conn;
			$query="UPDATE user SET type='c' WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);	
			return 1;
		}
		function updateactive($uname){
			global $conn;
			$query="UPDATE user SET type='customer' WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);	
			return 1;
		}
		function searchalluser($uname){
		    global $conn;
			$query="SELECT * FROM user WHERE uname LIKE '%$uname%' OR address LIKE '%$uname%' OR type LIKE '%$uname%' OR name LIKE '%$uname%' OR email LIKE '%$uname%'";
			
	
            
			$result=mysqli_query($conn,$query);
			$num_rows = mysqli_num_rows($result);
			if($num_rows!=0){
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$business[$i]=$row;
			}
			return $business;
			}
									
					}
	  
					
	}else{
		echo "Database not found";
	}
	
?>