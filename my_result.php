<?php
if(!isset($_COOKIE['token'])) {
    header("Location: login.php");
    exit();
}
$token = $_COOKIE['token'];
$id = $_COOKIE['id'];
$conn = mysqli_connect("localhost","root","","mcquiz");
$sql = mysqli_query($conn,"SELECT token FROM uzytkownicy WHERE id_user = '$id'");
$result_one = mysqli_fetch_assoc($sql);
if($result_one['token'] != $token){
    setcookie("id", "", time() - 3600, "/");
    setcookie("token", "", time() - 3600, "/");
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moje wyniki</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="Blok_trawy.png">
</head>
<body>
    <header><h1>Twoje wyniki</h1></header>
    <nav>
        <button type="button"><a href="index.php">Wróć</a></button>
        <button type="button"><a href="ranked.php">Porównaj się z innymi</a></button>
    </nav>
    <main>
        <?php
        

        
        $stmt = mysqli_prepare($conn,"SELECT wyniki.uzyskany_wynik , wyniki.data_zdobycia  FROM wyniki INNER JOIN uzytkownicy ON wyniki.id_gracza = uzytkownicy.id_user WHERE uzytkownicy.token = ?");
        mysqli_stmt_bind_param($stmt,"s",$token);
        if(mysqli_stmt_execute($stmt)){
            $result_set = mysqli_stmt_get_result($stmt);
        
            echo("<table border>");
            echo("<thead><tr><th>Ile zdobyłęś</th><th>Data zrobienia quizu</th></tr></thead>");
            echo("<tbody>");
            while($result = mysqli_fetch_assoc($result_set)){
                echo("<tr><td>".$result['uzyskany_wynik']."</td><td>".$result['data_zdobycia']."</td></tr>");
            }
            echo("</tbody>");
            echo("</table>");
            mysqli_close($conn);
        }
        ?>
    </main>
</body>
</html>