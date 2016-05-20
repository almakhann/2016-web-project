<?php 
    if (isset($_POST['register'])) {
        $name = $_POST["name"];
        $pass = $_POST["pass"];
        $mail = $_POST["mail"];
              
        require_once("conn.php");
        include "function.php";

        if(LoginChecker($mail)){
            $sql = "INSERT INTO users(name, pass, mail) VALUES ('$name','$pass','$mail')";           
            if($conn->query($sql)===TRUE){
                 header("Location: index.php?Link=login");
            }
            else{
                echo "ERROR".$sql."<br>".$conn->error;
            }
            $conn->close();

        }else{ 
             header("Location:index.php?Link=regist&error=1"); ;   
            }
    }
?>

  <?php 
        if(isset($_REQUEST["error"])){ 
    ?> 
        <script> 
            window.onload = function() { 
            document.getElementById('p1').innerHTML = "Enter another login"; 
            }        
        </script> 
    <?php 
        } 
    ?>

    <style>
        #p1{
            float: right;
            padding-right: 40px;
            padding-top: 15px;
            color:red;
            font-size: 17px;
        }
    </style>
	<form method="post" class="body-regist">
    	<div class="regist">
    		<div id="login">SIGN UP</div>
    		
            <div class="mail">
    			<p>Name:</p>
    			<input class="qr" type="text" name="name" required>

    			<p>Password:</p>
    			<input class="qr" type="password" name="pass" required>

    			<p>Email:</p>
    			<input class="qr" type="email" name="mail" required><br>

    			
    			<input type="submit" value="Register" id="bottom-regist" name="register"/>
                <p id="p1"></p>
    			<div id="need" style="color:white;">HAVE AN ACCOUNT? <span> <a href="index.php?Link=login" style="color:#d9d9d9;">LOGIN</a></span></div>
    		</div>   		 
    	</div>   	
    </form>

<?php require_once("section/footer.php");?>