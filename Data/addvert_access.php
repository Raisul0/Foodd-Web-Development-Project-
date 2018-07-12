<?php
	if(require_once("../Data/db.php")){
		
		function placeAdd($bname,$cost){
			global $conn;	
	
			if(searchAdd($bname)==null){
			
				$query="INSERT INTO addvert(bname, cost) VALUES ('$bname','$cost')";
				$result=mysqli_query($conn,$query);
			}else{
				
				$query="UPDATE addvert SET cost='$cost' WHERE bname='$bname'";
				$result=mysqli_query($conn,$query);
				
			}
			
			return $result;
		}
		
		function searchAdd($bname){
			global $conn;	
			
			$query="SELECT * FROM addvert WHERE bname='$bname'";
		 	$result=mysqli_query($conn,$query);
			
			return mysqli_fetch_assoc($result);
		}
		
		function getTop2(){
			global $conn;
			
			$query="SELECT * FROM addvert ORDER BY cost DESC";
		 	$result=mysqli_query($conn,$query);
			
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
					$top2[$i]=$row;
				}
				
				
			return $top2;
		}
		function deletebusinessadvar($uname){
			global $conn;
			$query="delete FROM addvert WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			return $result;
		}
		
	}else{
		echo "Database Error";
	}
		
?>