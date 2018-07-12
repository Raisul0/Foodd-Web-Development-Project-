<?php
	session_start();
	if(isset($_SESSION['user'])==false){
		header("location: login.php");
		
		}
	if(isset($_SESSION['user'])==true)
	{
		if($_SESSION['user']['type']!="admin")
		{
				header("location: login.php");
		}
	}
?>

<html>
	<head>
	
    <meta name="viewport" content="width=device-width" />

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="AdminDesign.css">
		<title>FooDD</title>
	</head>

	<body >
		<div id="wholeBody">
			<div id="topHead">
				<header>
				<div id="logoadmin">
			 <img src="h.png">
			 </div>
					<p><h1 id="textadmin">Welcome <?=$_SESSION['user']['name']?></h1></p>
					<div id="divtop">	
				<a id="top"href="message_customer.php"><span class="fa fa-envelope-o"></span></br></a>
					</div>
					
						
				</header>
			</div>
			
			<div id="sidebar">
				<ul id="ulside">
					<li><a href="Admin_Home.php"><span class="fa fa-home"></span>Home</a></li>
					<li><a href="administrative_home.php"><span class="fa fa-users"></span>Administration</a></li>
					<li><a href="AddAdmin.php"><span class="fa fa-user"></span>Add Admin</a></li>
					<li><a href="AddDBoy.php"><span class="fa fa-user"></span>Add Delivary Boy</a></li>
					<li><a href="ApproveBusiness.php"><span class="fa fa-id-card"></span>Create business Acc</a></li>
					<li><a href="DeleteAdmin.php"><span class="fa fa-trash-o"></span>Delete Admin</a></li>
					<li><a href="DeleteDBoy.php"><span class="fa fa-trash-o"></span>Delete Delivary Boy</a></li>
					<li><a href="logout.php"><span class="fa fa-sign-out"></span>Log Out</a></li>
				</ul>
			</div>
			
			<div id="mainbody">
				<div id="content">
			