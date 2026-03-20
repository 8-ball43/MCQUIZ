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
        <a href=""></a><a href=""></a><a href=""></a>
    </nav>
    <main>
        <section class="block">
            <form method="post" action='login.php' autocomplete="off">
                <label>Podaj swój nik</label>
                <input type="text" name="login"><br>
                <label>Pdaj hasło:</label>
                <input type="password" name="pass"><br><br>
                <p>Nie masz jescze konta?<a class="a_u" href="Register.php">Załóż konto</a></p>
                <button type="submit">Zaloguj się</button>
                <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $username = $_POST['login'];
                    $password = $_POST['pass'];

                    $conn = mysqli_connect("localhost","root","","mcquiz");

                    $stmt = mysqli_prepare($conn,"SELECT * FROM uzytkownicy WHERE username=?");
mysqli_stmt_bind_param($stmt,"s",$username);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

if($user){

    if($user['haslo'] == $password){

        $NewToken = rand(10000,90000);

        setcookie("token", $NewToken, time() + (86400 * 30), "/");
        setcookie("id",$user['id_user'], time() + (86400 * 30), "/");

        $stmt2 = mysqli_prepare($conn,"UPDATE uzytkownicy SET token=? WHERE username=?");
        mysqli_stmt_bind_param($stmt2,"ss",$NewToken,$username);
        mysqli_stmt_execute($stmt2);

        header("Location: quiz.php");
        exit();

    }else{
        echo("Niepoprawne hasło");
    }

}else{
    echo ("Nie istnieje taki użytkownik");
}
mysqli_close($conn);
}

                ?>
            </form>
        </section>
    </main>
</body>
</html>