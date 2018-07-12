<?php
	include("Base_Top.php");
?>

                    
					<table>
						<tbody>
							<tr>
								<td><b>Name</b></td>
								<td>:</td>
								<td><?= $_SESSION['user']['name']; ?></td>
							</tr>
							<tr>
								<td><b>Email</b></td>
								<td>:</td>
								<td><?= $_SESSION['user']['email']; ?></td>
							</tr>
							<tr>
								<td><b>Address</b></td>
								<td>:</td>
								<td><?= $_SESSION['user']['address']; ?></td>
							</tr>
							<tr>
								<td><b>Mobile No</b></td>
								<td>:</td>
								<td><?= $_SESSION['user']['mblno']; ?></td>
							</tr>
						</tbody>
					</table>
</html>
<?php
	include("Base_Bot.php");
?>

