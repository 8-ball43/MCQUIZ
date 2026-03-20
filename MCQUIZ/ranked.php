<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topka</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="Blok_trawy.png">
</head>
<body>
    <header><h1>Top 10 najlepsych wuników</h1></header>
    <nav><button><a href="index.php">Wyjdż</a></button></nav>
    <main>
        <table border>
            <thead>
                <tr><th>GRACZ</th><th>UZYSKANY WYNIK</th><th>DATA ROZWIĄZANIA QUIZU</th></tr>
            </thead>
            <tbody>
                <?php
                $conn = mysqli_connect("localhost","root","","mcquiz");
                $sql = mysqli_query($conn," SELECT uzytkownicy.username, wyniki.uzyskany_wynik,wyniki.data_zdobycia FROM uzytkownicy INNER JOIN wyniki ON uzytkownicy.id_user = wyniki.id_gracza ORDER BY  uzyskany_wynik DESC LIMIT 10");
                while($row = mysqli_fetch_assoc($sql)){
                    echo("<tr><td>".$row['username']."</td><td>".$row['uzyskany_wynik']."</td><td>".$row['data_zdobycia']."</td></tr>");
                }
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>