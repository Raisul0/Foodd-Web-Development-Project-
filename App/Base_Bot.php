				</div>
				
				<?php 
					include_once("../Data/addvert_access.php");
					$result=getTop2();
						for($i=0;$i<2;$i++){
							include_once("../Data/business_info_access.php");
							$business=searchBusinessbybname($result[$i]['bname']);
							
							if($_SESSION['user']['type']=="customer"){
								echo '<div class="pos">
											<a href="Restaurant_Home.php?bname='.$business["bname"].'" class="fill-div" />
											<div class="addimagecontainer">
												<div id="divimage">
													<img src="../Image/Logos/'.$business["blogo"].'" alt="Error">
												</div>
											</div>
											<div class="addtext" >
													<b>Name:</b>'.$business["bname"].'</br>
													<b>Address:</b>'.$business["baddress"].'
											</div>
											</a>
									  </div>';
							}else{
									echo '<div class="pos">
											<div class="addimagecontainer">
												<div id="divimage">
													<img src="../Image/Logos/'.$business["blogo"].'" alt="Error">
												</div>
											</div>
											<div class="addtext" >
													<b>Name:</b>'.$business["bname"].'</br>
													<b>Address:</b>'.$business["baddress"].'
											</div>
									  </div>';
							}
										
						}
					
				?>
			
			
			</div>
			
			<div id="foot">
				<footer>
					<div color="red">
							<b">© Copyright 2017 FooDD is a registered trademark . FooDD Bangladesh !!</b>
							</br> <a id="ab"href="http://127.0.0.1/foodd_01/app/about.php">About Us</a>
					</div>
				</footer>
			</div>
		</div>
	</body>
</html>