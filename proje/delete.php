<?php 
	if(isset($_GET["id"])){
		$id = $_GET['id'];
		require_once("conn.php");
		
		$sql = "DELETE FROM videos WHERE id = '$id'";
		if($conn->query($sql)===TRUE){
			echo "da";
		}else{
			echo "FAil".$conn->error;
		}
		$conn->close();	
				
	}
	header("Location: /proje/index.php?Link=media");
?>
