<?php
session_start();

?>
<!DOCTYPE html>
<html>
<hr class="top-line">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link rel="stylesheet"  href="CSS/style1.css" />
        <title>Gambling</title>
        <script src="js/igra.js"></script>
    </head>
    <body >

        <div id="naslov">
            <h1>Disco<br>Dice</h1>
        </div>
        
        <?php 

            $_SESSION["i1"]=$_POST['ime1'];
            $_SESSION["i2"]=$_POST['ime2'];
            $_SESSION["i3"]=$_POST['ime3'];
            $_SESSION["stKock"]=$_POST['stkock'];
            
            $_SESSION["vsota1"]=0;
            $_SESSION["vsota2"]=0;
            $_SESSION["vsota3"]=0;
            
            switch ($_SESSION["stKock"]) {
                case 1:
                    $_SESSION["igralec1k1"]=rand(1,6);
                  break;
                case 2:
                    $_SESSION["igralec1k1"]=rand(1,6);
                    $_SESSION["igralec1k2"]=rand(1,6);
                  break;
                case 3:
                    $_SESSION["igralec1k1"]=rand(1,6);
                    $_SESSION["igralec1k2"]=rand(1,6);
                    $_SESSION["igralec1k3"]=rand(1,6);
                  break;
                  
                default:
                  ;
              } 

              
              switch ($_SESSION["stKock"]) {
                case 1:
                    $_SESSION["igralec2k1"]=rand(1,6);
                  break;
                case 2:
                    $_SESSION["igralec2k1"]=rand(1,6);
                    $_SESSION["igralec2k2"]=rand(1,6);
                  break;
                case 3:
                    $_SESSION["igralec2k1"]=rand(1,6);
                    $_SESSION["igralec2k2"]=rand(1,6);
                    $_SESSION["igralec2k3"]=rand(1,6);
                  break;
                  
                default:
                  ;
              } 
             
              switch ($_SESSION["stKock"]) {
                case 1:
                    $_SESSION["igralec3k1"]=rand(1,6);
                  break;
                case 2:
                    $_SESSION["igralec3k1"]=rand(1,6);
                    $_SESSION["igralec3k2"]=rand(1,6);
                  break;
                case 3:
                    $_SESSION["igralec3k1"]=rand(1,6);
                    $_SESSION["igralec3k2"]=rand(1,6);
                    $_SESSION["igralec3k3"]=rand(1,6);
                  break;
                  
                default:
                  ;
              } 

        ?>          

        <div id="glavni">
           
                <div id="igrac">               
                    <div class="igralec"><?php echo $_SESSION["i1"],"<br />";
                    
                   // sleep(1);
                    switch ($_SESSION["stKock"]) {
                        case 1:
                            echo "<div id='anim1' style='height:48px;'><img style='margin:5px 0;' src='slike/dice-anim.gif'></div>";
                            
                            echo "<div id='kocke1' style='display:none;'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec1k1"],".gif'></div>";
                            $_SESSION["vsota1"]=$_SESSION["igralec1k1"];
                          break;
                        case 2:
                            echo "<div id='anim1' style='height:48px;'><img style='margin:5px 0;' src='slike/dice-anim.gif'><img style='margin:5px 0;' src='slike/dice-anim.gif'></div>";
                            echo "<div id='kocke1' style='display:none;'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec1k1"],".gif'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec1k2"],".gif'></div>";
                            $_SESSION["vsota1"]=$_SESSION["igralec1k1"]+$_SESSION["igralec1k2"];
                            break;
                        case 3:
                            echo "<div id='anim1' style='height:48px;'><img style='margin:5px 0;' src='slike/dice-anim.gif'><img style='margin:5px 0;' src='slike/dice-anim.gif'><img style='margin:5px 0;' src='slike/dice-anim.gif'></div>";
                            echo "<div id='kocke1' style='display:none;'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec1k1"],".gif'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec1k2"],".gif'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec1k3"],".gif'></div>";
                            $_SESSION["vsota1"]=$_SESSION["igralec1k1"]+$_SESSION["igralec1k2"]+$_SESSION["igralec1k3"];
                            break;
                            
                        default:
                          ;
                      } 
                    ?></div>
                    <div class="igralec"><?php echo $_SESSION["i2"],"<br />";
                     
                    switch ($_SESSION["stKock"]) {
                        case 1:
                            echo "<div id='anim2' style='height:48px;'><img style='margin:5px 0;' src='slike/dice-anim.gif'></div>";
                            echo "<div id='kocke2' style='display:none;'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec2k1"],".gif'></div>";
                            $_SESSION["vsota2"]=$_SESSION["igralec2k1"];
                          break;
                        case 2:
                            echo "<div id='anim2' style='height:48px;'><img style='margin:5px 0;' src='slike/dice-anim.gif'><img style='margin:5px 0;' src='slike/dice-anim.gif'></div>";
                            echo "<div id='kocke2' style='display:none;'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec2k1"],".gif'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec2k2"],".gif'></div>";
                            $_SESSION["vsota2"]=$_SESSION["igralec2k1"]+$_SESSION["igralec2k2"];
                            break;
                        case 3:
                            echo "<div id='anim2' style='height:48px;'><img style='margin:5px 0;' src='slike/dice-anim.gif'><img style='margin:5px 0;' src='slike/dice-anim.gif'><img style='margin:5px 0;' src='slike/dice-anim.gif'></div>";
                            echo "<div id='kocke2' style='display:none;'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec2k1"],".gif'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec2k2"],".gif'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec2k3"],".gif'></div>";
                            $_SESSION["vsota2"]=$_SESSION["igralec2k1"]+$_SESSION["igralec2k2"]+$_SESSION["igralec2k3"];
                            break;
                        
                        default:
                          ;
                      } 
                    ?></div>
                    <div class="igralec"><?php echo $_SESSION["i3"],"<br />";
                   
                        
                        switch ($_SESSION["stKock"]) {
                            case 1:
                                echo "<div id='anim3' style='height:48px;'><img style='margin:5px 0;' src='slike/dice-anim.gif'></div>";
                                echo "<div id='kocke3' style='display:none;'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec3k1"],".gif'></div>";
                                $_SESSION["vsota3"]=$_SESSION["igralec3k1"];
                            break;
                            case 2:
                                echo "<div id='anim3' style='height:48px;'><img style='margin:5px 0;' src='slike/dice-anim.gif'><img style='margin:5px 0;' src='slike/dice-anim.gif'></div>";
                                echo "<div id='kocke3' style='display:none;'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec3k1"],".gif'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec3k2"],".gif'></div>";
                                $_SESSION["vsota3"]=$_SESSION["igralec3k1"]+$_SESSION["igralec3k2"];
                                break;
                            case 3:
                                echo "<div id='anim3' style='height:48px;'><img style='margin:5px 0;' src='slike/dice-anim.gif'><img style='margin:5px 0;' src='slike/dice-anim.gif'><img style='margin:5px 0;' src='slike/dice-anim.gif'></div>";
                                echo "<div id='kocke3' style='display:none;'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec3k1"],".gif'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec3k2"],".gif'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec3k3"],".gif'></div>";
                                $_SESSION["vsota3"]=$_SESSION["igralec3k1"]+$_SESSION["igralec3k2"]+$_SESSION["igralec3k3"];
                                break;
                            
                            default:
                            ;
                        } ?>
                        </div>
                </div>
                
                    <div id="izbira">
                    <?php echo '<div class="text-beautify">Number of Dices: ' . $_SESSION["stKock"] . '</div>';
                      echo " <form action=\"konec.php\" name=\"forma\" method=\"post\"><input type=\"submit\" class=\"gumb\"  name=\"rezultati\" value=\"RESULTS\"/></form>"; 

                       ?>
                 </div>
                

            
        </div>
        
    </body>
</html> 