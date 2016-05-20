<?php
	
	include "conn.php";
	$sql = "SELECT * FROM price";
	$result = $conn->query($sql);
	 if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $img=$row['url'];
            ?>


<style>
	.car{
		border: 1px solid black;
		width: 220px;
		height: 210px;

	}
	.imgs{
		width: 220px;
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
  <div class="car">
  <?php echo "<img class='imgs' src='section/img/$img'/>" ?>
  <p id="bugatti">Bugatti Chiron</p>
  <span class="price"><?php echo $row["price"];?></span><br>
  <input type="submit" id="subm" value="buy">
  <span class="price"><?php echo $row["phone"];?></span>
  
  </div>
<?php }} ?>