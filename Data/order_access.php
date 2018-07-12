<?php
	if(require_once("../Data/db.php")){
	
		function getorder_forapprove(){
			global $conn;
			$query="SELECT * FROM orders where status='Unapproved' ORDER BY uname ";
			$result=mysqli_query($conn,$query);
			var_dump($result);
			$order;			
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$order[$i]=$row;
			}
			return $order;
		}
		
		
		function getUserOrder(){
			global $conn;
			
			$query="select orderid,uname, bname,ordertime,dboy,orderstatus,total, count(orderid) as countorder from orders where orderstatus='Unapproved' group by orderid ";
		 	$result=mysqli_query($conn,$query);
			$num_rows = mysqli_num_rows($result);

			if($num_rows!=0){
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$order[$i]=$row;
			}
			return $order;
			}
		}
		function getUserOrderwithu($orderid){
			global $conn;
			
			$query="select uname,orderid, bname,ordertime,dboy,orderstatus,total, count(orderid) as countorder from orders where orderid='$orderid' group by orderid ";
		 	$result=mysqli_query($conn,$query);
			
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$orders[$i]=$row;
			}
			
			return $orders;
		}
		function getOrdersbyid($orderid){
				global $conn;
			
				$query="SELECT iname,quantity FROM orders where orderid='$orderid'";
				$result=mysqli_query($conn,$query);
				
				for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$orderitem[$i]=$row;
			}
			
		
				
				
			return $orderitem;
		}
		
		function getcorderofdboy($dname){
			
			global $conn;		
			
			$query="select uname,orderid,bname,ordertime,dboy,orderstatus,total, count(orderid) as countorder from orders where dboy='$dname' AND (orderstatus='Approved' OR orderstatus='Ready') group by orderid ";
		 	$result=mysqli_query($conn,$query);
			$num_rows = mysqli_num_rows($result);

			if($num_rows!=0){
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$order[$i]=$row;
			}
			return $order;
			}
		}
		
		function updateorderdboy($uname,$orderid){
			global $conn;
			$query="UPDATE orders SET dboy='$uname', orderstatus='Approved' WHERE orderid='$orderid'";
			
			$result=mysqli_query($conn,$query);
			$query="UPDATE dboy_info SET stage='Working' WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			
			return true;
		
		}
		
		function searchUserforOrder($uname){
			global $conn;
			$query="SELECT * FROM user WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			
			return mysqli_fetch_assoc($result);
		}
		
		function updateafterdone($uname,$orderid){
			global $conn;
			$query="UPDATE orders SET dboy='$uname', orderstatus='Delivered' WHERE orderid='$orderid'";
			
			$result=mysqli_query($conn,$query);
			$query="UPDATE dboy_info SET stage='available'WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			
			return true;	
		}
		
		function getallorderofdboy($dname){
			
			global $conn;		
			
			$query="select uname,orderid,bname,ordertime,dboy,orderstatus,total, count(orderid) as countorder from orders where dboy='$dname' AND orderstatus='Delivered' group by orderid ";
		 	$result=mysqli_query($conn,$query);
			$num_rows = mysqli_num_rows($result);

			if($num_rows!=0){
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$order[$i]=$row;
			}
			return $order;
			}
		}
	}
	
?>