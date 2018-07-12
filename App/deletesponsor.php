<?php
	include("sponsor_top.php");
?>	
	
<?php

include_once("../Data/sponsor_access.php");

    $result=allsponsor();
			
	$total=count($result);
	
    if($total!=0){
	for($i=0;$i<$total;$i++){
		
	echo '<div class="DivPlaceOrder" >
							<div class="divorderimagecontainer">
								<div id="divimage">
									<img src="../Image/sponsor/'.$result[$i]["logo"].'" alt="Error">
								</div>
							</div>
							<div class="divordertext1" >
								<b>Item Name:</b>'.$result[$i]["name"].'</br>
								<b>Cost sponsor:</b>'.$result[$i]["cost_sponsor"].'Tk
								<a id="underline" href="show_sponsor.php?name='.$result[$i]['name'].'"><input type="button" value="Delete"class="regbut" style="margin-left:290px;"/></a>
							</div>
					  </div>';
	}
}
else
{
	echo '<div id="dboydlt"><ul>';
	echo"Nothig for delete";
	echo " </div></ul>";
}
	
?>
						</tbody>
					</table>
				</form>
<?php
	include("sponsor_bottom.php");
?>	
