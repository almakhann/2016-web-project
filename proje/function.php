<?php
	function LoginChecker($mail){
		include "conn.php";
		$sql = "SELECT * FROM users";
		$result = $conn->query($sql);
		$j=0;
		if($result->num_rows > 0){			
			while($row = $result->fetch_assoc()){
				if ($mail==$row['mail']) {
	            	$j++;
	            }
	        }}
	    if($j>0){
	        return false;
	    }
	    else {
	    	return true;
	    }
	}		

	function toUploadPhoto($user_id,$url){
		include "conn.php";
		$sql = "INSERT INTO images(user_id, url ) VALUES ('$user_id', '$url')";
		$conn->query($sql);
	}
	function ShowImage($e){
		include "conn.php";
		$sql = "SELECT * FROM images";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			$j = 0;
			while($row = $result->fetch_assoc()){
				if($row['user_id']==$e){
					if (($_SESSION['name']=="admin")) {
	    			echo "<a href='del.php?id=".$row["id"]."'> Delete </a>";
	    	}
					$r = $row['url'];
					echo "<div class='fts'><img src=\"$r\"></div><br>";
               	    $j++;
				} 
			} 
		}
	}	


	
	
?>