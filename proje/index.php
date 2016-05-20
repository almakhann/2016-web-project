<?php
	session_start();

	if (isset($_GET['Link'])) {
		$lnk=$_GET['Link'];
	}else{
		$lnk="";
	}
	if (isset($_GET['page'])) {
		$pg=$_GET['page'];
	}else{
		$pg="";
	}
	require_once("section/header.php");

	if($lnk=="models"){Include("models.php");}
	if($lnk=="price"){Include("price.php");}
	if($lnk=="login"){Include("login.php");}
	if($lnk==""){Include("main.php");}
	if($lnk=="logout"){Include("logout.php");}
	if($lnk=="regist"){Include("regist.php");}
	if($lnk=="media"){Include("media.php");}
	if($lnk=="admin"){Include("admin.php");}
	


	

	include("section/footer.php");		
 ?>