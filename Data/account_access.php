<?php
	if(require_once("../Data/db.php")){
		
		function addexpense($expenses_name,$cost,$date_ex){
			
			global $conn;

			$query="INSERT INTO expenses_info( expenses_name,cost,date_ex) VALUES ('$expenses_name',$cost,'$date_ex')";

		 	$result=mysqli_query($conn,$query);
						

			return $result;
		}
		function addincome($income_name,$income_cost,$date_income){
			
			global $conn;

			$query="INSERT INTO income_info( income_name,income_cost,date_income) VALUES ('$income_name',$income_cost,'$date_income')";

		 	$result=mysqli_query($conn,$query);
						

			return $result;
		}
		
		function updatedboysal($uname,$totalsal_paid,$date_salpaid){
			global $conn;
			$query="UPDATE dboy_info SET totalsal_paid='$totalsal_paid', date_salpaid='$date_salpaid' WHERE uname='$uname'";
			$result=mysqli_query($conn,$query);
			
			return 1;
		}
		
		function extotalcost()
		{
		
			global $conn;
			$query="SELECT * FROM expenses_info";
			$result=mysqli_query($conn,$query);
			$costs;
			
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$costs[$i]=$row;
			}
			return $costs;
		    
		}
		
		
		function allexpenses()
		{
			global $conn;
			$query="SELECT * FROM expenses_info ORDER BY date_ex DESC ";
			$result=mysqli_query($conn,$query);
			$dboys;
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$dboys[$i]=$row;
			}
			return $dboys;
		}
		function incometotalcost()
		{
		
			global $conn;
			$query="SELECT * FROM income_info";
			$result=mysqli_query($conn,$query);
			$costs;
			
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$costs[$i]=$row;
			}
			return $costs;
		    
		}
		 function allincome()
		{
			global $conn;
			$query="SELECT * FROM income_info ORDER BY date_income DESC ";
			$result=mysqli_query($conn,$query);
			$dboys;
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$dboys[$i]=$row;
			}
			return $dboys;
		}
	
	}else{
		echo "Database not found";
	}
	
?>