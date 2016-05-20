
	<?php if (isset($_SESSION['name'])){
		if($_SESSION['name'] == 'admin'){
	?>
	<div >
	<form method="post">
		<input  type="text" name="name" placeholder="name" required>
		<input  type="text" name="url" placeholder="url" required><br><br>
		<input   type="submit" value="SUBMIT">
	</form>
</div>
<?php }} ?>



<?php

 	if (!isset($_SESSION['name'])) {
        header("Location: http://".$_SERVER["SERVER_NAME"] . ":90/proje/index.php");
    }

	require_once("conn.php");
	
	$sql = "SELECT * FROM videos";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	   
	    while($row = $result->fetch_assoc()) {
	    	if (($_SESSION['name']=="admin")) {
	    		echo "<a href='delete.php?id=".$row["id"]."'> Delete </a>";
	    	}
	        echo "<div class='body'><iframe class='video' width=\"700\" height=\"450\"   src=\"https://www.youtube.com/embed/".$row["url"]."frameborder=\"0\"  allowfullscreen></iframe><br>
	        <p class='nm'>".$row["name"]."</p></div>" ;

	    }
	} else {	
	    echo "0 results";
	}

?>


<?php
	if (isset($_POST["name"])) {
		$name = $_POST["name"];
		$url = $_POST["url"];
			
		require_once("conn.php");
			
		$sql="INSERT INTO videos(name, url) VALUES ('$name','$url')";
		if($conn->query($sql)===TRUE){
			echo "<script>alert('ok')</script>";
			header("location: index.php?Link=media");
		}
		else{
			echo "ERROR".$sql."<br>".$conn->error;
		}
		$conn->close();
	}	
?>




<style>
	.body{
		height: 534px;
		width: 100%;
		background-color: #1a1a1a;
		background-repeat: repeat-x;
    }
    .video{
    	margin-top: 25px;
    	margin-left: 320px;
    }
    .nm{
    	color: white;
    	font-size: 25px;
    	padding-left: 480px;
   }
</style>
