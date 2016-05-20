<?php
    if (isset($_SESSION['name'])) {
        header("Location: http://".$_SERVER["SERVER_NAME"] . ":90/proje/index.php");
    }

    if (isset($_POST["signin"])) {
        $mail=$_POST['mail'];
        $pass=$_POST['pass'];
    
        require_once("conn.php");

        $sql= "SELECT * FROM users WHERE mail = '$mail' AND pass = '$pass'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($row['id'] == "1") {
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['mail'] = $row['mail'];
                    header("Location:index.php");         
                }

                else{
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['mail'] = $row['mail'];
                    header("Location:index.php");
                }
            }
        } else {    
            header("Location:index.php?Link=login&error=1");
        }
        $conn->close();
    }
?>

    <?php 
        if(isset($_REQUEST["error"])){ 
    ?> 
        <script> 
            window.onload = function() { 
            document.getElementById('p1').innerHTML = "Try again"; 
            }        
        </script> 
    <?php 
        } 
    ?>



    <style>
        #p1{
            float: right;
            padding-right: 50px;
            padding-top: 7px;
            color:red;
        }
    </style>
	<form method="post" class="body-login">
        <div class="login">
            <div id="login">LOGIN</div>
            <div class="mail">

                <p>Email:</p>
                <input class="qr" type="email" name="mail" required>

                <p>Password:</p>
                <input class="qr"type="password" name="pass" required ><br>

                <input type="submit"  value="Sign in" id="bottom-regist" name="signin"/> <p id="p1"></p> 
                <div id="need">NEED ACCESS? <span> <a href="index.php?Link=regist" style="color:gray;">REGISTER</a></span></div>
            </div>           
        </div>
    </form>
    

