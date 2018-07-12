<?php
	include("sponsor_top.php");
?>	

	<div id="pending_order">
	<p><b>current Sponsors :</b></p>
	</div>
	<?php	include_once("../Data/sponsor_access.php");
			
			$result=allsponsor();
			
			$total=count($result);
			if($total==0){echo"No Sponsors is available";}
        else{
			
			for($i=0;$i<$total;$i++){
				echo '<div class="DivPlaceOrder" >
						<a href="'.$result[$i]["address"].'" class="fill-div" />
							<div class="divorderimage">
								<img src="../Image/sponsor/'.$result[$i]["logo"].'" alt="Error" style="width:80px;height:80px;">
							</div>
							<div class="divordertext" >
								Name:'.$result[$i]["name"].'</br>
								Address:'.$result[$i]["address"].'
							</div>
						</a>
					  </div>';
			} 
		}
		?>
<?php
	include("sponsor_bottom.php");
?>	