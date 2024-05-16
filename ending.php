<?php
        session_start();

        $_SESSION["p1Score"];
        $_SESSION["p2Score"];
        $_SESSION["p3Score"];
        $_SESSION["p1"];
        $_SESSION["p2"];
        $_SESSION["p3"];
        $_SESSION["stevKoc"];
        $_SESSION["stevMet"];
        $_SESSION["stevVrz"];
        $max=$_SESSION["p1Score"];

        for($x=0;$x<3;$x++){
            if($max<$_SESSION["p2Score"])
            $max=$_SESSION["p2Score"];
            else if($max<$_SESSION["p3Score"]){
            $max=$_SESSION["p3Score"];
            }
        }
?>
<!DOCTYPE html>
<html lang="sl">
	<head>
        <title>Gambling Room</title>
		<meta charset="utf-8" >
        <link rel="stylesheet" href="css/style.css">
        <script src="js/ending.js"></script>
        <link rel="shortcut icon" href="images/Logo.ico">
	</head>
	<body onload="redirTimer()">
    <div class="main">
        <h1>Results:</h1>
        <div id="center">
            <form name="Form" id="form" method="post" autocomplete="off" action="game.php">
                <div id="winner">
                    <?php
                        
                        if($max==$_SESSION["p1Score"] && $max==$_SESSION["p2Score"]){echo 'Draw between player '.$_SESSION["p1"].' and player '.$_SESSION["p2"];}
                        elseif($max==$_SESSION["p1Score"] && $max==$_SESSION["p3Score"]){echo 'Draw between player '.$_SESSION["p1"].' and player '.$_SESSION["p3"];}
                        elseif($max==$_SESSION["p3Score"] && $max==$_SESSION["p2Score"]){echo 'Draw between player '.$_SESSION["p3"].' and player '.$_SESSION["p2"];}
                        elseif($max==$_SESSION["p1Score"]){echo 'Congratulations player '.$_SESSION["p1"].' you are the winner!';}
                        elseif($max==$_SESSION["p2Score"]){echo 'Congratulations player '.$_SESSION["p2"].' you are the winner!';}
                        elseif($max==$_SESSION["p3Score"]){echo 'Congratulations player '.$_SESSION["p3"].' you are the winner!';}
                        else{
                            echo 'Something went wrong';
                        }
                    ?>
                    <br>
                </div>
                <div class="igralci" id="igralci">
                    <?php echo $_SESSION["p1"];  ?></br>
                    <?php echo $_SESSION["p1Score"];  ?></br>
                </div>
                <div class="igralci" id="igralci">
                    <?php echo $_SESSION["p2"];  ?></br>
                    <?php echo $_SESSION["p2Score"];  ?></br>
                </div>
                <div class="igralci" id="igralci">
                    <?php echo $_SESSION["p3"];  ?></br>
                    <?php echo $_SESSION["p3Score"];  ?></br>
                </div>
                <div class="down" id="down">Redirecting to home page...  <span id="time">5</span> seconds.</div>
            </form>
        </div>
        </div>
	</body>
</html>