<?php
	include("administrative_top.php");
?>

	<div id="pending_order">
	<p><b>current Business :</b></p>
	</div>
	<?php	/*include_once("../Data/business_info_access.php");
			
			$result=allBusiness();
			
			$total=count($result);
			if($total==0){echo"Result not found !";}
        else{
			
			for($i=0;$i<$total;$i++){
				echo '<div class="DivPlaceOrder" >
							<div class="divorderimage">
								<img src="../Image/Logos/'.$result[$i]["blogo"].'" alt="Error" style="width:80px;height:80px;">
							</div>
							<div class="divordertext" >
								Name:'.$result[$i]["bname"].'</br>
								Location:'.$result[$i]["bloc"].'</br>
								<a id="underline" href="Deletebusiness.php?uname='.$result[$i]["uname"].'&bname='.$result[$i]["bname"].'"><input type="button" value="Delete"class="regbut" style="margin-left:390px;"/></a>
							</div>
						
					  </div>';
		}}*/ ?>
<?php
	include("administrative_bot.php");
?>