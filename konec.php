<?php
session_start();

?>
<!DOCTYPE html>
<html>
<hr class="top-line">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link rel="stylesheet"  href="CSS/style2.css" />
        <title>Disco Dice</title>
    </head>
    <body>
        <div id="naslov">
            <h1>Disco<br>Dice</h1>
        </div>
        <div id="igrac">
		<?php
		
       
		
		if($_SESSION["vsota3"]<=$_SESSION["vsota1"] && $_SESSION["vsota1"]>=$_SESSION["vsota2"]){
			if($_SESSION["vsota1"]==$_SESSION["vsota2"] && $_SESSION["vsota1"]==$_SESSION["vsota3"]){
				echo "The winners are:",$_SESSION["i1"]," ",$_SESSION["i2"]," ",$_SESSION["i3"];
			}
			elseif($_SESSION["vsota1"]==$_SESSION["vsota2"]){
				echo "The winners are: ",$_SESSION["i1"]," ",$_SESSION["i2"];
			}
			elseif($_SESSION["vsota1"]==$_SESSION["vsota3"]){
				echo "The winners are: ",$_SESSION["i1"]," ",$_SESSION["i3"];
			}
			else{
				echo "The winner is: ",$_SESSION["i1"];	
			}
		}
	
		elseif($_SESSION["vsota2"]>=$_SESSION["vsota3"]){
			if($_SESSION["vsota2"]>$_SESSION["vsota1"]){
				echo "The winner is: ", $_SESSION["i2"];	
			}
			else{
				echo "The winners are: ",$_SESSION["i2"]," ",$_SESSION["i3"];
			}
		}
		
		else{
			echo "The winner is: ",$_SESSION["i3"];
		}
		
        //echo $_SESSION["vsota1"]," ",$_SESSION["vsota2"]," ",$_SESSION["vsota3"];
        ?>
		</div>
		<div id="centered-button">
   		 <input type="submit" class="gumb" onClick="redirectToIndex()" name="igraj" value="RESTART"/>
		</div>
		<script>
    	function redirectToIndex() {
        window.location.href = "index.php";
    }
</script>
        
    </body>
        <!--<script>
        function redirTimer() {self.setTimeout ("self.location.href='index.php';",10000);} 
        redirTimer();

        var seconds_left = 10;
        setInterval(function() {
            document.getElementById('cas').innerHTML = --seconds_left;}, 1000);
        </script>
		!-->

</html> 