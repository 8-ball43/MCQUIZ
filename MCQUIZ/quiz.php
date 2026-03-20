<?php
session_start();
if(!isset($_COOKIE['token'])) {
    header("Location: login.php");
    exit();
}
$token = $_COOKIE['token'];
$conn = mysqli_connect("localhost","root","","mcquiz");

$sql = mysqli_query($conn,"SELECT * FROM uzytkownicy WHERE token = '$token'");

if(mysqli_num_rows($sql) == 0){
    header("Location: login.php");
    exit();
}
$user = mysqli_fetch_assoc($sql);

if($_SERVER["REQUEST_METHOD"] == "POST"){
                $sql_id = mysqli_query($conn,"SELECT id_user FROM uzytkownicy WHERE token='$token' ");
                $result_id = mysqli_fetch_assoc($sql_id);
                $ID = $result_id['id_user'];
                $points = $_COOKIE['punkty'];
                $stmt = mysqli_prepare($conn,"INSERT INTO wyniki(id_gracza,uzyskany_wynik)VALUES(?,?)");
                mysqli_stmt_bind_param($stmt,"ii",$ID,$points);
                if(mysqli_stmt_execute($stmt)){
                    setcookie("punkty", "", time() - 3600, "/");
                    header("Location:index.php");
                    exit();
                }
                else{
                    echo("error");
                }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCQUIZ</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="Blok_trawy.png">
</head>
<body>
    <header><h1>MCQUIZ</h1></header>
    <main>
        <section id="quest_1" class="quest_block">
            <?php
            $conn = mysqli_connect("localhost","root","","mcquiz");
            $sql_1_1 = mysqli_query($conn,"SELECT tresc FROM pytania WHERE id_pytania = 1");
            $result_1_1 = mysqli_fetch_assoc($sql_1_1);
            echo("<h2>".$result_1_1['tresc']."</h2><br>");
            echo("<img src='2.png'><br>");
            $sql_1_2 = mysqli_query($conn,"SELECT*FROM odpowiedzi WHERE pytanie_id = 1");
            $i = 1;
            
            
            while($result_1_2 = mysqli_fetch_assoc($sql_1_2)){
                echo("<button value= ".$i."  class='button_1'><b>".$result_1_2['litera']."</b> ".$result_1_2['tresc']."</button>");
                  $i++;  
                }
            
            ?>
        </section>
        <section id="quest_2" class="hidden">
            <?php
             $sql_2_1 = mysqli_query($conn,"SELECT tresc FROM pytania WHERE id_pytania = 2");
             $result_2_1 = mysqli_fetch_assoc($sql_2_1);
             echo("<h2>".$result_2_1['tresc']."</h2><br>");
             echo("<img src='3.png'><br>");
             $sql_2_2 = mysqli_query($conn,"SELECT*FROM odpowiedzi WHERE pytanie_id = 2");
             $a = 1;
             while($result_2_2 = mysqli_fetch_assoc($sql_2_2)){
                 echo("<button value= ".$a."  class='button_2'><b>".$result_2_2['litera']."</b> ".$result_2_2['tresc']."</button>");
                  $a++;  
             }

            ?>
        </section>
        <section id="quest_3" class="hidden">
            <?php
            $sql_3_1 = mysqli_query($conn,"SELECT tresc FROM pytania WHERE id_pytania = 3");
            $result_3_1 = mysqli_fetch_assoc($sql_3_1);
            echo("<h2>".$result_3_1['tresc']."?</h2>");
            echo("<img src='4.png'><br>");
            $sql_3_2 = mysqli_query($conn,"SELECT*FROM odpowiedzi WHERE pytanie_id = 3");
            $b = 1;
             while($result_3_2 = mysqli_fetch_assoc($sql_3_2)){
                 echo("<button value= ".$b."  class='button_3'><b>".$result_3_2['litera']."</b> ".$result_3_2['tresc']."</button>");
                  $b++;  
             }
            ?>
        </section>
        <section id="quest_4" class="hidden">
            <?php
            $sql_4_1 = mysqli_query($conn,"SELECT tresc FROM pytania WHERE id_pytania = 4");
            $result_4_1 = mysqli_fetch_assoc($sql_4_1);
            echo("<h2>".$result_4_1['tresc']."</h2>");
            echo("<img src='end.jpg'><br>");
            $sql_4_2 = mysqli_query($conn,"SELECT*FROM odpowiedzi WHERE pytanie_id = 4");
            $c = 1;
            while($result_4_2 = mysqli_fetch_assoc($sql_4_2)){
                 echo("<button value= ".$c."  class='button_4'><b>".$result_4_2['litera']."</b> ".$result_4_2['tresc']."</button>");
                 $c++;
            }

            ?>
        </section>
        <section id="quest_5" class="hidden">
          <?php
          
          $sql_5_1 = mysqli_query($conn,"SELECT tresc FROM pytania WHERE id_pytania = 5");
          $result_5_1 = mysqli_fetch_assoc($sql_5_1);
          echo("<h2>".$result_5_1['tresc']."</h2>");
          echo("<img src='5.png'><br>");
          $sql_5_2 = mysqli_query($conn,"SELECT*FROM odpowiedzi WHERE pytanie_id = 5");
          $d = 1;
          while($result_5_2 = mysqli_fetch_assoc($sql_5_2)){
            echo("<button value=".$d." class='button_5'><b>".$result_5_2['litera']."</b> ".$result_5_2['tresc']."</button>");
            $d++;
          }
          ?>
        </section>
        <section id="quest_6" class="hidden">
            <?php
            $sql_6_1 = mysqli_query($conn,"SELECT tresc FROM pytania WHERE id_pytania = 6");
            $result_6_1 = mysqli_fetch_assoc($sql_6_1);
            echo("<h2>".$result_6_1['tresc']."</h2>");
            echo("<img src='6.png'><br>");
            $sql_6_2 = mysqli_query($conn,"SELECT*FROM odpowiedzi WHERE pytanie_id = 6");
            $e = 1;
            while($result_6_2 = mysqli_fetch_assoc($sql_6_2)){
                echo("<button value=".$e." class='button_6'<b>".$result_6_2['litera']."</b> ".$result_6_2['tresc']."</button>");
                $e++;
            }
            ?>
        </section>
        <section id="quest_7" class="hidden">
           <?php
           $sql_7_1 = mysqli_query($conn,"SELECT tresc FROM pytania WHERE id_pytania = 7");
           $result_7_1 = mysqli_fetch_assoc($sql_7_1);
           echo("<h2>".$result_7_1['tresc']."</h2>");
           echo("<img src='7.png'><br>");
           $sql_7_2 = mysqli_query($conn,"SELECT*FROM odpowiedzi WHERE pytanie_id = 7");
           $f = 1;
           while($result_7_2 = mysqli_fetch_assoc($sql_7_2)){
            echo("<button value=".$f." class='button_7'<b>".$result_7_2['litera']."</b> ".$result_7_2['tresc']."</button>");
            $f++;
           }
           ?>
        </section>
        <section id="quest_8" class="hidden">
            <?php
            $sql_8_1 = mysqli_query($conn,"SELECT tresc FROM pytania WHERE id_pytania = 8");
            $result_8_1 = mysqli_fetch_assoc($sql_8_1);
            echo("<h2>".$result_8_1['tresc']."</h2>");
            echo("<img src='8.png'><br>");
            $sql_8_2 = mysqli_query($conn,"SELECT*FROM odpowiedzi WHERE pytanie_id = 8");
            $g = 1;
            while($result_8_2 = mysqli_fetch_assoc($sql_8_2)){
                echo("<button value=".$g." class='button_8'<b>".$result_8_2['litera']."</b> ".$result_8_2['tresc']."</button>");
                $g++;
            }
            ?>
        </section>
        <section id="quest_9" class="hidden">
            <?php
            $sql_9_1 = mysqli_query($conn,"SELECT tresc FROM pytania WHERE id_pytania = 9");
            $result_9_1 = mysqli_fetch_assoc($sql_9_1);
            echo("<h2>".$result_9_1['tresc']."</h2>");
            echo("<img src='herobrine.png'><br>");
            $sql_9_2 = mysqli_query($conn,"SELECT*FROM odpowiedzi WHERE pytanie_id = 9");
            $h = 1;
            while($result_9_2 = mysqli_fetch_assoc($sql_9_2)){
                echo("<button value=".$h." class='button_9'><b>".$result_9_2['litera']."</b> ".$result_9_2['tresc']."</button>");
                $h++;
            }
            ?>
        </section>
        <section id="quest_10" class="hidden">
            <?php
            $sql_10_1 = mysqli_query($conn,"SELECT tresc FROM pytania WHERE id_pytania = 10");
            $result_10_1 = mysqli_fetch_assoc($sql_10_1);
            echo("<h2>".$result_10_1['tresc']."</h2>");
            echo("<img src ='10.png'><br>");
            $sql_10_2 = mysqli_query($conn,"SELECT*FROM odpowiedzi WHERE pytanie_id = 10");
            $i = 1;
            while($result_10_2 = mysqli_fetch_assoc($sql_10_2)){
                echo("<button value =".$i." class='button_10'><b>".$result_10_2['litera']."</b> ".$result_10_2['tresc']."</button>");
                $i++;
            }
            mysqli_close($conn);
            ?>
        </section>
        <section id="final_block" class="hidden">
            <h2>Gratulacje</h2>
            <h3 class="final" >Twój wynik to:<span id="p"></span></h3>
            <br>
            <form action="quiz.php" method="post">
                <button type="submit" class="final_button">Zakońć</button>
            </form>
            <?php
            
            ?>
            
        </section>
    </main>
    <script src="script_js.js">
    </script>
</body>
</html>