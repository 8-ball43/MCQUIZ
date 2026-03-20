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
        <section class="block">
            <form method="post" action="Register.php" autocomplete="off">
                <label>Podaj swój nik</label><br><br>
                <input type="text" name="login" required><br>
                <label>Pdaj hasło:</label><br><br>
                <input type="password" name="pass" required><br><br>
                <label>Powtóz hasło</label><br><br>
                <input type="password" name="pass2" required><br>
                <button type="submit">Zatwierdż i przejdż do quizu</button>
            </form>
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                
              $login = $_POST['login'];
              $password = $_POST['pass'];
              $password2 = $_POST['pass2'];

              if($password != $password2){
                echo("podane hasła śą różne");
              }
              else if($password == $password2){
                $conn = mysqli_connect("localhost","root","","mcquiz");
                $stmt = mysqli_prepare($conn, "INSERT INTO uzytkownicy(username,haslo)VALUES(?,?)");
                mysqli_stmt_bind_param($stmt,"ss",$login,$password);
                if(mysqli_stmt_execute($stmt)){
                    header("Location:login.php");
                }
                else{
                    echo("ERROR: Coś poszło nie tak");
                }
                mysqli_close($conn);
              }
            }
            
            ?>
        </section>
    </main>
</body>
</html>