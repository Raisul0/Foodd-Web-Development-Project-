<?php
	include("Base_Top.php");
?>	
	<div id="locsearch">
		<div id="insideloc"> Location <form method="post"><select name="loc"><option>Uttora </option> <option>Airport</option><option>Boshundora</option><option>Bonani</option><option>Gulshan1,2</option><option>Rampura</option><option>Khilgong</option><option>Danmondhi</option></select><input type="submit" value="Search"/></form></div>
	</div>
	
	<?php 
		if($_SERVER["REQUEST_METHOD"]=='POST'){
			
			include_once("../Data/business_info_access.php");
			$loc=$_REQUEST['loc'];
			$result=searchBusiness($loc);
			
			$total=count($result);
						if($total==0){echo"Not Found anything for this search, Search again !!";}
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
	
	?>

<?php
	include("Base_Bot.php");
?>