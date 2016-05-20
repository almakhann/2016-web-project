<?php session_start();

 	if (!isset($_SESSION['name'])) {
        header("Location: http://".$_SERVER["SERVER_NAME"] . ":90/proje/index.php?Link=login");
    }

	require_once("section/header.php");
	include("function.php");
	include ("conn.php");     
    
    if($_REQUEST['id']==1){ 
		$e = 1;}
	if($_REQUEST['id']==2){ 
		$e = 2;}
	if($_REQUEST['id']==3){ 
		$e = 3;}
	if($_REQUEST['id']==4){ 
		$e = 4;}
	if($_REQUEST['id']==5){ 
		$e = 5;}

	$sql = "SELECT * FROM images";
	$result=$conn->query($sql);

	$user_id = 1; 
	if ($result->num_rows > 1) {
        while($row = $result->fetch_assoc()) {
            $user_id++;
        }
    }

    $path = "image/";
    $im_name = $user_id."_image.jpg";

    $full_path = $path.$im_name;

    if (isset($_FILES['img'])){
        if(is_uploaded_file($_FILES['img']['tmp_name'])){
        	move_uploaded_file($_FILES['img']['tmp_name'],$full_path);
        	toUploadPhoto($e,$full_path);
        }
	}


	if (isset($_POST['send'])) {
        $url = $_POST["url"];
        $year = $_POST["year"];
        $price = $_POST["price"];
        $phone = $_POST["phone"];

         
        require_once("conn.php");
    

        $sql = "INSERT INTO price(url, year,price,phone) VALUES ('$url','$year','$price','$phone')";           
        if($conn->query($sql)===TRUE){
            echo "<script>alert('Added')</script>";
        }
        else{
            echo "ERROR".$sql."<br>".$conn->error;
        }
            $conn->close();    
    }
?>

<style>
	.iot{
		height: 534px;
		width: 100%;
		background-color: #1a1a1a;
		background-repeat: repeat-x;
		padding-left: 15px;
		padding-top: 25px;
	}	
	.fts img{
		width:970px; 
		height:480px;
		float: left;
	}
	.lkj{
		float: right;
		padding-right: 75px;
	}
</style>


<div class="iot">

	<?php if (isset($_SESSION['name'])){
		if($_SESSION['name'] == 'admin'){
	?>
 	<form method="post" enctype="multipart/form-data">
			<input type="file" name="img" id="asdasdasd">
			<input type="submit" value="UPLOAD" id="asf">
	</form>
	<?php }} ?>

	<?php  	ShowImage($e); ?>

	<div class="lkj">
		<form method="post">
		    <input type="file" name="url" ><br>
		    <input type="text" name="year" placeholder="year"><br>
		    <input type="text" name="price" placeholder="price"><br>
		    <input type="text" name="phone" placeholder="phone"><br>
		    <input type="submit"  value="send" name="send" /><br> 
		</form>
	</div>
</div>
<?php
	
	include "conn.php";
	$sql = "SELECT * FROM price";
	$result = $conn->query($sql);
	 if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            	if (($_SESSION['name']=="admin")) {
	    		echo "<a href='deletee.php?id=".$row["id"]."'> Delete </a>";
	    	}
                $img=$row['url'];
            ?>


<style>
	.car{
		border: 1px solid black;
		width: 220px;
		height: 220px;
		background-color: gray;

	}
	.imgs{
		width: 218px;
		height: 125px;

	}
	#bugatti{
		margin: 0 auto;
		padding-left: 30px;
		font-size: 25px;
		font-weight: bold;
	}
	.price{
		font-size: 20px;
		padding-left: 15px;
		float: left;
	}
	#subm{
		float: right;
		margin-right: 25px;
		color: green;
		background-color: lightgreen;
	}

</style>
	<div class="iot">
  <div class="car">
  <?php echo "<img class='imgs' src='section/img/$img'/>" ?>
  <p id="bugatti">Bugatti Chiron</p>
  <span class="price"><?php echo $row["price"];?></span><br>
  <input type="submit" id="subm" value="buy">
  <span class="price"><?php echo $row["phone"];?></span>
  
  </div>
<?php }} ?>
</div>
<?php include("section/footer.php"); ?>