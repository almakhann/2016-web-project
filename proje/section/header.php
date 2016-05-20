	<!DOCTYPE html>
<html>
	<head>
		<title>Bugatti-Offical webpage</title>
		<link rel="stylesheet" type="text/css" href="section/main.css">
		<link rel="shortcut icon" href="img/logo.ico"/>
		<meta charset="utf-8">

		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="head">
			<div class="logo"><a href="index.php"><img src="section/img/logo.png"></a></div>	
			<div class="tr">
				<ul>
					<li><a href="index.php" class="home">HOME</a></li>
					<li><input class="search" type="search" placeholder="SEARCH" ><a href="google.com"><span class="glyphicon glyphicon-search" id="asd"></span></a></li>
				</ul>
			</div>
			<div class="ts">
				<ul>
				<li><a href="index.php?Link=models" >MODELS</a></li>
				<li><a href="index.php?Link=media" >MEDIA</a></li>
				<li><a href="index.php?Link=price" >PRICE LIST</a></li>
				<li><a
					<?php 
					if (isset($_SESSION['name'])) {
						echo "<a href=\"index.php?Link=logout\">LOGOUT</a>";
					}else{
						echo "<p><a href=\"index.php?Link=login\"><span class='glyphicon glyphicon-log-in'></span>SIGN IN</a></p>";} 
					?> 
				</li>
				</ul>
			</div>
	    </div>
	    