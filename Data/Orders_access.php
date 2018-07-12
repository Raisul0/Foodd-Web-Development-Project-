<?php 
	if(require_once("../Data/db.php")){
		include_once("../Data/business_item_access.php");
		
		
		function insertOrder($uname,$bname,$iname,$quantity,$orderid,$date,$status,$total){
			
			global $conn;
			$item = getitemPrice($bname,$iname);
			$price= $item["price"];
			
			$query="INSERT INTO orders(uname, bname, iname, price, quantity,orderid, ordertime, dboy, orderstatus, total) VALUES ('$uname','$bname','$iname','$price','$quantity','$orderid','$date','Unassinged','$status','$total')";
		 	$result=mysqli_query($conn,$query);
			
			
			return $result;
			
		}
		
		function getUserOrder($uname){
			global $conn;
			
			$query="select orderid, bname,ordertime,dboy,orderstatus,total, count(orderid) as countorder from orders where uname='$uname' group by orderid ORDER BY ordertime DESC";
		 	$result=mysqli_query($conn,$query);
			
			$num_rows = mysqli_num_rows($result);

			if($num_rows!=0){
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$business[$i]=$row;
			}
			return $business;
			}
		}
		
		
		function getallapproveOrder($bname){
			global $conn;
			
			$query="select orderid,bname,ordertime,dboy,orderstatus,total, count(orderid) as countorder from orders where orderstatus='Approved' AND bname='$bname' group by orderid ORDER BY ordertime DESC";
		 	$result=mysqli_query($conn,$query);
			$num_rows = mysqli_num_rows($result);

			if($num_rows!=0){
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$business[$i]=$row;
			}
			return $business;
			}
		}
		
		function getOrdersbyid($orderid){
				global $conn;
			
				$query="SELECT bname,iname,quantity FROM orders where orderid='$orderid'";
				$result=mysqli_query($conn,$query);
				
				for($i=0;$row=mysqli_fetch_assoc($result);$i++){
					$orderitem[$i]=$row;
				}
				
				
			return $orderitem;
		}
		
		function setReady($orderid){
			global $conn;
			$query="UPDATE orders SET orderstatus='Ready' WHERE orderid='$orderid'";
			$result=mysqli_query($conn,$query);
			
			return $result;
		}
		
		
		function getlatestOrderId(){
			global $conn;
			$query="SELECT * FROM orders ORDER BY orderid DESC";
			$result=mysqli_query($conn,$query);
			
			return mysqli_fetch_assoc($result);
		}
		
			function getmyorderhistory($bname){
			global $conn;
			
			$query="select orderid,ordertime,dboy,orderstatus,total, count(orderid) as countorder from orders where bname='$bname' AND orderstatus='Delivered' group by orderid ORDER BY ordertime";
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
		echo "Database Error";
	}
?>