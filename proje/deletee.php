<?php 
	if(isset($_GET["id"])){
		$id = $_GET['id'];
		require_once("conn.php");
		
		$sql = "DELETE FROM price WHERE id = '$id'";
		if($conn->query($sql)===TRUE){
			echo "da";
		}else{
			echo "FAil".$conn->error;
		}
		$conn->close();	
				
	}
	header("Location: /proje/car.php?id=1");
?>
