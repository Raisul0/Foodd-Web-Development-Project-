<?php
	include("Base_Top.php");
?>	

<!DOCTYPE html>
	<html>
<style>input[type=text], select {
    width: 100%;
    padding: 22px 20px;
    margin: -20px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #2e6da4;
    color: white;
    padding: 14px 20px;
    margin: 25px 0;
    border: #204d74;
    border-radius: 4px;
    cursor: pointer;
}</style>
	<head>
		
	</head>
		<body>
		              <form method="post" align="center">
							</br><input type="text" name="search" placeholder="Search......."><input type="submit" value="Search">
						
                      </form>
	</body>	
	
	<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		
		include_once("../Data/business_info_access.php");
			if($_REQUEST['search']==Null){echo"<ul><li>Please Search,Your Search Should be a Resturent or a Resturent Location  or your favourite menu  </li></ul>";}
		else{
		$search=$_REQUEST['search'];
        $result=searchbusi($search);
        $total=count($result);
			if($total==0){
					include_once("../Data/business_item_access.php");
					$result=searchbusi($search);
					$result1=searchitemsc($search);
					
					$total1=count($result1);
					if($total1==0){echo "<ul><li>Your Search Should be a Resturent or a Resturent Location or your favourite menu </li></ul>";}
					else{
					for($j=0;$j<$total1;$j++){
					$result2=searchbusi($result1[$j]["bname"]);
					$total2=count($result2);
						
				   
					for($i=0;$i<$total2;$i++){
							echo '<div class="DivPlaceOrder" >
									<a href="Restaurant_Home.php?bname='.$result2[$i]["bname"].'" class="fill-div" />
										<div class="divorderimagecontainer">
											<div id="divimage">
												<img src="../Image/Logos/'.$result2[$i]["blogo"].'" alt="Error">
											</div>
										</div>
										<div class="divordertext" >
											<b>Name:</b>'.$result2[$i]["bname"].'</br>
											<b>Address:</b>'.$result2[$i]["baddress"].'
										</div>
									</a>
								  </div>';
						
					}
				 }
					}
			}
			
        else{      
        for($i=0;$i<$total;$i++){
				echo '<div class="DivPlaceOrder" >
						<a href="Restaurant_Home.php?bname='.$result[$i]["bname"].'" class="fill-div" />
							<div class="divorderimagecontainer">
								<div id="divimage">
									<img src="../Image/Logos/'.$result[$i]["blogo"].'" alt="Error">
								</div>
							</div>
							<div class="divordertext" >
								<b>Name:</b>'.$result[$i]["bname"].'</br>
								<b>Address:</b>'.$result[$i]["baddress"].'
							</div>
						</a>
					  </div>';
			
		}
     }	
}
}
?>


<?php
	include("Base_Bot.php");
?>