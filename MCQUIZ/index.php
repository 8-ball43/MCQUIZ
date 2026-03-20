<?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          setcookie("token", "", time() - 3600, "/");
          setcookie("id", "", time() - 3600, "/");
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
    <nav>
        <button><a href="ranked.php">Ranking wyników</a></button>
        <?php
        if(isset($_COOKIE['token'])) {
            echo("<button><a href='my_result.php'>Moje wyniki</button>");
        echo("<form action='index.php' class='form_logout' method='post'>");
        echo("<button type='sumbit'>Wyloguj się</button></form>");
       }
       else{
        echo("<button><a href='login.php'>Zaloguj się</a></button");
       }
    
        ?>
</form>
    </nav>
    <main>
        
            <button class="button_quiz"  type="button"><a href="quiz.php"> ZRÓB QUIZ</a></button>
        
    </main>
</body>
</html>