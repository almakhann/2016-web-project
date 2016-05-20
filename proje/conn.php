<?php 
	$conn=new mysqli("localhost","root","","proje");
	if($conn->connect_error){
		die("fail".$conn->connect_error);
	}
 ?>