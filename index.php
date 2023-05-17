<?php
session_start();

?>
<!DOCTYPE html>

<html>
<hr class="top-line">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css"  href="CSS/style.css" />
        <title>Disco Dice</title>
    </head>

    <body>
        
        <div id="naslov">
            <h1>Disco<br>Dice</h1>
        </div>

        <div id="glavni">
            <form action="igra.php" name="forma" method="post">
                <div id="igrac">               
                    <div class="igralec"><span style="color: #ff0043;">FIRST</span><br>PLAYER<br /><br /><input type="text" name="ime1"  autofocus/></div>
                    <div class="igralec"><span style="color: #ff0043;">SECOND</span><br>PLAYER<br /><br /><input type="text" name="ime2"  autofocus/></div>
                    <div class="igralec"><span style="color: #ff0043;">THIRD</span><br>PLAYER<br /><br /><input type="text" name="ime3"  autofocus/></div>
                    <div id="izbira">DICE
                            <select name="stkock">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                </div>
                            </select>
                                <br />
                        <input type="submit" class="gumb" onClick="return isEmpty()" name="igraj" value="ROLL"/>
                 </div>
                

            </form>
        </div>
        
        
        
    </body>
    <script>
        function isEmpty(){
        if(document.forms['forma'].ime1.value == "" || document.forms['forma'].ime2.value == "" || document.forms['forma'].ime3.value == "")
        {
            alert("Vnesi vsa imena!");
            return false;
        }
            return true;
        }
    </script>
</html> 