<?php
	include("administrative_top.php");
?>
<?php

include_once("../Data/dboy_access.php");

    $result=show_dboy();
			
	$total=count($result);
			if($total==0){echo"No Dboy for Delete";}
        else{

	echo '<div id="dboydlt"><ul>';
	for($i=0;$i<$total;$i++){
		
	echo '<div class="addbclass"><li>'.$result[$i]['uname'].'</div><a id="underline" href="show_dboy.php?uname='.$result[$i]['uname'].'">DELETE</a></li></br></br>';
	
	}
		}
	echo " </div></ul>";
	
?>
						</tbody>
					</table>
				</form>
<?php
	include("Base_Bot_admin.php");
?>	

