<?php
	if(require_once("../Data/db.php")){
		
		function addsponsor($name,$address,$logo,$cost_sponsor,$date_sp){
			
			global $conn;

			$query="INSERT INTO sponsor_info( name, address, logo,cost_sponsor,date_sp) VALUES ('$name','$address','$logo','$cost_sponsor','$date_sp')";
		 	$result=mysqli_query($conn,$query);
						
			return $result;
		}
		function deletesponsor($name)
		{
			global $conn;
			$query="DELETE FROM sponsor_info WHERE name='$name'";
			$result=mysqli_query($conn,$query);
		     return 1;
		}
		function search_name($name){
			global $conn;
			$query="SELECT * FROM sponsor_info WHERE name='$name'";
			$result=mysqli_query($conn,$query);
			return mysqli_fetch_assoc($result);
		}
		
		
		function allsponsor()
		{
			global $conn;
			$query="SELECT * FROM sponsor_info ";
			$result=mysqli_query($conn,$query);
			$num_rows = mysqli_num_rows($result);

			if($num_rows!=0){
			for($i=0;$row=mysqli_fetch_assoc($result);$i++){
				$dboy[$i]=$row;
			}
			return $dboy;
			}
		}
		 
	
	}else{
		echo "Database not found";
	}
	
?>