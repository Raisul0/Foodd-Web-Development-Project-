<?php
	if(require_once("../Data/db.php")){
		
		function addBusiness_info($uname,$bname,$bloc,$baddress,$blogo){
			
			global $conn;

			$query="INSERT INTO business_info(uname, bname, bloc, baddress, blogo) VALUES ('$uname','$bname','$bloc','$baddress','$blogo')";
		 	$result=mysqli_query($conn,$query);
			
			
			return $result;
		}
		
		function searchBusiness($bloc){
			global $conn;
			$query="SELECT * FROM business_info WHERE bloc='$bloc'";
			$result=mysqli_query($conn,$query);
				$num_rows = mysqli_num_rows($result);

			if($num_rows!=0){
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$business[$i]=$row;
			}
			return $business;
			}
		}
		
		function searchBusinessbybname($bname){
			global $conn;
			$query="SELECT * FROM business_info WHERE bname='$bname'";
			$result=mysqli_query($conn,$query);

			
			return mysqli_fetch_assoc($result);
		}
		
		
		
		function myBusiness($uname){
			global $conn;
			$query="SELECT * FROM business_info WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			
			return mysqli_fetch_assoc($result);
		}
		 
	function allBusiness(){
			global $conn;
			$query="SELECT * FROM business_info";
			$result=mysqli_query($conn,$query);
			$num_rows = mysqli_num_rows($result);

			if($num_rows!=0){
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$business[$i]=$row;
			}
			return $business;
			}
		}
		
		function deletebusiness($uname){
			global $conn;
			$query="delete FROM business_info WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			$query="delete FROM user WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			return $result;
		}
		function searchbusi($bname){
		    global $conn;
			$query="SELECT * FROM business_info WHERE bname LIKE '%$bname%' OR bloc LIKE '%$bname%'";
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