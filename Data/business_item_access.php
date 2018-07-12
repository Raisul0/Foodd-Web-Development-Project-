<?php
	if(require_once("../Data/db.php")){
		
		
		function addItem($bname,$iname,$price,$itempic){
			
			global $conn;
			

			$iname = str_replace(' ', '_', $iname);


			$query="INSERT INTO business_item(bname, iname, price, itempic) VALUES ('$bname','$iname','$price', '$itempic')";
		 	$result=mysqli_query($conn,$query);
			
			return $result;
		}
		
		function allItems($bname){
			global $conn;
			$query="SELECT * FROM business_item WHERE bname='$bname'";
		 	$result=mysqli_query($conn,$query);
			$num_rows = mysqli_num_rows($result);
			if($num_rows!=0){
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$items[$i]=$row;
			}
			return $items;
			}
		}
		
		function getitemPrice($bname,$iname){
			
			global $conn;
			
			$query="SELECT * FROM business_item WHERE bname='$bname' AND iname='$iname'";
		 	$result=mysqli_query($conn,$query);
			
			return mysqli_fetch_assoc($result);
		}
		
		function deleteItem($bname,$iname){
			global $conn;
			$query="delete FROM business_item WHERE bname='$bname' AND iname='$iname'";
			$result=mysqli_query($conn,$query);
			
			return $result;
		}
		function updateItem($bname,$iname,$price){
			global $conn;
			$query="UPDATE business_item SET price='$price' WHERE bname='$bname' AND iname='$iname'";
			$result=mysqli_query($conn,$query);			
			return $result;		
		}
		function deletebusinessfrmit($bname){
			global $conn;
			$query="delete FROM business_item WHERE bname='$bname'";
			$result=mysqli_query($conn,$query);
			
			return $result;
		}
		function searchitemsc($iname){
		    global $conn;
			$query="SELECT * FROM business_item WHERE iname LIKE '%$iname%' OR price LIKE '%$iname%'";
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